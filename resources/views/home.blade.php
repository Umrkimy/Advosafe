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
        <div class="w-full h-full flex flex-col justify-center items-center">
          <h1 class="mb-2 text-5xl font-bold">Are you looking for <span id="typewriter" class="text-5xl font-bold text-logo"></span></h1>
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

<section class=" p-5">
  <div class="container max-w-xl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl font-bold text-center sm:text-5xl">New Features</h2>
      <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">Explore </p>
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
                </svg>
              </div>
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
                </svg>
              </div>
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
                </svg>
              </div>
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
                </svg>
              </div>
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

<!-- Promotions -->
<section class="bg-base-300 p-5">
  <div>
    <h2 class="text-xl font-bold text-center sm:text-4xl mt-10">Latest Training Promotion</h2>
    <p class="max-w-3xl mx-auto mt-4 text-l text-center">Don't miss out on the promotion</p>
    <div class="w-24 h-1 mx-auto mt-2" style="background-color: #d0bc99;"></div>
  </div>
  <div class="mb-5 p-5">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="https://mysheqa.com/promotion/environment-training-and-enviro360-conference-2025/">
            <img class="w-full h-auto " src="https://mysheqa.com/wp-content/uploads/2024/12/Environmental-Q22025-BlogPost-v2-1536x877.webp" alt="Advosa Promotions" />
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://mysheqa.com/promotion/environment-training-and-enviro360-conference-2025/">
            <img class="w-full h-auto" src="https://mysheqa.com/wp-content/uploads/2024/12/Environmental-Q22025-BlogPost-v2-1536x877.webp" alt="Advosa Promotions" />
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://mysheqa.com/promotion/environment-training-and-enviro360-conference-2025/">
            <img class="w-full h-auto" src="https://mysheqa.com/wp-content/uploads/2024/12/Environmental-Q22025-BlogPost-v2-1536x877.webp" alt="Advosa Promotions" />
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://mysheqa.com/promotion/environment-training-and-enviro360-conference-2025/">
            <img class="w-full h-auto" src="https://mysheqa.com/wp-content/uploads/2024/12/Environmental-Q22025-BlogPost-v2-1536x877.webp" alt="Advosa Promotions" />
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://mysheqa.com/promotion/environment-training-and-enviro360-conference-2025/">
            <img class="w-full h-auto" src="https://mysheqa.com/wp-content/uploads/2024/12/Environmental-Q22025-BlogPost-v2-1536x877.webp" alt="Advosa Promotions" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Promotions -->

<!-- Introduce Consultant -->
<section class="bg-base-200 p-5">
  <div>
    <h2 class="text-2xl text-dark font-bold text-center sm:text-5xl mt-5 p-5">Introduce Consultant</h2>
    <div class="w-24 h-1 mx-auto mt-2" style="background-color: #d0bc99;"></div>
  </div>  
  <div id="container" class="p-20 sm:p-16 md:p-20 lg:p-24 xl:p-20 w-auto flex flex-col md:flex-row px-4 sm:px-8 md:px-24 lg:px-24 xl:px-24 relative">
    <div class="mr-10">
      <img
        class="rounded-lg min-w-[100px] w-full h-auto md:w-auto md:h-auto md:ml-auto md:mr-0 transition-transform duration-300 ease-in-out hover:scale-110"
        src="https://media.licdn.com/dms/image/v2/D5603AQEv-Tab7T-gwA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1720195654531?e=1744848000&v=beta&t=JGYV_K6h1Ym8Wv5SdsRY1YZK89RgyhtjcTHdhX7qhkA"
        alt="image of myself"
        style="width: 100%; height: auto;"
      />
    </div>
    <div class="w-full sm:w-[70%] md:w-[60%] lg:w-[50%]">
      <h1 class="text-gray-500 font-bold text-3xl mt-6 ">
        Safety Engineer
      </h1>
      <h1 class="text-black font-bold text-3xl  mb-8">
        Muhammad Aswad bin Abdul Aziz
      </h1>
      <p class="text-black w-full sm:w-[35rem] md:w-[30rem] lg:w-[25rem] mb-10">
        I'm Muhammad Aswad bin Abdul Aziz, an experienced Safety Engineer Consultant. With years of expertise in safety engineering, I am dedicated to ensuring the highest standards of safety in various industries. My journey in this field has equipped me with the skills and knowledge to provide top-notch consultancy services. Feel free to connect if you have questions, collaboration ideas, or just want to discuss the latest in safety engineering!
      </p>

      <div>
        <h2 class="text-3xl text-dark font-bold  sm:text-3xl mt-5 p-5">Social Media</h2>
        <ul class="flex space-x-5">
          <li>
            <a href="#" class="text-gray-900 hover:text-gray-700">
              <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-900 hover:text-gray-700">
              <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-900 hover:text-gray-700">
              <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                </path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-900 hover:text-gray-700">
              <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="text-gray-900 hover:text-gray-700">
              <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11.75 20h-3v-11h3v11zm-1.5-12.5c-.97 0-1.75-.78-1.75-1.75s.78-1.75 1.75-1.75 1.75.78 1.75 1.75-.78 1.75-1.75 1.75zm13.25 12.5h-3v-5.5c0-1.38-.02-3.16-1.93-3.16-1.93 0-2.23 1.51-2.23 3.06v5.6h-3v-11h2.88v1.5h.04c.4-.75 1.38-1.54 2.84-1.54 3.04 0 3.6 2 3.6 4.58v6.46z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </li>
        </ul>
      </div>  
    </div>
  </div>
</section>
<!-- Introduce Consultant -->

<section class="">
  <div>
    <h2 class="text-2xl text-dark font-bold text-center sm:text-4xl mt-5 p-5">Advosafe List of Services</h2>
    <p class="max-w-3xl mx-auto text-xl text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
    <div class="w-24 h-1 mx-auto mt-5" style="background-color: #d0bc99;"></div>
  </div>
  <div class="container mx-auto px-4 py-8 ">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-5">

      <!-- Service Block 1 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-110 " style="background-image: url('https://media.istockphoto.com/id/1462139281/photo/two-professional-heavy-industry-engineers-wearing-hard-hats-at-factory-walking-and-discussing.jpg?s=612x612&w=0&k=20&c=FnrNr4HGDxxknumX1o5LYsgaLpH4GjmaNipQ0g7OzRY=');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">In House Training</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 1</p>
        </div>
      </a>
      <!-- Service Block 2 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-110" style="background-image: url('https://t3.ftcdn.net/jpg/04/40/29/94/360_F_440299419_s4b12RfNDJvpplheVDmKdhFGJiHlAYNs.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">Monitoring</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 2</p>
        </div>
      </a>
      <!-- Service Block 3 -->
      <a href="#" class="relative group block bg-cover bg-center aspect-square rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-110" style="background-image: url('https://www.shutterstock.com/image-photo/technology-research-facility-female-project-600nw-1682713504.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300 ease-in-out"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
          <h3 class="text-white text-2xl font-bold mb-2 transform group-hover:-translate-y-2 transition duration-300 ease-in-out">Service 3</h3>
          <p class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">Short description of Service 3</p>
        </div>
      </a>
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