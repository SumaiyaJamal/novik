<nav class="bg-gray-800 p-2.5 px-4 md:px-16 shadow sticky top-0 z-[99999] bg-white">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Left Side: Logo -->
        <div class="text-white text-lg font-bold">
            <a href="./index.html"><img src="{{ asset('assets/website/background/logo.svg') }}" class="h-10"
                    alt="logo" /></a>
        </div>
        <!-- Right Side: Links and Buttons -->
        <div id="desktopNav" class="md:flex space-x-4 items-center text-black text-sm">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" aria-label="Ask">Home</a></li>
                <!-- <li><a href="./feed.html" aria-label="Feed">Feed</a></li> -->
                <li><a href="{{ route('contact') }}" aria-label="About">Contact</a></li>
                <li>
                    <a href="{{ route('sponsers') }}" aria-label="Announcements">Sponsers</a>
                </li>
                @guest
                <li>
                    <a href="{{ route('signup') }}" aria-label="Announcements">Register</a>
                </li>
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

        <!-- Hamburger Icon -->
        <button id="navbar-toggle" class="md:hidden text-black focus:outline-none">
            <svg id="navbar-icon" class="w-6 h-5 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="navbar" class="hidden md:hidden h-100 flex flex-col space-y-2 mt-2">
        @guest
        <div class="flex gap-x-2 md:ms-5 w-full my-4">
            <a href="{{ route('login') }}" class="w-1/2 text-center hover:bg-slate-100 border bg-slate-50 px-4 py-1.5 rounded ">Login</a>
            <a href="{{ route('signup') }}"
                class="w-1/2 text-center hover:bg-hover bg-primary text-white px-4 py-1.5 rounded">Sign Up</a>
        </div>
        @endguest

        <a href="{{ route('home') }}">Home</a>
        <!-- <a href="feed.html">Feed</a> -->
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('sponsers') }}">Sponsers</a>
    </div>
</nav>
