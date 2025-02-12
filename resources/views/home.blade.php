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
        <button class="btn btn-logo ">Get Started</button>
      </div>
    </div>
  </div>
</section>
<!-- HERO -->


<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img
      src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
      class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Box Office News!</h1>
      <p class="py-6">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-logo">Get Started</button>
    </div>
  </div>
</div>

<!-- PRiCING -->
<!-- 

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

               Stripe form
              <form action="{{ route('checkout') }}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="checkout-button flex items-center justify-center bg-indigo-700 text-white border-none py-2.5 px-5 text-md rounded-md w-full hover:bg-indigo-500 transition-colors duration-300 mt-6" type="submit">Get it!</button>
              </form>
               Stripe form 

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
              <a href="{{ route('contact') }}" class="checkout-button flex items-center justify-center bg-indigo-700 text-white border-none py-2.5 px-5 text-md rounded-md w-full hover:bg-indigo-500 transition-colors duration-300 mt-6">
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

-->
<!-- PRiCING -->

@endsection

@section('footer')
@endsection