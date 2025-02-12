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

<section class="">
  <div>
  <h2 class="text-2xl text-dark font-bold text-center sm:text-4xl mt-5 p-5">Advosafe List of Services</h2>
  <p class="max-w-3xl mx-auto text-xl text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
  </div>
  <div class="container mx-auto px-4 py-8 ">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-5">

      <!-- Service Block 1 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg" style="background-image: url('https://media.istockphoto.com/id/1462139281/photo/two-professional-heavy-industry-engineers-wearing-hard-hats-at-factory-walking-and-discussing.jpg?s=612x612&w=0&k=20&c=FnrNr4HGDxxknumX1o5LYsgaLpH4GjmaNipQ0g7OzRY=');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">In House Training</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 1</p>
        </div>
      </a>
      <!-- Service Block 2 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg" style="background-image: url('https://t3.ftcdn.net/jpg/04/40/29/94/360_F_440299419_s4b12RfNDJvpplheVDmKdhFGJiHlAYNs.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">Monitoring</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 2</p>
        </div>
      </a>
      <!-- Service Block 3 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg" style="background-image: url('https://www.shutterstock.com/image-photo/technology-research-facility-female-project-600nw-1682713504.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">Service 3</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 3</p>
        </div>
      </a>
</section>

<section class="bg-base-200 p-5">
  <div class="container max-w-xl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl font-bold text-center sm:text-5xl">New Features</h2>
      <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
    </div>
    <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
      <div>
        <div class="mt-4 space-y-12">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center w-12 h-12 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-rocket">
                  <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                  </path>
                  <path
                    d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                  </path>
                  <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                  <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                </svg></div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium leadi ">Advanced Learning Algorithms</h4>
              <p class="mt-2 ">Discover our improved learning algorithms that adapt to your preferences and provide even more personalized learning suggestions.</p>
            </div>
          </div>
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center w-12 h-12 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-bookmark-plus">
                  <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                  <line x1="12" x2="12" y1="7" y2="13"></line>
                  <line x1="15" x2="9" y1="10" y2="10"></line>
                </svg></div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium leadi ">Interactive Learning Resources</h4>
              <p class="mt-2 ">Access an extensive library of interactive resources that make your learning journey engaging and interactive.</p>
            </div>
          </div>
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center w-12 h-12 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-video">
                  <path d="m22 8-6 4 6 4V8Z"></path>
                  <rect width="14" height="12" x="2" y="6" rx="2" ry="2"></rect>
                </svg></div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium leadi ">Enhanced Video Streaming</h4>
              <p class="mt-2 ">Experience seamless video integration with enhanced streaming capabilities, providing a better and more uninterrupted learning experience.</p>
            </div>
          </div>
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center w-12 h-12 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-file-question">
                  <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                  <path d="M10 10.3c.2-.4.5-.8.9-1a2.1 2.1 0 0 1 2.6.4c.3.4.5.8.5 1.3 0 1.3-2 2-2 2"></path>
                  <path d="M12 17h.01"></path>
                </svg></div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium leadi ">Advanced Quiz Generation </h4>
              <p class="mt-2 ">Take your knowledge testing to the next level with advanced quiz generation, providing more customization options for your quizzes.</p>
            </div>
          </div>
        </div>
      </div>
      <div aria-hidden="true" class="mt-10 lg:mt-0">
        <img width="600" height="600" src="https://images.unsplash.com/photo-1516542076529-1ea3854896f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8Y29tcHV0ZXJ8ZW58MHwwfHx8MTY5OTE3MDk1N3ww&ixlib=rb-4.0.3&q=80&w=1080" class="mx-auto rounded-lg shadow-lg dark-bg-gray-500" style="color:transparent">
      </div>
    </div>
  </div>
</section>

<section>
<div class="bg-green-50 dark:bg-gray-800 pt-12 sm:pt-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-5xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white">The Ultimate Data Analytics Platform</h2>
    </div>
  </div>
  <div class="mt-10 bg-white dark:bg-gray-700 pb-12 sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-green-50 dark:bg-gray-800"></div>
      <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl">
          <dl class="rounded-lg bg-white dark:bg-gray-800 shadow-lg sm:grid sm:grid-cols-3">
            <div class="flex flex-col border-b border-gray-100 dark:border-gray-700 p-6 text-center sm:border-0 sm:border-r">
              <dt class="order-2 mt-2 text-lg font-normal leading-6 text-gray-500 dark:text-gray-300">Data Sources, including APIs and databases</dt>
              <dd class="order-1 text-5xl font-bold tracking-tight text-green-600 dark:text-green-400"><span>30</span>+</dd>
            </div>
            <div class="flex flex-col border-t border-b border-gray-100 dark:border-gray-700 p-6 text-center sm:border-0 sm:border-l sm:border-r">
              <dt class="order-2 mt-2 text-lg font-normal leading-6 text-gray-500 dark:text-gray-300">Analytic Tools and Machine Learning Models</dt>
              <dd class="order-1 text-5xl font-bold tracking-tight text-green-600 dark:text-green-400"><span>100</span>+</dd>
            </div>
            <div class="flex flex-col border-t border-gray-100 dark:border-gray-700 p-6 text-center sm:border-0 sm:border-l">
              <dt class="order-2 mt-2 text-lg font-normal leading-6 text-gray-500 dark:text-gray-300">Real-time Data Streams and Dashboards</dt>
              <dd class="order-1 text-5xl font-bold tracking-tight text-green-600 dark:text-green-400"><span>10</span>+</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
</section>


@endsection

@section('footer')
@endsection