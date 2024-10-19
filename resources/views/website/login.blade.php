<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Gruppo', sans-serif;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-sm flex flex-col justify-center">
        <div class=" flex justify-center py-5">
            <img src="{{ asset('assets/website/background/logo.svg') }}" class="h-12 object-contain" alt="">
        </div>
        <h2 class="text-sm mb-6 text-center">Please log in or register to continue.</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2  focus:ring-gray focus:outline-none">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2  focus:ring-gray focus:outline-none">
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            @error('crediancials')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
            <button type="submit"
                class="w-full !bg-primary/90 text-white py-2 rounded-md hover:bg-primary focus:outline-none focus:ring-0 focus:ring-opacity-50">
                Login</button>
        </form>

        <p class="mt-4 text-center">
            Don't have an account? <a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Sign up</a>
        </p>

        <div class="flex items-center my-4">
            <hr class="flex-grow border-gray-300">
            <span class="mx-2 text-gray-500">Or</span>
            <hr class="flex-grow border-gray-300">
        </div>

        <button
            class="flex justify-around w-full text-gray py-2 rounded-md border border-gray focus:outline-none focus:ring-1 focus:ring-black  focus:ring-opacity-50">

            <svg width="24px" height="24px" viewBox="-3 0 262 262" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid">
                <path
                    d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                    fill="#4285F4" />
                <path
                    d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                    fill="#34A853" />
                <path
                    d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                    fill="#FBBC05" />
                <path
                    d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                    fill="#EB4335" />
            </svg>
            Continue with Google
        </button>
        <button
            class="flex justify-around w-full mt-3 text-gray py-2 rounded-md border border-gray focus:outline-none focus:ring-1 focus:ring-black  focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M22.675 0H1.325C.592 0 0 .592 0 1.325v21.351C0 23.408.592 24 1.325 24H12.82V14.706h-3.29V11h3.29V8.413c0-3.247 1.913-5.031 4.715-5.031 1.335 0 2.486.099 2.823.143v3.27h-1.94c-1.524 0-1.818.726-1.818 1.788V11h3.636l-.47 3.706h-3.166V24h6.198c.733 0 1.325-.592 1.325-1.325V1.325C24 .592 23.408 0 22.675 0z"
                    fill="#3b5998" />
            </svg>
            Continue with Facebook
        </button>
        <button
            class="flex justify-around w-full mt-3 text-gray py-2 rounded-md border border-gray focus:outline-none focus:ring-1 focus:ring-black  focus:ring-opacity-50">
            <svg height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 291.346 291.346" xml:space="preserve">
                <g>
                    <path style="fill:#26A6D1;" d="M117.547,266.156L0,249.141v-94.296h117.547V266.156z" />
                    <path style="fill:#3DB39E;" d="M291.346,136.51H136.31l0.055-114.06L291.346,0.009V136.51z" />
                    <path style="fill:#F4B459;" d="M291.346,291.337l-155.091-22.459l0.182-114.015h154.909V291.337z" />
                    <path style="fill:#E2574C;" d="M117.547,136.51H0V42.205l117.547-17.024V136.51z" />
                </g>
            </svg>
            Continue with Microsoft
        </button>
    </div>
</body>

</html>
