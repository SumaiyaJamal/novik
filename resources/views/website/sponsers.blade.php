
@extends('website.layout.master')
@section('content')
<section class="bg-background">
    <div class="h-[50vh] md:h-[30vh] flex justify-center items-center header-container"
        style="background-image: url('{{ asset('assets/website/background/bg.jpeg') }}');">
        <h2 class="text-3xl md:text-5xl font-semibold text-wrap text-center px-3 w-full md:w-3/5">
            Hello, potential sponsors and allies!
        </h2>
    </div>
</section>
    <div class="px-8 md:px-32">

        <!-- hero section -->
        
        {{-- <div>
            <h1 class="text-4xl md:text-6xl font-semibold py-16">Hello, potential sponsors and allies!</h1>
        </div> --}}

        {{-- <div class="grid grid-cols-6 gap-y-5">
            <div class="col-span-6 md:col-span-6">
                <p class="text-2xl hover:cursor-pointer">We're thrilled to have you here because it means something about Novik has already caught your
                    attention.
                    And let me tell you: the excitement is mutual! We're always on the lookout for connections that feel
                    more
                    like partnerships, something that just clicks, like it was meant to happen (yeah, we get a little
                    romantic about it, what can we say?).
                    </p>
                    <p class="text-2xl hover:cursor-pointer py-3">
                    We know sponsoring a project is a big decision, and here at Novik, we believe the best decisions
                    are made with a smile.
                    Our mission is to ensure that everyone, from dentists to students, feels supported and guided, and
                    we believe that together
                    we can take this experience to the next level.
                    We don't hide our cards. It's all about transparency here and growing together, step by step.
                    </p> <p class="text-2xl hover:cursor-pointer py-3">If
                    you're up for joining us
                    on this journey, we promise a ride full of innovation, great conversations, and of course, a few
                    lighthearted jokes along
                    the way (because let's face it, work is way better when we're having fun).
                    So go ahead, if you think Novik could be a great place for your support, we're just a message away.
                    </p><p class="text-2xl hover:cursor-pointer py-3">Here you'll find our contact
                    details and anything else you might need to know. Let's do amazing things together, and we'd love
                    to have you along for the ride</p>
                <!-- <p class="py-5 text-2xl text-gray ">April 5, 2024</p>

                <a href="#" class="text-2xl underline">Read More</a> -->
            </div>
            <!-- <div class="col-span-6 md:col-span-1">
                <img src="./public/CB_Insights.avif" alt="">
            </div> -->
        </div> --}}
        <div class="flex justify-center mt-10">
            <div class="container px-8 w-full md:w-3/5">
                <!-- query question-1 -->
                <div class="mt-5 py-4 border-gray/20">
                    <h3 class="text-lg md:text-2xl font-semibold mb-5">
                        We're thrilled you made it this far, because it only means one
                        thing: you want to get in touch with us!
                    </h3>
                    <div class="flex flex-col gap-y-2 relative">
                        <!-- <p class=" text-xl text-black">
                                    Information overload is an extreme challenge in medicine.
                                </p> -->
                        <p class="text- text-black">
                            We're thrilled to have you here because it means something about Novik has already caught your
                    attention.
                    And let me tell you: the excitement is mutual! We're always on the lookout for connections that feel
                    more
                    like partnerships, something that just clicks, like it was meant to happen (yeah, we get a little
                    romantic about it, what can we say?).
                        </p>
                        <p class="text-black">
                            We know sponsoring a project is a big decision, and here at Novik, we believe the best decisions
                    are made with a smile.
                    Our mission is to ensure that everyone, from dentists to students, feels supported and guided, and
                    we believe that together
                    we can take this experience to the next level.
                    We don't hide our cards. It's all about transparency here and growing together, step by step.
                        </p>
                        <p class="text-black">
                            If
                    you're up for joining us
                    on this journey, we promise a ride full of innovation, great conversations, and of course, a few
                    lighthearted jokes along
                    the way (because let's face it, work is way better when we're having fun).
                    So go ahead, if you think Novik could be a great place for your support, we're just a message away.

                        </p>
                        <p class="text-black">
                            Here you'll find our contact
                    details and anything else you might need to know. Let's do amazing things together, and we'd love
                    to have you along for the ride
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- posts section -->
        <section>
            <div class="grid grid-cols-3 gap-8 gap-y-10 my-20">
                <div class="col-span-3 md:col-span-1">
                    <div class=" p-5 rounded-lg shadow-lg bg-background">
                        <div class="my-5 border-b border-gray/20 py-1 rounded-md h-36">
                            <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" height="250" alt="sponser logo">
                        </div>
                        <h3 class="text-2xl font-semibold">Lorem Ipsum</h3>
                        <!-- <p class="py-5 text-gray">April 5, 2024</p> -->
                        <!-- <a href="#" class="text-xl underline">Read More</a> -->
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <div class=" p-5 rounded-lg shadow-lg bg-background">
                        <div class="my-5 border-b border-gray/20 py-5 rounded-md h-36">
                            <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" height="250" alt="sponser logo">
                        </div>
                        <h3 class="text-2xl font-semibold">Lorem Ipsum</h3>
                        <!-- <p class="py-5 text-gray">April 5, 2024</p>
                        <a href="#" class="text-xl underline">Read More</a> -->
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <div class=" p-5 rounded-lg shadow-lg bg-background">
                        <div class="my-5 border-b border-gray/20 rounded-md h-36">
                            <img src="{{ asset('assets/website/sponsers/logo1.avif') }}" height="250" alt="sponser logo">
                        </div>
                        <h3 class="text-2xl font-semibold">Lorem Ipsum</h3>
                        <!-- <p class="py-5 text-gray">April 5, 2024</p>
                        <a href="#" class="text-xl underline">Read More</a> -->
                    </div>
                </div>
                <!-- <div class="col-span-3 md:col-span-1">
                    <div class=" p-5 rounded-lg shadow-lg bg-background">
                        <div class="my-5 border-b border-gray/20 py-1 rounded-md h-36">
                            <img src="./public/contacts/s7.webp" height="250" alt="sponser logo">
                        </div>
                        <h3 class="text-2xl font-semibold">OpenEvidence Powers Elsevier's ClinicalKey AI</h3>
                        <p class="py-5 text-gray">April 5, 2024</p>
                        <a href="#" class="text-xl underline">Read More</a>
                    </div>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <div class=" p-5 rounded-lg shadow-lg bg-background">
                        <div class="my-5 border-b overflow-hidden border-gray/20 py-5 rounded-md h-36">
                            <img src="./public/contacts/s8.webp" height="250" alt="sponser logo">
                        </div>
                        <h3 class="text-2xl font-semibold">OpenEvidence Powers Elsevier's ClinicalKey AI</h3>
                        <p class="py-5 text-gray">April 5, 2024</p>
                        <a href="#" class="text-xl underline">Read More</a>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- contact icons -->
        <div class="py-5 flex flex-col items-center">
            <h3 class="text-3xl font-bold text-primary border-b pb-3"> To Contact Our Sponsers</h3>
            <div class=" flex gap-8 py-5">
                <span class="group cursor-pointer bg-red-200 p-3 rounded-lg hover:bg-primary">
                    <a href="tel:+34690957910" target="_blank" rel="noopener noreferrer">
                        <svg fill="#000000" class="fill-red-500 group-hover:fill-white transition-all duration-150"
                            height="28px" width="28px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 473.806 473.806"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4
			c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8
			c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6
			c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5
			c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26
			c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9
			c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806
			C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20
			c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6
			c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1
			c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3
			c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5
			c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8
			c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9
			l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1
			C420.456,377.706,420.456,388.206,410.256,398.806z" />
                                    <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2
			c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11
			S248.656,111.506,256.056,112.706z" />
                                    <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11
			c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2
			c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </span>
                <span class="bg-red-200 cursor-pointer p-3 rounded-lg hover:bg-primary group">
                    <a href="mailto:sponsors@novik.ai" target="_blank" rel="noopener noreferrer">
                        <svg fill="#000000" class="fill-red-500 group-hover:fill-white transition-all duration-150"
                            height="28px" width="28px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.3 483.3" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
        v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
        c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" />
                                    <path
                                        d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
        c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
        c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
        c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </span>
                <span class="bg-red-200 cursor-pointer p-3 rounded-lg hover:bg-primary group">
                    <a href="mailto:sponsors@novik.ai" target="_blank" rel="noopener noreferrer">
                        <svg fill="#000000" class="fill-red-500 group-hover:fill-white transition-all duration-150"
                            height="28px" width="28px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.3 483.3" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
        v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
        c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" />
                                    <path
                                        d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
        c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
        c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
        c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" />
                                </g>
                            </g>
                        </svg>
                    </a>
                </span>
            </div>
        </div>

    </div>
@endsection


