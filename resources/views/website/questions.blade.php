
@extends('website.layout.master')
@push('css')
    <style>
        .list {
            list-style: none;
            padding: 0;
        }

        .list li {
            padding: 10px;
            border-bottom: 1px solid #cccccc56;
            border-top: 1px solid #cccccc56;
        }

        .list li:nth-child(even) {
            background-color: #f9f9f9;
        }

        .list li:hover {
            background-color: #f9f9f9;
        }

        .date {
            width: 20%;
        }

        .questions {
            width: 80%;
        }
    </style>
@endpush
@section('content')
    <section class="px-2 md:px-32">
        <div id="users" class="border-b pb-20 border-gray/25">

            <div class="flex justify-between mt-20 ">
                <div class="text-xl md:text-2xl font-semibold text-black/80">My Questions</div>
                <div>
                    <!-- <input class="search" placeholder="Search" /> -->
                    <div class="relative flex items-center justify-center">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="search bg-gray/5 block w-full px-1 md:px-5 rounded-2xl py-1.5 md:py-2.5 ps-8 md:ps-10 text-sm text-gray-900 border border-gray/20 outline-none bg-gray-50 focus:ring-none"
                            placeholder="Search Questions" required />
                    </div>

                </div>
            </div>

            <div class="flex justify-around w-full py-6 mt-3 font-semibold">
                <span class=" w-1/4">Date</span>
                <p class="w-3/4">Question</p>
            </div>
            <ul class="list">
                <li class="flex justify-around w-full">
                    <span class="date w-1/4">22-10-2024</span>
                    <p class="questions w-3/4 hover:text-primary"><a href="./details.html">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Eveniet, optio?</a></p>
                </li>
                <li class="flex justify-around w-full">
                    <span class="date w-1/4">22-10-2024</span>
                    <p class="questions w-3/4 hover:text-primary"><a href="./details.html">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Eveniet, optio?</a></p>
                </li>
                <li class="flex justify-around w-full">
                    <span class="date w-1/4">22-10-2024</span>
                    <p class="questions w-3/4 hover:text-primary"><a href="./details.html">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Eveniet, optio?</a></p>
                </li>
                <li class="flex justify-around w-full">
                    <span class="date w-1/4">22-10-2024</span>
                    <p class="questions w-3/4 hover:text-primary"><a href="./details.html">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Eveniet, optio?</a></p>
                </li>
            </ul>

        </div>
    </section>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
        <script>
            var options = {
                valueNames: ['date', 'questions']
            };

            var userList = new List('users', options);
        </script>
    @endpush
@endsection
