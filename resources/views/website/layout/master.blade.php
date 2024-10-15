<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OpenEvidence-Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet" />
    @stack('css')
</head>

<body>
    <!-- Navbar start from here -->
    @include('website.layout.navbar')
    @yield('content')
    <!-- footer -->
    <footer class="px-8 md:px-28 bg-black/5 mt-20 py-8">
        <div class="grid grid-cols-12 content-center md:space-x-10 gap-y-8">
            <div class="col-span-12 md:col-span-3">
                <img src="{{ asset('assets/website/background/logo.svg') }}" class="h-10" alt="logo" />
            </div>
            <div class="col-span-12 md:col-span-5 flex justify-between">
                <div class="flex flex-col gap-y-1">
                    <h5 class="font-semibold">Product</h5>
                    <a href="#" class="text-sm text-gray">Ask OpenEvidence</a>
                    <a href="#" class="text-sm text-gray">Feed</a>
                </div>
                <div class="flex flex-col gap-y-1">
                    <h5 class="font-semibold">Company</h5>
                    <a href="#" class="text-sm text-gray">About</a>
                    <a href="#" class="text-sm text-gray">Announcements</a>
                </div>
                <div class="flex flex-col gap-y-1">
                    <h5 class="font-semibold">Contact Us</h5>
                    <a href="mailto:sponsors@novik.ai" class="text-sm text-gray">Email</a>
                    <a href="tel:+34690957910" class="text-sm text-gray">Phone</a>
                    <a href="https://wa.me/34690957910" class="text-sm text-gray">Whatsapp</a>
                </div>
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
                    <a href="{{ route('cookies') }}">Cookies</a>
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

    <!-- scroll to top button -->
    <button id="scrollToTopBtn" class="scrollToTopBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#808080"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15" />
        </svg>
    </button>
    @stack('js')
    <script src="{{ asset('assets/website/js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('message') && session('type'))
    <script>
        $(document).ready(function () {
            const message = "{{ session('message') }}";
            const type = "{{ session('type') }}";

            Swal.fire({
                title: type.charAt(0).toUpperCase() + type.slice(1), // Capitalize the first letter
                text: message,
                icon: type,
                confirmButtonText: 'Okay'
            });
        });
    </script>
    @endif
</body>

</html>
