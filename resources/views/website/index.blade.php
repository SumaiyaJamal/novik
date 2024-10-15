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
    <section class="h-screen header-container" style="background-image: url('{{ asset('assets/website/background/bg.jpeg') }}');">
        <header class="bg-gray-800 z-50">
            <nav class="px-8 py-3 w-full navbar-home mx-auto flex justify-between items-center bg-transparent">
                <!-- Logo Container -->
                <div>
                    <div id="logo-container" class="hidden text-white text-lg font-bold">
                        <a href="./index.html" id="main-logo">
                            <img src="{{ asset('assets/website/background/logo.svg') }}" class="h-7" alt="Your Company Logo">
                        </a>
                    </div>
                </div>

                <!-- Desktop Menu -->

                <div class="text-black text-sm md:flex space-x-4 items-center" id="desktopNav">
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" aria-label="Ask">Home</a></li>
                        <!-- <li><a href="./feed.html" aria-label="Feed">Feed</a></li> -->
                        <li><a href="{{ route('contact') }}" aria-label="contact.html">Contact</a></li>
                        <li><a href="{{ route('sponsers') }}" aria-label="Announcements">Sponsers</a></li>
                        <li><a href="{{ route('signup') }}" aria-label="Announcements">Register</a></li>
                    </ul>
                    <div class="flex gap-x-2 ml-5">
                        <a href="{{ route('login') }}" class="hover:bg-hover bg-primary text-white px-4 py-2 rounded"
                            aria-label="Sign Up">Login</a>
                    </div>
                    <div class="relative" id="user-poper">
                        <div class="h-8 cursor-pointer w-8 rounded-full overflow-hidden">
                            <img class="h-full object-cover" src="{{ asset('assets/website/contacts/s7.webp') }}" alt="">
                        </div>
                        <div id="poper-tab" class="hidden absolute top-10 rounded-lg shadow right-5 bg-white z-50 w-min  h-max px-8 py-4">
                            <div class="border-b py-2 border-gray/25">
                                <h4>Ali Hamza</h4>
                                <p>alihamzah.dev@gmail.com</p>
                            </div>
                            <ul class="mt-5 flex flex-col gap-3 font-semibold text-gray">
                                <li class="flex gap-1 cursor-pointer hover:brightness-105">
                                    <svg class="h-5 fill-gray hover:fill-primary" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="HistoryIcon"><path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"></path></svg>
                                    <span>My Questions</span>
                                </li>
                                <li class="flex gap-1 cursor-pointer">
                                     <svg class="h-5 fill-gray" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ReplyIcon"><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path></svg>
                                    <span class=" text-nowrap">Share OpenEvidence</span>
                                </li>
                                <li class="flex gap-1 cursor-pointer">
                                    <svg class="h-5 fill-gray" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="SettingsIcon"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"></path></svg>
                                    <span>Settings</span>
                                </li>
                                <li class="flex gap-1 cursor-pointer">
                                    <svg class="h-5 fill-gray" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutIcon"><path d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"></path></svg>
                                    <span>Logout</span>
                                </li>
                            </ul>
                        </div>
                    </div>
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

                <form class="relative z-50 px-1 md:px-10 rounded-lg flex w-full md:w-3/6"
                    aria-label="Query Submission Form">
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
                        <textarea class="bg-transparent flex-grow p-2 px-3 border-none outline-none resize-none"
                            name="query" id="query" rows="1" placeholder="Type your query here..."
                            oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;"
                            aria-label="Input query"></textarea>
                        <button
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
                        </button>
                    </div>
                </form>
            </div>

            <!-- Powered By Section -->
            <div class="text-center">
                <h3 class="text-xl text-gray-700 mt-20">Powered By</h3>
                <div class="h-20 flex justify-center gap-x-5">
                    <!-- <img class="h-5 md:h-6" src="./public/sponsers/logo-5.png" alt="Sponsor 2">
                    <img class="h-5 md:h-6" src="./public/sponsers/logo2.avif" alt="Sponsor 1">
                    <img class="h-5 md:h-6" src="./public/sponsers/logo4.avif" alt="Sponsor 3"> -->
                    <img class="h-5 md:h-10 mt-2 rounded-md" src="{{ asset('assets/website/sponsers/all-logos.png') }}" alt="Sponsor 3">


                </div>
            </div>

            <!-- Sponsors Section -->
            <div>
                <h3 class="text-center text-3xl py-4 text-gray-700 mb-5">Our Sponsors</h3>
                <div class="flex justify-center gap-x-10">
                    <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" class="h-8 md:h-10" alt="Sponsor Logo 1">
                    <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" class="h-8 md:h-10" alt="Sponsor Logo 1">
                    <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" class="h-8 md:h-10" alt="Sponsor Logo 1">
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


    <section class="flex justify-center mt-20">
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
    </section>



    <!-- scroll to top button -->
    <button id="scrollToTopBtn" class="scrollToTopBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#808080"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15" />
        </svg>
    </button>

    <script src="{{ asset('assets/website/js/script.js') }}"></script>
</body>

</html>
