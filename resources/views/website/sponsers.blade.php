
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
        <div class="max-w-3xl mx-auto mt-10 p-8 rounded-lg">
            <h2 class="text-2xl mt-3 font-bold mb-6">Contact Us</h2>
            <form action="{{ route('sponser_post') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full p-2 border border-primary rounded-md focus:outline-none focus:ring focus:ring-primary" />
                            @error('name')
                            <span style="color: red" class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full p-2 border border-primary rounded-md focus:outline-none focus:ring focus:ring-primary" />
                            @error('email')
                            <span style="color: red" class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <input type="text" id="type" name="type"
                            class="mt-1 block w-full p-2 border border-primary rounded-md focus:outline-none focus:ring focus:ring-primary" />
                            @error('type')
                            <span style="color: red" class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="tel" id="phone" name="phone"
                            class="mt-1 block w-full p-2 border border-primary rounded-md focus:outline-none focus:ring focus:ring-primary" />
                            @error('phone')
                            <span style="color: red" class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="mt-1 block w-full p-2 border border-primary rounded-md focus:outline-none focus:ring focus:ring-primary"></textarea>
                        @error('message')
                        <span style="color: red" class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    </div>
                <button type="submit"
                    class="w-full bg-primary text-white font-semibold py-2 px-4 rounded-md hover:bg-primary/75 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection


