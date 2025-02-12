<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @yield ('head')
</head>

<body class="text-black flex flex-col min-h-screen font-poppins">
    <main class="flex-grow">

        <header>
            <nav class="bg-base-200 border-gray-200 ">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{asset('images/Advosafe.png')}}" class="logo" alt="Flowbite Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-base-200">
                            <li>
                            <a href="{{route('home')}}">
                            <div
                                    class="flex items-center justify-between w-full px-2 py-3 rounded-sm relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                                    <span>Home</span>
                                </div>
                                </a>
                            </li>
                            <li>
                            <div class="mt-3 relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                                <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1" data-dropdown-trigger="hover" class="flex items-center justify-between w-full px-6 py-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-black ">Training <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                            </div>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar1" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-2/6">
                                    <ul class="py-2 text-sm text-black " aria-labelledby="dropdownLargeButton1">
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100 ">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100 ">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100 ">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="mt-3 relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" data-dropdown-trigger="hover" class="flex items-center justify-between w-full px-6 py-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto text-black">
                                        Services
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar2" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-2/6">
                                    <ul class="py-2 text-sm text-black" aria-labelledby="dropdownLargeButton2">
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-6 py-3 hover:bg-gray-100">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                            <a href="{{route('home')}}">
                            <div
                                    class="flex items-center justify-between w-full px-2 py-3 rounded-sm relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                                    <span>Resources</span>
                                </div>
                                </a>
                            </li>
                            <li>
                            <a href="{{route('contact')}}">
                            <div
                                    class=" w-full px-2 py-3  relative text-black hover:text-gray-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                                    <span>Contact</span>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('main')
    </main>



    <footer class="footer bg-base-200 text-base-content p-10" data-theme="halloween">
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
    </footer>

    <footer class="footer bg-base-200 text-base-content border-base-300 border-t px-10 py-4" data-theme="halloween">
        <aside class="grid-flow-col items-center">
            <img
                width="24"
                height="24"
                viewBox="0 0 24 24"
                src="{{asset('images/AdvosafeSmall.png')}}"
                xmlns="{{asset('images/AdvosafeSmall.png')}}"
                fill-rule="evenodd"
                clip-rule="evenodd"
                class="fill-current">
            <path
                d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </img>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://advosafe.net/" class="hover:underline">Advosafe</a>. All Rights Reserved.</span>
        </aside>
        <nav class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>

    @yield('footer')
    </footer>

</body>

</html>