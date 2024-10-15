<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenEvidence-details</title>
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="relatives">
    <!-- navbar  -->
    @include('website.layout.navbar')
    <section class=" flex justify-center my-5 mb-40 px-2">
        <div class="container w-full md:w-3/5 rounded-2xl bg min-h-screen ">
            <form class="relative z-50 px-1 md:px-10 rounded-lg flex w-full md:w-full py-5" method="POST"
                aria-label="Query Submission Form">
                <div class="bg-white z-50 w-full flex py-1 border border-gray/40 rounded-3xl shadow px-2">
                    <input type="file" name="file" id="file-input" hidden>
                    <textarea
                        class="bg-transparent flex-grow p-2 py-5 px-3 font-sans border-none outline-none resize-none"
                        name="query" id="query" rows="1" placeholder="Type your query here..."
                        oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;"
                        aria-label="Input query">{{ $question->text ?? '' }}</textarea>
                    <button
                        class="group hover:bg-gray/30 self-center h-10 w-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                        type="submit" aria-label="Submit question" title="Edit this">
                        <svg width="18px" height="18px" class="fill-none hover:fill-gray" viewBox="0 0 24 24"
                            id="_24x24_On_Light_Edit" data-name="24x24/On Light/Edit"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect id="view-box" width="24" height="24" fill="none" />
                            <path id="Shape"
                                d="M.75,17.5A.751.751,0,0,1,0,16.75V12.569a.755.755,0,0,1,.22-.53L11.461.8a2.72,2.72,0,0,1,3.848,0L16.7,2.191a2.72,2.72,0,0,1,0,3.848L5.462,17.28a.747.747,0,0,1-.531.22ZM1.5,12.879V16h3.12l7.91-7.91L9.41,4.97ZM13.591,7.03l2.051-2.051a1.223,1.223,0,0,0,0-1.727L14.249,1.858a1.222,1.222,0,0,0-1.727,0L10.47,3.91Z"
                                transform="translate(3.25 3.25)" fill="#141124" />
                        </svg>
                    </button>
                </div>
            </form>
            <h3></h3>
            <!-- details -->
            <div class="px-4">
                <p class="text-lg mb-5 text-primary font-semibold">{{ $question->text ?? '' }}
                </p>
                {{-- <span title="time answers" class="text-gray">Answered on April 19, 2024</span> --}}
                <div class="mt-4 flex flex-col gap-y-3">
                    <p>{{ $question->response ?? '' }}</p>
                    {{-- <p>However, pooled analysis from cardiovascular outcome trials has shown no increased risk of acute
                        pancreatitis or pancreatic cancer associated with GLP-1 RA treatment.[5] A pharmacovigilance
                        study using the FDA Adverse Event Reporting System suggested an association between GLP-1 RAs
                        and pancreatic carcinoma, but this requires further investigation.[6] In contrast, a
                        Scandinavian cohort study found that use of GLP-1 RAs was associated with a reduced risk of
                        serious renal events compared with dipeptidyl peptidase 4 (DPP-4) inhibitors.[7]</p>
                    <p>The American College of Cardiology (ACC) has outlined that GLP-1 RAs may increase the risk of
                        gallbladder disease and can lead to elevations in heart rate. They also note that short-acting
                        GLP-1 RAs may delay gastric emptying, which could impact the absorption of concomitantly
                        administered oral medications.[8] The ACC also mentions that while post-marketing case reports
                        have suggested possible associations between GLP-1 RAs and acute pancreatitis, the LEADER trial
                        did not demonstrate an increase in the risk of pancreatitis.[8]</p>
                    <p>In summary, while GLP-1 RAs have been associated with a variety of adverse events, particularly
                        gastrointestinal and potential risks to the pancreas and gallbladder, large-scale studies and
                        trials have provided mixed results regarding the severity and incidence of these risks.
                        Monitoring and patient selection are important when considering GLP-1 RA therapy.</p> --}}
                </div>
                {{-- <div class="mt-4 flex gap-x-8">
                    <span class="flex gap-x-1 hover:bg-amber-50 cursor-pointer"  id="shareBtn">
                        <svg class="w-6 h-6 rotate-180 fill-gray" focusable="false" aria-hidden="true"
                            viewBox="0 0 24 24" data-testid="ReplyIcon">
                            <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path>
                        </svg>
                        <p> Share</p>
                    </span>
                    <span class="flex gap-x-1 hover:bg-amber-50 cursor-pointer">
                        <svg class="w-6 h-6 rotate-180 fill-gray" focusable="false" aria-hidden="true"
                            viewBox="0 0 24 24" data-testid="ThumbUpAltIcon">
                            <path
                                d="M2 20h2c.55 0 1-.45 1-1v-9c0-.55-.45-1-1-1H2v11zm19.83-7.12c.11-.25.17-.52.17-.8V11c0-1.1-.9-2-2-2h-5.5l.92-4.65c.05-.22.02-.46-.08-.66-.23-.45-.52-.86-.88-1.22L14 2 7.59 8.41C7.21 8.79 7 9.3 7 9.83v7.84C7 18.95 8.05 20 9.34 20h8.11c.7 0 1.36-.37 1.72-.97l2.66-6.15z">
                            </path>
                        </svg>
                        <p>Helpful</p>
                    </span>
                    <span class="flex gap-x-1 hover:bg-amber-50 cursor-pointer">
                        <svg class="w-6 h-6 rotate-180 fill-gray" focusable="false" aria-hidden="true"
                            viewBox="0 0 24 24" data-testid="ThumbDownAltIcon">
                            <path
                                d="M22 4h-2c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h2V4zM2.17 11.12c-.11.25-.17.52-.17.8V13c0 1.1.9 2 2 2h5.5l-.92 4.65c-.05.22-.02.46.08.66.23.45.52.86.88 1.22L10 22l6.41-6.41c.38-.38.59-.89.59-1.42V6.34C17 5.05 15.95 4 14.66 4h-8.1c-.71 0-1.36.37-1.72.97l-2.67 6.15z">
                            </path>
                        </svg>
                        <p> Not Helpful</p>
                    </span>
                </div> --}}
                <!-- horiziotal line -->
                <hr class="text-gray/40 mt-3">

                <!-- accordion -->
                <div class="accordion mt-10">
                    <div class="accordion-header" onclick="handleAccording(this)">
                        <span class="flex gap-x-4 items-center text-xl font-semibold">
                            <svg class="h-6" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                                <path
                                    d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z">
                                </path>
                            </svg>
                            <p>References</p>
                        </span>
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5H7z" />
                        </svg>
                    </div>
                    <div class="accordion-content" style="display: none;">
                        <ul class="">

                            <!-- items start here -->
                            <li class="list-decimal" type="number" class="px-5">
                                <div class="accordion-header" onclick="handleAccording(this)">
                                    <span class="flex flex-col items-start">
                                        <h5 class="font-semibold text-primary">Victoza. Label via DailyMed.</h5>
                                        <p class="text-gray">Food and Drug Administration (DailyMed)</p>
                                        <p class="text-gray">Updated date: 2023-02-06</p>
                                    </span>
                                    <button class="border py-0.5 px-1.5 flex text-black border-gray/40 rounded-lg">
                                        <p>Details</p>
                                        <svg class="icon" viewBox="0 0 24 24">
                                            <path d="M7 10l5 5 5-5H7z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="accordion-content" style="display: none;">
                                    <p>
                                        If a hypersensitivity reaction occurs, discontinue Victoza (liraglutide); treat
                                        promptly per standard of care, and monitor until signs and symptoms resolve. Do
                                        not use in patients with a previous hypersensitivity reaction to Victoza
                                        (liraglutide) [see Contraindications ( 4 )]. Anaphylaxis and angioedema have
                                        been reported with other GLP-1 receptor agonists. Use caution in a patient with
                                        a history of anaphylaxis or angioedema with another GLP-receptor agonist because
                                        it is unknown whether such patients will be predisposed to these reactions with
                                        Victoza (liraglutide). 5.7 Acute Gallbladder Disease Acute events of gallbladder
                                        disease such as cholelithiasis or cholecystitis have been reported in GLP-1
                                        receptor agonist trials and postmarketing. In the LEADER trial [see Clinical
                                        Studies ( 14.3 )], 3.1% of Victoza (liraglutide)-treated patients versus 1.9% of
                                        placebo-treated patients reported an acute event of gallbladder disease, such as
                                        cholelithiasis or cholecystitis [see Adverse Reactions ( 6.1 )]. If
                                        cholelithiasis is suspected, gallbladder studies and appropriate clinical
                                        follow-up are indicated.
                                    </p>
                                </div>
                            </li>
                            <li class="list-decimal" type="number" class="px-5">
                                <div class="accordion-header" onclick="handleAccording(this)">
                                    <span class="flex flex-col">
                                        <h5 class="font-semibold text-primary">Victoza. Label via DailyMed.</h5>
                                        <p class="text-gray">Food and Drug Administration (DailyMed)</p>
                                        <p class="text-gray">Updated date: 2023-02-06</p>
                                    </span>
                                    <button class=" border py-0.5 px-1.5 flex text-black border-gray/55 rounded-lg">
                                        <p>Details</p>
                                        <svg class="icon" viewBox="0 0 24 24">
                                            <path d="M7 10l5 5 5-5H7z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="accordion-content" style="display: none;">
                                    <p>
                                        If a hypersensitivity reaction occurs, discontinue Victoza (liraglutide); treat
                                        promptly per standard of care, and monitor until signs and symptoms resolve. Do
                                        not use in patients with a previous hypersensitivity reaction to Victoza
                                        (liraglutide) [see Contraindications ( 4 )]. Anaphylaxis and angioedema have
                                        been reported with other GLP-1 receptor agonists. Use caution in a patient with
                                        a history of anaphylaxis or angioedema with another GLP-receptor agonist because
                                        it is unknown whether such patients will be predisposed to these reactions with
                                        Victoza (liraglutide). 5.7 Acute Gallbladder Disease Acute events of gallbladder
                                        disease such as cholelithiasis or cholecystitis have been reported in GLP-1
                                        receptor agonist trials and postmarketing. In the LEADER trial [see Clinical
                                        Studies ( 14.3 )], 3.1% of Victoza (liraglutide)-treated patients versus 1.9% of
                                        placebo-treated patients reported an acute event of gallbladder disease, such as
                                        cholelithiasis or cholecystitis [see Adverse Reactions ( 6.1 )]. If
                                        cholelithiasis is suspected, gallbladder studies and appropriate clinical
                                        follow-up are indicated.
                                    </p>
                                </div>
                            </li>
                            <li class="list-decimal" type="number" class="px-5">
                                <div class="accordion-header" onclick="handleAccording(this)">
                                    <span class="flex flex-col">
                                        <h5 class="font-semibold text-primary">Victoza. Label via DailyMed.</h5>
                                        <p class="text-gray">Food and Drug Administration (DailyMed)</p>
                                        <p class="text-gray">Updated date: 2023-02-06</p>
                                    </span>
                                    <button class=" border py-0.5 px-1.5 flex text-black border-gray/55 rounded-lg">
                                        <p>Details</p>
                                        <svg class="icon" viewBox="0 0 24 24">
                                            <path d="M7 10l5 5 5-5H7z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="accordion-content" style="display: none;">
                                    <p>
                                        If a hypersensitivity reaction occurs, discontinue Victoza (liraglutide); treat
                                        promptly per standard of care, and monitor until signs and symptoms resolve. Do
                                        not use in patients with a previous hypersensitivity reaction to Victoza
                                        (liraglutide) [see Contraindications ( 4 )]. Anaphylaxis and angioedema have
                                        been reported with other GLP-1 receptor agonists. Use caution in a patient with
                                        a history of anaphylaxis or angioedema with another GLP-receptor agonist because
                                        it is unknown whether such patients will be predisposed to these reactions with
                                        Victoza (liraglutide). 5.7 Acute Gallbladder Disease Acute events of gallbladder
                                        disease such as cholelithiasis or cholecystitis have been reported in GLP-1
                                        receptor agonist trials and postmarketing. In the LEADER trial [see Clinical
                                        Studies ( 14.3 )], 3.1% of Victoza (liraglutide)-treated patients versus 1.9% of
                                        placebo-treated patients reported an acute event of gallbladder disease, such as
                                        cholelithiasis or cholecystitis [see Adverse Reactions ( 6.1 )]. If
                                        cholelithiasis is suspected, gallbladder studies and appropriate clinical
                                        follow-up are indicated.
                                    </p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>


                <!-- .suggested qustions -->

                <div class=" p-5  bg-[#F8F8F8] border border-gray/10 shadow-sm mt-10 rounded-lg">
                    <span class="flex gap-x-4 items-center text-xl font-semibold mb-8">
                        <svg class="h-6" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path
                                d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z">
                            </path>
                        </svg>
                        <p>References</p>
                    </span>
                    <a href="#" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>What are the common side effects associated with GLP-1 receptor agonists?</p>
                        <span>
                            <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>What are the common side effects associated with GLP-1 receptor agonists?</p>
                        <span>
                            <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>What are the common side effects associated with GLP-1 receptor agonists?</p>
                        <span>
                            <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                            </svg>
                        </span>
                    </a>
                </div>




            </div>

        </div>
    </section>

    <section class=" fixed left-0 bottom-0 flex items-end h-52 w-full ">
        <div class="px-1 shadow w-full md:px-10 flex justify-center border-t border-gray/30 backdrop-blur-2xl z-50">
            <form enctype="multipart/form-data" action="{{ route('query') }}" method="POST" class="relative z-50 flex w-full md:w-3/5 py-2" aria-label="Query Submission Form">
                @csrf
                <div class="bg-white z-50 w-full flex py-1 border border-gray/40 rounded-3xl shadow px-2">
                    @guest
                    <input type="hidden" value="login_first" name="login">
                    @endguest
                    <input type="file" name="file" id="file-input" hidden>
                    <textarea
                        class="bg-transparent flex-grow p-2 py-3 px-3 font-sans border-none outline-none resize-none"
                        name="query" id="query" rows="1" placeholder="Type your query here..."
                        oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;"
                        aria-label="Input query"></textarea>
                    <button
                        class="group hover:bg-gray/30 bg-primary self-center h-10 w-10 text-white p-2 rounded-full flex items-center justify-center hover:bg-opacity-90"
                        type="submit" aria-label="Submit question" title="Edit this">
                        <svg class="h-8 fill-white" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                            data-testid="NorthIcon">
                            <path d="m5 9 1.41 1.41L11 5.83V22h2V5.83l4.59 4.59L19 9l-7-7-7 7z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Share Dialog -->
    <div id="shareDialog" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg relative">
            <h2 class="text-xl font-bold mb-4">Share This Article</h2>
            <p class="mb-4">Choose a platform:</p>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.example.com" target="_blank"
                    rel="noopener noreferrer"
                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Facebook</a>
                <a href="https://twitter.com/intent/tweet?url=https://www.example.com" target="_blank"
                    rel="noopener noreferrer"
                    class="bg-blue-400 text-white py-2 px-4 rounded-md hover:bg-blue-500">Twitter</a>
                <a href="mailto:?subject=Check this out!&body=I found this article interesting: https://www.example.com"
                    class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700">Email</a>
            </div>
            <button id="closeDialog" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">&times;</button>
        </div>
    </div>


    <script>
        const handleAccording = (clickedHeader) => {
            const allHeaders = document.querySelectorAll('.accordion-header');

            const content = clickedHeader.nextElementSibling; // Gets the content for the clicked header
            const icon = clickedHeader.querySelector('.icon'); // Selects the icon within the clicked header
            const isActive = clickedHeader.classList.toggle('active');

            // Toggle the display of the clicked content
            content.style.display = isActive ? 'block' : 'none';

            // Rotate the icon based on the state
            icon.style.transform = isActive ? 'rotate(0deg)' : 'rotate(-180deg)';
        }

        const shareBtn = document.getElementById('shareBtn');
        const shareDialog = document.getElementById('shareDialog');
        const closeDialog = document.getElementById('closeDialog');

        shareBtn.addEventListener('click', () => {
            shareDialog.classList.remove('hidden');
        });

        closeDialog.addEventListener('click', () => {
            shareDialog.classList.add('hidden');
        });

        // Optional: Close the dialog when clicking outside of it
        shareDialog.addEventListener('click', (event) => {
            if (event.target === shareDialog) {
                shareDialog.classList.add('hidden');
            }
        });
    </script>



    <script src="{{ asset('assets/website/js/script.js') }}"></script>
</body>

</html>
