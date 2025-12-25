<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenEvidence</title>
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
</head>

<body class="relative">

    <!-- Hero Section -->
    <section class="h-screen header-container"
        style="background-image: url('{{ asset('assets/website/background/bg.jpeg') }}');">
        <header class="bg-gray-800 z-50">
            <nav class="px-8 py-3 w-full navbar-home mx-auto flex justify-between items-center bg-transparent">
                <!-- Logo Container -->
                <div>
                    <div id="logo-container" class="hidden text-white text-lg font-bold">
                        <a href="{{ url('/') }}" id="main-logo">
                            <img src="{{ asset('assets/website/background/logo.svg') }}" class="h-7"
                                alt="Your Company Logo">
                        </a>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="text-black text-sm md:flex space-x-4 items-center" id="desktopNav">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" aria-label="Ask">Home</a></li>
                        <!-- <li><a href="./feed.html" aria-label="Feed">Feed</a></li> -->
                        <li><a href="{{ route('contact') }}" aria-label="contact.html">Contact</a></li>
                        <li><a href="{{ route('sponsers') }}" aria-label="Announcements">Partners</a></li>
                        @guest
                        <li><a href="{{ route('signup') }}" aria-label="Announcements">Register</a></li>
                        @endguest
                    </ul>
                    @guest
                    <div class="flex gap-x-2 ml-5">
                        <a href="{{ route('login') }}" class="hover:bg-hover bg-primary text-white px-4 py-2 rounded"
                            aria-label="Sign Up">Login</a>
                    </div>
                    @endguest
                    @auth
                        @include('website.layout.profile')
                    @endauth
                </div>

                <!-- user poper -->
                <!-- Hamburger Menu -->
                <button id="navbar-toggle" class="md:hidden p-2 text-black focus:outline-none"
                    aria-label="Toggle mobile menu">
                    <svg class="w-6 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </nav>
            <!-- Mobile Menu -->
            <div id="navbar"
                class="hidden px-4 z-[99999999] mt-6 bg-white/50 backdrop-blur- shadow md:hidden flex flex-col space-y-2 py-5">
                <div class="flex gap-x-2 mx-5 my-4">
                    <a href="./login.html"
                        class="w-1/2 text-center hover:bg-slate-100 border bg-slate-50 px-4 py-1.5 rounded"
                        aria-label="Login">Login</a>
                    <a href="./signup.html"
                        class="w-1/2 text-center hover:bg-hover bg-primary text-white px-4 py-1.5 rounded"
                        aria-label="Sign Up">Sign Up</a>
                </div>
                <a href="./index.html" aria-label="Ask">Home</a>
                <!-- <a href="./feed.html" aria-label="Feed">Feed</a> -->
                <a href="./contact.html" aria-label="contact.html">Contact</a>
                <a href="./sponsers.html" aria-label="Announcements">Sponsers</a>
            </div>
        </header>
        <main class="py-8 flex flex-col justify-evenly ">
            <!-- Center Content -->
            <div class="flex flex-col gap-y-4 justify-center items-center px-4 ">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/website/background/logo.svg') }}" alt="Your Company Logo"
                        class="w-3/4 object-contain m-auto h-16 md:h-16">
                    <p class="text-gray-700 text-lg px-8 text-center">Your smart AI Dental assistant for safe clinical
                        decisions</p>
                </div>

                <form enctype="multipart/form-data" action="{{ route('query') }}" method="POST" class="relative z-50 px-1 md:px-10 rounded-lg flex w-full md:w-3/6" aria-label="Query Submission Form">
                    @csrf
                    <div class="bg-white z-50 w-full flex py-1 border-2 border-primary rounded-xl px-2">
                        <input type="file" name="file" id="file-input" hidden>
                        <button id="file-button"
                            class="h-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                            aria-label="Upload file" onclick="document.getElementById('file-input').click();">
                            <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5535 2.49392C12.4114 2.33852 12.2106 2.25 12 2.25C11.7894 2.25 11.5886 2.33852 11.4465 2.49392L7.44648 6.86892C7.16698 7.17462 7.18822 7.64902 7.49392 7.92852C7.79963 8.20802 8.27402 8.18678 8.55352 7.88108L11.25 4.9318V16C11.25 16.4142 11.5858 16.75 12 16.75C12.4142 16.75 12.75 16.4142 12.75 16V4.9318L15.4465 7.88108C15.726 8.18678 16.2004 8.20802 16.5061 7.92852C16.8118 7.64902 16.833 7.17462 16.5535 6.86892L12.5535 2.49392Z"
                                    fill="#1C274C" />
                                <path
                                    d="M3.75 15C3.75 14.5858 3.41422 14.25 3 14.25C2.58579 14.25 2.25 14.5858 2.25 15V15.0549C2.24998 16.4225 2.24996 17.5248 2.36652 18.3918C2.48754 19.2919 2.74643 20.0497 3.34835 20.6516C3.95027 21.2536 4.70814 21.5125 5.60825 21.6335C6.47522 21.75 7.57754 21.75 8.94513 21.75H15.0549C16.4225 21.75 17.5248 21.75 18.3918 21.6335C19.2919 21.5125 20.0497 21.2536 20.6517 20.6516C21.2536 20.0497 21.5125 19.2919 21.6335 18.3918C21.75 17.5248 21.75 16.4225 21.75 15.0549V15C21.75 14.5858 21.4142 14.25 21 14.25C20.5858 14.25 20.25 14.5858 20.25 15C20.25 16.4354 20.2484 17.4365 20.1469 18.1919C20.0482 18.9257 19.8678 19.3142 19.591 19.591C19.3142 19.8678 18.9257 20.0482 18.1919 20.1469C17.4365 20.2484 16.4354 20.25 15 20.25H9C7.56459 20.25 6.56347 20.2484 5.80812 20.1469C5.07435 20.0482 4.68577 19.8678 4.40901 19.591C4.13225 19.3142 3.9518 18.9257 3.85315 18.1919C3.75159 17.4365 3.75 16.4354 3.75 15Z"
                                    fill="#1C274C" />
                            </svg>
                        </button>
                        <textarea id="main_search_area" class="bg-transparent flex-grow p-2 px-3 border-none outline-none resize-none"
                            name="query" rows="1" placeholder="Type your query here..."
                            oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;" aria-label="Input query"></textarea>
                            @if (session('name'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                        {{-- <button id="startRecording"
                            class="bg-black h-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                            type="submit" aria-label="Submit question">
                            <svg fill="#000000" class="fill-white" height="24px" width="24px"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <g>
                                    <path
                                        d="m439.5,236c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,70-64,126.9-142.7,126.9-78.7,0-142.7-56.9-142.7-126.9 0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,86.2 71.5,157.4 163.1,166.7v57.5h-23.6c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.1,20.4 20.4,20.4h88c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-23.6v-57.5c91.6-9.3 163.1-80.5 163.1-166.7z" />
                                    <path
                                        d="m256,323.5c51,0 92.3-41.3 92.3-92.3v-127.9c0-51-41.3-92.3-92.3-92.3s-92.3,41.3-92.3,92.3v127.9c0,51 41.3,92.3 92.3,92.3zm-52.3-220.2c0-28.8 23.5-52.3 52.3-52.3s52.3,23.5 52.3,52.3v127.9c0,28.8-23.5,52.3-52.3,52.3s-52.3-23.5-52.3-52.3v-127.9z" />
                                </g>
                            </svg>
                        </button> --}}

                        {{-- <button id="stopRecording"
                            class="bg-black h-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                            type="button" aria-label="Submit question">
                            <svg fill="#e4643d" class="fill-orange" height="24px" width="24px"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <g>
                                    <path
                                        d="m439.5,236c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,70-64,126.9-142.7,126.9-78.7,0-142.7-56.9-142.7-126.9 0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,86.2 71.5,157.4 163.1,166.7v57.5h-23.6c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.1,20.4 20.4,20.4h88c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-23.6v-57.5c91.6-9.3 163.1-80.5 163.1-166.7z" />
                                    <path
                                        d="m256,323.5c51,0 92.3-41.3 92.3-92.3v-127.9c0-51-41.3-92.3-92.3-92.3s-92.3,41.3-92.3,92.3v127.9c0,51 41.3,92.3 92.3,92.3zm-52.3-220.2c0-28.8 23.5-52.3 52.3-52.3s52.3,23.5 52.3,52.3v127.9c0,28.8-23.5,52.3-52.3,52.3s-52.3-23.5-52.3-52.3v-127.9z" />
                                </g>
                            </svg>
                        </button> --}}
                        <button class="group hover:bg-gray/30 self-center h-10 bg-black w-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                            type="submit" aria-label="Submit question">
                            <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 492.004 492.004" xml:space="preserve" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path
                                                d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136 c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002 v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864 c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872 l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </form>
                {{-- <audio id="audioPlayback" controls></audio> --}}
            </div>
            <!-- Powered By Section -->
            <div class="text-center">
                <h3 class="text-xl text-gray-700 mt-20">Powered By</h3>
                <div class="h-20 flex justify-center gap-x-5">
                    <!-- <img class="h-5 md:h-6" src="./public/sponsers/logo-5.png" alt="Sponsor 2">
                    <img class="h-5 md:h-6" src="./public/sponsers/logo2.avif" alt="Sponsor 1">
                    <img class="h-5 md:h-6" src="./public/sponsers/logo4.avif" alt="Sponsor 3"> -->
                    <img class="h-5 md:h-10 mt-2 rounded-md"
                        src="{{ asset('assets/website/sponsers/all-logos.png') }}" alt="Sponsor 3">


                </div>
            </div>

            <!-- Sponsors Section -->
            <div>
                <h3 class="text-center text-3xl py-4 text-gray-700 mb-5">Our Sponsors</h3>
                <div class="flex justify-center gap-x-10">
                    @foreach($banners as $banner)
                        @if($banner->image)
                            <img src="{{ asset('website/' . $banner->image) }}" class="img-fluid h-8 md:h-10" alt="Sponsor Logo {{ $banner->id }}">
                        @endif
                    @endforeach
                    {{-- <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" class="h-8 md:h-10"
                        alt="Sponsor Logo 1">
                    <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" class="h-8 md:h-10"
                        alt="Sponsor Logo 1"> --}}
                </div>
            </div>
        </main>
    </section>



    <!--Reponser Section -->
    <!-- <section class="px-6 md:px-10 py-10">
        <div class="m-auto grid grid-cols-2 md:grid-cols-2 gap-6 gap-y-10 p-6">
            <div class="flex justify-center items-center">
                <img src="./public/sponsers/logo1.avif" alt="Sponsor Logo 1"
                    class="grayscale hover:grayscale-0 transition-all duration-150 h-10 hover:cursor-pointer object-contain">
            </div>
            <div class="flex justify-center items-center">
                <img src="./public/sponsers/logo2.avif" alt="Sponsor Logo 2"
                    class="grayscale h-10 object-contain hover:grayscale-0 transition-all duration-150 hover:cursor-pointer ">
            </div>
            <div class="flex justify-center items-center">
                <img src="./public/sponsers/logo3.avif" alt="Sponsor Logo 3"
                    class="grayscale-0 h-10 object-contain hover:grayscale-0 transition-all duration-150 hover:cursor-pointer ">
            </div>
            <div class="flex justify-center items-center">
                <img src="./public/sponsers/logo4.avif" alt="Sponsor Logo 4"
                    class="grayscale h-8 md:h-14 object-contain hover:grayscale-0 transition-all duration-150 hover:cursor-pointer ">
            </div>
        </div>
    </section> -->


    {{-- <section class="flex justify-center mt-20">
        <div class="container px-8 w-full md:w-3/5 ">
            <!-- query question-1 -->
            <div class="mt-5 border-b py-4 border-gray/20">
                <a href="{{ route('query') }}">
                    <h3 class="text-lg mb-5 text-primary font-semibold ">What are health risks associated with GLP-1
                        receptor agonists like Ozempic and
                        Mounjaro?</h3>
                </a>
                <div class="flex gap-x-4 relative">
                    <p class="text-base text-gray">
                        Glucagon-like peptide-1 receptor agonists (GLP-1 RAs) such as semaglutide (Ozempic) and
                        tirzepatide
                        (Mounjaro) are associated with several health risks. The most common adverse events are
                        gastrointestinal (GI) in nature, including nausea, vomiting, diarrhea, and abdominal pain. There
                        is
                        also a risk of pancreatitis and biliary disease. Hypersensi...

                    </p>
                    <a class="absolute text-primary -bottom-0.5 font-semibold text-black/70 text-md right-3 bg-background ps-6 shadow-yellow-50 shadow-2xl"
                        href="{{ route('query') }}">Read More</a>

                </div>
            </div>
            <!-- query question-1 -->
            <div class="mt-5 border-b py-4 border-gray/20">
                <a href="{{ route('query') }}">
                    <h3 class="text-lg mb-5 text-primary font-semibold ">What are health risks associated with GLP-1
                        receptor agonists like Ozempic and
                        Mounjaro?</h3>
                </a>
                <div class="flex gap-x-4 relative">
                    <p class="text-base text-gray">
                        Glucagon-like peptide-1 receptor agonists (GLP-1 RAs) such as semaglutide (Ozempic) and
                        tirzepatide
                        (Mounjaro) are associated with several health risks. The most common adverse events are
                        gastrointestinal (GI) in nature, including nausea, vomiting, diarrhea, and abdominal pain. There
                        is
                        also a risk of pancreatitis and biliary disease. Hypersensi...

                    </p>
                    <a class="absolute text-primary -bottom-0.5 font-semibold text-black/70 text-md right-3 bg-background ps-6 shadow-yellow-50 shadow-2xl"
                        href="{{ route('query') }}">Read More</a>

                </div>
            </div>
            <!-- query question-1 -->
            <div class="mt-5 border-b py-4 border-gray/20">
                <a href="{{ route('query') }}">
                    <h3 class="text-lg mb-5 text-primary font-semibold ">What are health risks associated with GLP-1
                        receptor agonists like Ozempic and
                        Mounjaro?</h3>
                </a>
                <div class="flex gap-x-4 relative">
                    <p class="text-base text-gray">
                        Glucagon-like peptide-1 receptor agonists (GLP-1 RAs) such as semaglutide (Ozempic) and
                        tirzepatide
                        (Mounjaro) are associated with several health risks. The most common adverse events are
                        gastrointestinal (GI) in nature, including nausea, vomiting, diarrhea, and abdominal pain. There
                        is
                        also a risk of pancreatitis and biliary disease. Hypersensi...
                    </p>
                    <a class="absolute text-primary -bottom-0.5 font-semibold text-black/70 text-md right-3 bg-background ps-6 shadow-yellow-50 shadow-2xl"
                        href="{{ route('query') }}">Read More</a>
                </div>
            </div>
            <div class="flex justify-end mt-6 mb-10">
                <a href="#" class="bg-primary text-white px-3 py-1.5 rounded">See More</a>
            </div>
        </div>
    </section> --}}
    <!-- scroll to top button -->
    <button id="scrollToTopBtn" class="scrollToTopBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#808080"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15" />
        </svg>
    </button>
    <!-- footer -->
    <footer style="margin-top:0px" class="px-8 md:px-28 bg-black/5 mt-20 py-8">
        <div class="grid grid-cols-12 content-center md:space-x-10 gap-y-8">
            <div class="col-span-12 md:col-span-3">
                <img src="{{ asset('assets/website/background/logo.svg') }}" class="h-10" alt="logo" />
            </div>
            <div class="col-span-12 md:col-span-5 flex justify-between">
                <div class="flex flex-col gap-y-1">
                    {{-- <h5 class="font-semibold">Product</h5>
                    <a href="#" class="text-sm text-gray">Ask OpenEvidence</a>
                    <a href="#" class="text-sm text-gray">Feed</a> --}}
                </div>
                <div class="flex flex-col gap-y-1">
                    {{-- <h5 class="font-semibold">Company</h5>
                    <a href="#" class="text-sm text-gray">About</a>
                    <a href="#" class="text-sm text-gray">Announcements</a> --}}
                </div>
                <div class="col-span-12 md:col-span-4">
                    <div>
                        <h5>Don′t miss our weekly email alert.</h5>
                        <p class="text-sm text-gray">
                            Stay up to date on all the new findings that matter.
                        </p>
                    </div>
                    <div class="flex gap-x-2 my-2">
                        <input type="text" id="first_name"
                            class="w-3/4 bg-gray-10 border border-gray-100 text-gray-900 ring-0 text-sm bg-transparent focus:outline-none rounded-lg focus:ring-0 block p-2.5"
                            placeholder="Email" required />

                        <button type="submit"
                            class="w-3/12 text-gray border bg-transparent hover:bg-slate-50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 mt-5 space-x-2md:space-x-10">
                <div class="col-span-12 md:col-span-3">
                    <p class="text-gray text-sm">
                        © 2021 OpenEvidence. All rights reserved.
                    </p>
                    <p class="text-gray text-xs py-3 text-right flex">
                        <a href="{{ route('terms') }}">Terms of Service </a> | &nbsp;
                        <a href="{{ route('privacy') }}">Privacy Policy </a> | &nbsp;
                        <a href="{{ route('advertising') }}">Advertising</a>
                    </p>
                </div>
                <div class="col-span-12 md:col-span-9">
                    <p class="text-sm text-gray">
                        OpenEvidence is an experimental technology demonstrator.
                        OpenEvidence does not provide medical advice, diagnosis or
                        treatment. User questions and other inputs on OpenEvidence are not
                        covered by HIPAA. It is the responsibility of the user to ensure
                        questions do not contain protected health information (PHI) or any
                        information that violates the privacy of any person.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 mt-5 space-x-2md:space-x-10">
            <div class="col-span-12 md:col-span-3">
                <p class="text-gray text-sm">
                    © 2024 OpenEvidence. All rights reserved.
                </p>
                <p class="text-gray text-xs py-3 text-right flex">
                    <a href="{{ route('terms') }}">Terms of Service </a> | &nbsp;
                    <a href="{{ route('privacy') }}">Privacy Policy </a> | &nbsp;
                    <a href="{{ route('advertising') }}">Advertising</a>
                </p>
            </div>
            <div class="col-span-12 md:col-span-9">
                <p class="text-sm text-gray">
                    OpenEvidence is an experimental technology demonstrator.
                    OpenEvidence does not provide medical advice, diagnosis or
                    treatment. User questions and other inputs on OpenEvidence are not
                    covered by HIPAA. It is the responsibility of the user to ensure
                    questions do not contain protected health information (PHI) or any
                    information that violates the privacy of any person.
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/website/js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('message') && session('type'))
    <script>
        $(document).ready(function() {
            $('#main_search_area').on('keydown', function(event) {
                // Check if the pressed key is Enter (key code 13)
                if (event.key === 'Enter') {
                    event.preventDefault(); // Prevent the default action (like a newline)
                    $('#queryForm').submit(); // Submit the form
                }
            });
        });
    </script>
    @endif
</body>

</html>
