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

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name"  placeholder="Enter your name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2  focus:ring-gray focus:outline-none">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" name="email"  placeholder="Enter your name"
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
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Re-enter Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter your password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none">
                    @error('password_confirmation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country of origin</label>
                    <input type="text" id="country" name="country"  placeholder="Enter your country"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none">
                        @error('country')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                <div class="w-1/2">
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" id="dob" name="dob"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-gray focus:outline-none">
                        @error('dob')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
            </div>

            <div class=" mb-4">
                <label for="occupation" class="block mb-2 text-sm font-medium text-black/80">Occupation</label>
                <select id="occupation" name = "occupation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="">Select a profession</option>
                    <option value="General Dentist">General Dentist</option>
                    <option value="Orthodontist">Orthodontist</option>
                    <option value="Periodontist">Periodontist</option>
                    <option value="Endodontist">Endodontist</option>
                    <option value="Oral and Maxillofacial Surgeon">Oral and Maxillofacial Surgeon</option>
                    <option value="Paediatric Dentist">Paediatric Dentist</option>
                    <option value="Prosthodontist">Prosthodontist</option>
                    <option value="Cosmetic Dentist">Cosmetic Dentist</option>
                    <option value="Legal and Forensic Dentist">Legal and Forensic Dentist</option>
                    <option value="Geriatric Dentist">Geriatric Dentist</option>
                    <option value="Sports Dentist">Sports Dentist</option>
                    <option value="Dental Student">Dental Student</option>
                    <option value="Hygienist">Hygienist</option>
                    <option value="Laboratory Technician">Laboratory Technician</option>
                    <option value="Other">Other</option>
                </select>
                @error('occupation')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
            </div>

            <!-- <div class="mb-3 bg-slate-100 px-4 py-5 rounded-md mt-10 shadow-sm">
                <h5 class="text-lg font-semibold text-black/80">Verify your health care professional credentials</h5>
                <p class="text-sm py-2">
                    Unlimited question-asking on OpenEvidence is free for verified health care professionals (HCPs). To
                    verify you are an HCP, please enter your number (or international equivalent) below.
                </p>

                <div class="flex gap-x-4 mt-5">
                    <div class="flex-1">
                        <label for="occupation" class="block mb-2 text-sm font-medium text-black/80">Identifier</label>
                        <select id="occupation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5">
                            <option value="npi" selected>NPI (United States)</option>
                            <option value="gmcNumber">GMC Number (United Kingdom)</option>
                            <option value="minc">MINC (Canada)</option>
                            <option value="ahpra">AHPRA (Australia)</option>
                            <option value="crmNumber">CRM Number (Brazil)</option>
                            <option value="mohLicenseNumber">MOH License Number (Israel)</option>
                            <option value="fileUpload">Other (Upload Documents)</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="number" class="block mb-2 text-sm font-medium text-black/80">Number</label>
                        <input type="text" id="number" name="number"  placeholder="Enter your number"
                            class=" focus:ring-primary focus:border-primary block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none">
                    </div>
                </div>
            </div> -->

            <!-- <div class="my-5 mt-5">
                <label for="occupation" class="block mb-2 text-sm font-medium text-black/80">
                    How did you hear about us?
                </label>
                <select id="occupation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5">
                    <option value="Google / Search Engine">Google / Search Engine</option>
                    <option value="From a Physician Friend / Colleague">From a Physician Friend / Colleague</option>
                    <option value="From a Non-Physician Friend / Colleague">From a Non-Physician Friend / Colleague
                    </option>
                    <option value="Conference">Conference</option>
                    <option value="Email">Email</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Reddit">Reddit</option>
                    <option value="App Store / Play Store">App Store / Play Store</option>
                    <option value="Other">Other</option>
                </select>
            </div> -->

            <div class="flex items-center mt-5 py-5">
                <input id="link-checkbox" type="checkbox" value="" name="policy"
                    class="w-4 h-4  text-primary border-gray-300 rounded focus:ring-primary focus:ring-0">
                <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I have
                    read and agree to the <a href="./terms.html"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Terms of Service and Privacy
                        Policy. *</a>.</label>
                    </div>
                    @error('policy')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            <button type="submit"
                class="w-full !bg-primary/90 text-white py-2 rounded-md hover:bg-primary focus:outline-none focus:ring-0 focus:ring-opacity-50">
                Submit</button>
        </form>

        <p class="mt-4 text-start text-sm text-gray mt-7 px-3">
            Are you a patient or caregiver? <a href="./login.html" class="text-blue-600 hover:underline"> Click
                here.</a>
        </p>
    </div>
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
