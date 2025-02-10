<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

 class StripeController extends Controller
{

   public function checkout()
   {
       \Stripe\Stripe::setApiKey(config('stripe.sk'));

       $session = \Stripe\Checkout\Session::create([
           'line_items' => [[
               'price_data' => [
                   'currency' => 'myr',
                   'product_data' => [
                       'name' => 'T-shirt',
                   ],
                   'unit_amount' => 2000,
               ],
               'quantity' => 1,
           ]],
           'mode' => 'payment',
           'success_url' => route('success'),
           'cancel_url' => route('home'),
       ]);

         return redirect()->away($session->url);

   }

   public function success()
   {
    return view('home');
   }
}
