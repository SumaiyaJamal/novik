<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Signup Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 ">
    <div class="bg-white my-10 p-8 rounded-xl shadow-xl w-full max-w-xl flex flex-col justify-center">
        <div class=" flex justify-center py-5">
            <img src="{{ asset('assets/website/background/logo.svg') }}" height="40" width="200" alt="">
        </div>
        <h2 class="text-black/80 mb-6 text-center">Complete your registration </h2>

        <form id="signupForm" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2  focus:ring-gray focus:outline-none"  value="{{ old('name') }}">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your name" value="{{ old('email') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2  focus:ring-gray focus:outline-none">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none">
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Re-enter
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Enter your password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none">
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country of origin</label>
                    <input type="text" id="country" name="country" placeholder="Enter your country"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none" value="{{ old('country') }}">
                    @error('country')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="dob" name="dob"  max="{{ date('Y-m-d') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none" value="{{ old('dob') }}">
                    @error('dob')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="occupation" class="block mb-2 text-sm font-medium text-black/80">Occupation</label>
                <select id="occupation" name="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Select a profession</option>
                    <option value="General Dentist" {{ old('occupation') == 'General Dentist' ? 'selected' : '' }}>General Dentist</option>
                    <option value="Orthodontist" {{ old('occupation') == 'Orthodontist' ? 'selected' : '' }}>Orthodontist</option>
                    <option value="Periodontist" {{ old('occupation') == 'Periodontist' ? 'selected' : '' }}>Periodontist</option>
                    <option value="Endodontist" {{ old('occupation') == 'Endodontist' ? 'selected' : '' }}>Endodontist</option>
                    <option value="Oral and Maxillofacial Surgeon" {{ old('occupation') == 'Oral and Maxillofacial Surgeon' ? 'selected' : '' }}>Oral and Maxillofacial Surgeon</option>
                    <option value="Paediatric Dentist" {{ old('occupation') == 'Paediatric Dentist' ? 'selected' : '' }}>Paediatric Dentist</option>
                    <option value="Prosthodontist" {{ old('occupation') == 'Prosthodontist' ? 'selected' : '' }}>Prosthodontist</option>
                    <option value="Cosmetic Dentist" {{ old('occupation') == 'Cosmetic Dentist' ? 'selected' : '' }}>Cosmetic Dentist</option>
                    <option value="Legal and Forensic Dentist" {{ old('occupation') == 'Legal and Forensic Dentist' ? 'selected' : '' }}>Legal and Forensic Dentist</option>
                    <option value="Geriatric Dentist" {{ old('occupation') == 'Geriatric Dentist' ? 'selected' : '' }}>Geriatric Dentist</option>
                    <option value="Sports Dentist" {{ old('occupation') == 'Sports Dentist' ? 'selected' : '' }}>Sports Dentist</option>
                    <option value="Dental Student" {{ old('occupation') == 'Dental Student' ? 'selected' : '' }}>Dental Student</option>
                    <option value="Hygienist" {{ old('occupation') == 'Hygienist' ? 'selected' : '' }}>Hygienist</option>
                    <option value="Laboratory Technician" {{ old('occupation') == 'Laboratory Technician' ? 'selected' : '' }}>Laboratory Technician</option>
                    <option value="Other" {{ old('occupation') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('occupation')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center mt-5 py-5 policy">
                <input id="link-checkbox" type="checkbox" value="" name="policy"
                    class="w-4 h-4  text-primary border-gray-300 rounded focus:ring-primary focus:ring-0">
                <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I have
                    read and agree to the <a href="{{ route('privacy') }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Privacy Policy</a>,
                        <a href="{{ route('terms') }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Terms</a> and <a href="{{ route('advertising') }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Advertising Policy</a></label>
            </div>
            @error('policy')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <button type="submit"
                class="w-full !bg-primary/90 text-white py-2 rounded-md hover:bg-primary focus:outline-none focus:ring-0 focus:ring-opacity-50">
                Submit</button>
        </form>

        {{-- <p class="mt-4 text-start text-sm text-gray mt-7 px-3">
            Are you a patient or caregiver? <a href="./login.html" class="text-blue-600 hover:underline"> Click
                here.</a>
        </p> --}}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('message') && session('type'))
        <script>
            $(document).ready(function() {
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
    <script>
        $(document).ready(function() {
            $("#signupForm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password"
                    },
                    country: {
                        required: true,
                        minlength: 2
                    },
                    dob: {
                        required: true,
                        date: true
                    },
                    occupation: {
                        required: true
                    },
                    policy: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name.",
                        minlength: "Your name must be at least 2 characters long."
                    },
                    email: {
                        required: "Please enter your email address.",
                        email: "Please enter a valid email address."
                    },
                    password: {
                        required: "Please provide a password.",
                        minlength: "Your password must be at least 6 characters long."
                    },
                    password_confirmation: {
                        required: "Please confirm your password.",
                        equalTo: "Passwords do not match."
                    },
                    country: {
                        required: "Please enter your country.",
                        minlength: "Your country must be at least 2 characters long."
                    },
                    dob: {
                        required: "Please enter your date of birth.",
                        date: "Please enter a valid date."
                    },
                    occupation: {
                        required: "Please select your occupation."
                    },
                    policy: {
                        required: "You must agree to the terms and conditions."
                    }
                },
                errorPlacement: function(error, element) {
                    // Customize where the error messages will be displayed
                    error.addClass('text-red-500'); // Add class for styling

                    // Custom placement for the policy checkbox
                    if (element.attr("name") === "policy") {
                        error.insertAfter(".policy"); // Place after the policy class div
                    } else {
                        error.insertAfter(element); // Default placement for other fields
                    }
                },
                submitHandler: function(form) {
                    form.submit(); // Submit the form if valid
                }
            });
        });
    </script>

</body>

</html>
