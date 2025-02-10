@extends('layout.default')

@section('head')
@endsection

@section('main')

<!-- HERO -->
<section>
  <div class="hero min-h-screen" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-neutral-content text-center">
      <div class="max-w-md">
        <div class="w-full h-full flex justify-center items-center">

          <h1 id="typewriter" class="mb-5 text-5xl font-bold">Advosafe</h1>
        </div>
        <p class="mb-5">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>
</section>
<!-- HERO -->

<!-- PROCESS STEP -->
<section>
  <div class="p-4 min-h-full">
    <div class="max-w-7xl mx-auto h-max px-6 md:px-12 xl:px-6">
      <div class="md:w-2/3 lg:w-1/2">

        <h2 class="my-8 text-2xl font-bold text-white md:text-4xl">How we work?</h2>
        <p class="text-gray-300">We follow our process to get you started as quickly as possible</p>
      </div>
      <div
        class="mt-16 grid divide-x divide-y  divide-gray-700 overflow-hidden rounded-3xl border text-gray-600 border-gray-700 sm:grid-cols-2 lg:grid-cols-4  lg:divide-y-0 xl:grid-cols-4">
        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
          <div class="relative space-y-8 py-12 p-8">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
              </path>
              <path d="M10 10l2 -2v8"></path>
            </svg>
            <div class="space-y-2">
              <h5 class="text-xl font-semibold text-white transition">Initial Discussion</h5>
              <p class="text-gray-300">We will have discussions on the requirements to ensure your MVP (Minimum Viable
                Product) is ready for the initial launch</p>
            </div>
          </div>
        </div>
        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
          <div class="relative space-y-8 py-12 p-8">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
              </path>
              <path d="M10 8h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3"></path>
            </svg>
            <div class="space-y-2">
              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Deal Finalized</h5>
              <p class="text-gray-300">Once we agree on what to build, We will start working on it right away.</p>
            </div>
          </div>
        </div>
        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
          <div class="relative space-y-8 py-12 p-8">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
              </path>
              <path
                d="M10 9a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1">
              </path>
            </svg>
            <div class="space-y-2">
              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Product Delivery</h5>
              <p class="text-gray-300">We will develop your product MVP in 15 days (more time required depending on the
                complexity of the project)</p>
            </div>
          </div>
        </div>
        <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
          <div class="relative space-y-8 py-12 p-8">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
              stroke-linejoin="round" color="white" style="color:white" height="50" width="50"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z">
              </path>
              <path d="M10 8v3a1 1 0 0 0 1 1h3"></path>
              <path d="M14 8v8"></path>
            </svg>
            <div class="space-y-2">
              <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Celebrate your Launch
              </h5>
              <p class="text-gray-300">We love Celebrations. We will celebrate your launch on our Social Profiles.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- PRiCING -->

<!-- PRiCING -->
<section>
  <div class="hero  min-h-full">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="space-y-6 lg:px-8 mt-20 text-center group">
        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3 lg:pb-10">
          <div class="pricing-wrapper w-full relative rounded-2xl bg-gradient-to-t from-gray-300 to-white p-0.5 shadow-[0_0px_25px_0px_rgba(0,0,0,0.1)] transition-all duration-300 ease-in-out hover:shadow-[0_0px_25px_0px_rgba(0,0,0,0.2)]">
            <div class="relative bg-white rounded-2xl p-8 text-center max-w-full w-full z-0 overflow-hidden hover:translate-y-[-5px] transition-all duration-300 ease-in-out h-full flex flex-col justify-between will-change-transform">
              <div>
                <h3 class="plan-title text-xl text-gray-800">Free Download</h3>
                <span class="plan-title text-xs relative top-[-7px] m-0 text-gray-600">get it anywhere</span>
                <p class="plan-price text-3xl my-2 font-extrabold text-indigo-500">Free</p>
                <p class="text-gray-800 mt-4 text-balance">Turn any device into a personal cloud hub at home. Always free, no strings attached.</p>
              </div>
              <a href="https://get.homedock.cloud" onClick="{handleDownloadClick}" class="checkout-button flex items-center justify-center bg-indigo-700 text-white border-none py-2.5 px-5 text-md rounded-md w-full hover:bg-indigo-500 transition-colors duration-300 mt-6">
                <span class="iconify mr-1 text-lg mb-0.5" data-icon="mdi:download" data-inline="false"></span>
                <span>Free Download</span>
              </a>
              <svg xmlns="http://www.w3.org/2000/svg" class="iconify absolute top-8 left-8 text-[500px] z-[-1] pointer-events-none text-gray-100 transition duration-1000 delay-500 group-hover:-translate-y-8 group-hover:-translate-x-8 iconify--mdi" width="1em" height="1em" viewBox="0 0 20 20">
                <path fill="currentColor" fillRule="evenodd" d="M6 2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.414A2 2 0 0 0 15.414 6L12 2.586A2 2 0 0 0 10.586 2zm5 6a1 1 0 1 0-2 0v3.586l-1.293-1.293a1 1 0 1 0-1.414 1.414l3 3a1 1 0 0 0 1.414 0l3-3a1 1 0 0 0-1.414-1.414L11 11.586z" clipRule="evenodd" />
              </svg>
            </div>
          </div>

          <div class="pricing-wrapper w-full relative rounded-2xl bg-gradient-to-t from-blue-300 to-white p-0.5 shadow-[0_0px_25px_0px_rgba(0,0,0,0.1)] transition-all duration-300 ease-in-out hover:shadow-[0_0px_25px_0px_rgba(0,0,0,0.2)]">
            <div class="relative pricing-cloud rounded-2xl p-8 text-center max-w-full w-full z-0 overflow-hidden hover:translate-y-[-5px] transition-all duration-300 ease-in-out h-full flex flex-col justify-between will-change-transform">
              <div>
                <h3 class="plan-title text-xl text-gray-800">In the Cloud!</h3>
                <span class="plan-title text-xs relative top-[-7px] m-0 text-blue-600">starting at</span>
                <p class="plan-price text-3xl my-2 font-extrabold text-indigo-500">9.95€<span class="text-base text-indigo-300">/mo</span></p>
                <p class="text-gray-800 mt-4 text-balance">Unlock the power of the cloud with expanded features and storage for an all-encompassing digital journey.</p>
              </div>

              <!-- Stripe form -->
              <form action="{{ route('checkout') }}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="checkout-button flex items-center justify-center bg-indigo-700 text-white border-none py-2.5 px-5 text-md rounded-md w-full hover:bg-indigo-500 transition-colors duration-300 mt-6" type="submit">Get it!</button>
              </form>
              <!-- Stripe form -->

              <svg xmlns="http://www.w3.org/2000/svg" class="iconify absolute top-8 left-8 text-[500px] z-[-1] pointer-events-none text-blue-100 transition duration-1000 delay-200 group-hover:-translate-y-8 group-hover:-translate-x-8 iconify--mdi" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" fillRule="evenodd" d="M11 4.25a6.75 6.75 0 0 0-6.624 5.448A5.25 5.25 0 0 0 6.5 19.75h11a5.25 5.25 0 0 0 .02-10.5a6.75 6.75 0 0 0-6.52-5m3.53 7.28a.75.75 0 1 0-1.06-1.06L10 13.94l-1.47-1.47a.75.75 0 0 0-1.06 1.06l2 2a.75.75 0 0 0 1.06 0z" clipRule="evenodd" />
              </svg>
            </div>
          </div>

          <div class="pricing-wrapper w-full relative rounded-2xl bg-gradient-to-t from-indigo-600 to-white p-0.5 shadow-[0_0px_25px_0px_rgba(0,0,0,0.1)] transition-all duration-300 ease-in-out hover:shadow-[0_0px_25px_0px_rgba(0,0,0,0.2)]">
            <div class="relative bg-white rounded-2xl p-8 text-center max-w-full w-full z-0 overflow-hidden hover:translate-y-[-5px] transition-all duration-300 ease-in-out h-full flex flex-col justify-between will-change-transform">
              <div>
                <h3 class="plan-title text-xl text-gray-800">Enterprise</h3>
                <span class="plan-title text-xs relative top-[-7px] m-0 text-indigo-600">contact us for info</span>
                <p class="plan-price text-3xl my-2 font-extrabold text-indigo-500">~</p>
                <p class="text-gray-800 mt-4 text-balance">Experience enterprise-level efficiency with premium support for seamless cloud operations.</p>
              </div>
              <a href="/contact/" class="checkout-button flex items-center justify-center bg-indigo-700 text-white border-none py-2.5 px-5 text-md rounded-md w-full hover:bg-indigo-500 transition-colors duration-300 mt-6">
                <span class="iconify mr-1 text-lg mb-0.5" data-icon="mdi:briefcase" data-inline="false"></span>
                <span>Contact us!</span>
              </a>
              <svg xmlns="http://www.w3.org/2000/svg" class="iconify absolute top-8 left-8 text-[500px] z-[-1] pointer-events-none text-indigo-100 transition duration-1000 delay-1000 group-hover:-translate-y-8 group-hover:-translate-x-8 iconify--mdi" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M22 13.478V18a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-4.522l.553.277a21 21 0 0 0 18.897-.002zM14 2a3 3 0 0 1 3 3v1h2a3 3 0 0 1 3 3v2.242l-1.447.724a19 19 0 0 1-16.726.186l-.647-.32l-1.18-.59V9a3 3 0 0 1 3-3h2V5a3 3 0 0 1 3-3zm-2 8a1 1 0 0 0-1 1a1 1 0 1 0 2 .01c0-.562-.448-1.01-1-1.01m2-6h-4a1 1 0 0 0-1 1v1h6V5a1 1 0 0 0-1-1" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- PRiCING -->

<!-- TESTIMONIES -->
<section id="testimonies" class="py-20 bg-slate-900">
  <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
    <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
      <div class="mb-12 space-y-5 md:mb-16 md:text-center">
        <div
          class="inline-block px-3 py-1 text-sm font-semibold text-indigo-100 rounded-lg md:text-center text-cn bg-[#202c47] bg-opacity-60 hover:cursor-pointer hover:bg-opacity-40">
          Words from Others
        </div>
        <h1 class="mb-5 text-3xl font-semibold text-white md:text-center md:text-5xl">
          It's not just us.
        </h1>
        <p class="text-xl text-gray-100 md:text-center md:text-2xl">
          Here's what others have to say about us.
        </p>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      <ul class="space-y-8">
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Kanye West</h3>
                    <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Find God.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                    <p class="text-gray-500 text-md">CEO of Apple</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                  fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                  aliquam malesuada bibendum.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Kanye West</h3>
                    <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Find God.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                    <p class="text-gray-500 text-md">CEO of Apple</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                  fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                  aliquam malesuada bibendum.</p>
              </div>
            </a>
          </div>
        </li>
      </ul>
      <ul class="hidden space-y-8 sm:block">
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/paraga" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Parag Agrawal</h3>
                    <p class="text-gray-500 text-md">CEO of Twitter</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Enim neque volutpat ac tincidunt vitae
                  semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                  pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                    <p class="text-gray-500 text-md">CEO of Apple</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                  fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                  aliquam malesuada bibendum.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/paraga" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Parag Agrawal</h3>
                    <p class="text-gray-500 text-md">CEO of Twitter</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Enim neque volutpat ac tincidunt vitae
                  semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                  pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                    <p class="text-gray-500 text-md">CEO of Apple</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                  fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                  aliquam malesuada bibendum.</p>
              </div>
            </a>
          </div>
        </li>
      </ul>
      <ul class="hidden space-y-8 lg:block">
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Satya Nadella</h3>
                    <p class="text-gray-500 text-md">CEO of Microsoft</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Tortor dignissim convallis aenean et
                  tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                  eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Dan Schulman</h3>
                    <p class="text-gray-500 text-md">CEO of PayPal</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Quam pellentesque nec nam aliquam sem
                  et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Satya Nadella</h3>
                    <p class="text-gray-500 text-md">CEO of Microsoft</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Tortor dignissim convallis aenean et
                  tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                  eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
              </div>
            </a>
          </div>
        </li>
        <li class="text-sm leading-6">
          <div class="relative group">
            <div
              class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
            </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
              <div
                class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                <div class="flex items-center space-x-4"><img
                    src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                    class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                  <div>
                    <h3 class="text-lg font-semibold text-white">Dan Schulman</h3>
                    <p class="text-gray-500 text-md">CEO of PayPal</p>
                  </div>
                </div>
                <p class="leading-normal text-gray-300 text-md">Quam pellentesque nec nam aliquam sem
                  et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
              </div>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- TESTIMONIES -->

@endsection

@section('footer')
@endsection