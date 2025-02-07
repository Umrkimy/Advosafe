<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

 class AuthController extends Controller
{
    public function showSignup(){
        return view('auth.signup');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function signup(Request $request){

        $validated = $request->validate([
            'name' => 'required|min:3|max:255|string' ,
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|string|min:8|confirmed',
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|max:255|string',
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect()->route('home');
        }
    
        throw ValidationException::withMessages([
            'credentials' => 'Sorry, incorrect credentials'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
