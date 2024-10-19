<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenEvidence-details</title>
    <link rel="stylesheet" href="{{ asset('assets/website/css/global.css') }}" <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }

        .loader {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100px;
            /* Adjust as needed */
        }

        .spinner {
            border: 8px solid rgba(0, 0, 0, 0.1);
            /* Light background color */
            border-left-color: #e4643d;  
            /* Spinner color */
            border-radius: 50%;
            width: 40px;
            /* Size of the spinner */
            height: 40px;
            /* Size of the spinner */
            animation: spin 1s linear infinite;
            /* Spin animation */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    <textarea style="font-family: 'Gruppo';" class="bg-transparent flex-grow p-2 py-5 px-3 font-sans border-none outline-none resize-none" name="query"
                        id="query" rows="1" placeholder="Type your query here..."
                        oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;" aria-label="Input query">{{ $question->text ?? '' }}</textarea>
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
                {{-- <p id="question-text" class="text-lg mb-5 text-primary font-semibold">{{ $question->text ?? '' }}</p> --}}
                {{-- <span title="time answers" class="text-gray">Answered on April 19, 2024</span> --}}
                <div id="loader" style="display: none;" class="loader">
                    <div class="spinner"></div>
                    <p>Loading...</p>
                </div>
                <div class="mt-4 flex flex-col gap-y-3">
                    <p id="response-text">{{ $question->response ?? '' }}</p>
                </div>
                <!-- Horizontal line -->
                <hr class="text-gray/40 mt-3">

                <!-- Accordion -->
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
                    <div class="accordion-content" style="display: block;">
                        <ul id="articles-list" class=""> <!-- Placeholder for articles list -->
                            <!-- Dynamic content will be injected here -->
                        </ul>
                    </div>
                </div>

                <!-- Suggested questions -->
                <div class=" p-5  bg-[#F8F8F8] border border-gray/10 shadow-sm mt-10 rounded-lg">
                    <span class="flex gap-x-4 items-center text-xl font-semibold mb-8">
                        <svg class="h-6" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path
                                d="M2 17h2v.5H3v1h1v.5H2v1h3v-4H2v1zm1-9h1V4H2v1h1v3zm-1 3h1.8L2 13.1v.9h3v-1H3.2L5 10.9V10H2v1zm5-6v2h14V5H7zm0 14h14v-2H7v2zm0-6h14v-2H7v2z">
                            </path>
                        </svg>
                        <p>Suggested Queries</p>
                    </span>
                    <a href="{{ route('suggested_query', ['query' => 'Is there a connection between testosterone and the risk for myocardial infarction, stroke, cardiovascular death, and all-cause mortality?']) }}" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>Is there a connection between testosterone and the risk for myocardial infarction, stroke, cardiovascular death, and all-cause mortality?</p>
                        <span>
                            <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                            </svg>
                        </span>
                    </a>                    
                    <a href="{{ route('suggested_query', ['query' => 'What is the impact of GLP-1 RAs on skin?']) }}" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>What is the impact of GLP-1 RAs on skin?</p>
                        <span>
                            <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true"
                                viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                            </svg>
                        </span>
                    </a>
                    
                    <a href="{{ route('suggested_query', ['query' => 'What is the treatment of choice for necrotizing fasciitis in pediatrics?']) }}" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                        <p>What is the treatment of choice for necrotizing fasciitis in pediatrics?</p>
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
            <form enctype="multipart/form-data" action="{{ route('query') }}" method="POST"
                class="relative z-50 flex w-full md:w-3/5 py-2" aria-label="Query Submission Form">
                @csrf
                <div class="bg-white z-50 w-full flex py-1 border border-gray/40 rounded-3xl shadow px-2">
                    @guest
                        <input type="hidden" value="login_first" name="login">
                    @endguest
                    <input type="file" name="file" id="file-input" hidden>
                    <textarea style="font-family: 'Gruppo';" class="bg-transparent flex-grow p-2 py-3 px-3 font-sans border-none outline-none resize-none" name="query"
                        id="query" rows="1" placeholder="Type your query here..."
                        oninput="this.style.height = 'auto'; this.style.height = `${this.scrollHeight}px`;" aria-label="Input query"></textarea>
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
        $(document).ready(function() {
            // Ensure the accordion content is open by default
            const $defaultAccordionHeader = $('.accordion-header').first(); // Get the first accordion header
            const $defaultContent = $defaultAccordionHeader.next(
            '.accordion-content'); // Get its associated content
            const $defaultIcon = $defaultAccordionHeader.find('.icon'); // Find the icon within the clicked header

            // Set default display style to block for main accordion
            $defaultContent.show(); // Show the content

            // Set default icon rotation for main accordion
            $defaultIcon.css('transform', 'rotate(0deg)'); // Rotate icon to default position
            // Get the question ID from the query parameters
            const questionId = '{{ $question->id }}';
            // Trigger an AJAX request on page load
            $.ajax({
                url: '{{ route('queryProcessing') }}', // The route to submit your query
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    query: '{{ $question->text }}',
                    question_id: questionId
                },
                beforeSend: function() {
                    // Show loader before the AJAX call
                    $('#loader').show();
                    $('#content').hide();
                },
                success: function(response) {
                    // Hide loader
                    $('#loader').hide();
                    $('#content').show();

                    // Update question and response text
                    $('#question-text').text(response.question_text);
                    $('#response-text').text(response.response_text);

                    // Clear previous articles
                    $('#articles-list').empty();

                    // Populate articles
                    response.articles.forEach(article => {
                        $('#articles-list').append(`
                            <li class="list-decimal" type="number" class="px-5">
                                <div class="accordion-header" onclick="handleAccording(this)">
                                    <span class="flex flex-col items-start">
                                     <a target="_blank" href="https://pubmed.ncbi.nlm.nih.gov/${article.id}" class="font-semibold text-primary">${article.title ?? ''}</a>
                                        <p class="text-gray"><span class="text-black">Author: </span>${article.authorString}</p>
                                        <p class="text-gray"><span class="text-black">Journal: </span>${article.journalTitle}</p>
                                        <p class="text-gray"><span class="text-black">Publication Date: </span> ${article.firstPublicationDate}</p>
                                    </span>
                                    <button class="border py-0.5 px-1.5 flex text-black border-gray/40 rounded-lg">
                                        <p>Details</p>
                                    </button>
                                </div>
                                <div class="accordion-content" style="display: none;">
                                    <p>${article.abstract}</p>
                                </div>
                            </li>
                        `);
                    });

                    // Clear previous suggested questions
                    $('#suggested-questions').empty();

                    // Populate suggested questions
                    response.suggested_questions.forEach(question => {
                        $('#suggested-questions').append(`
                            <a href="#" class="flex justify-between gap-5 hover:text-gray border-b border-gray/20 py-3">
                                <p>${question.text}</p>
                                <span>
                                    <svg class="fill-primary h-6 hover:fill-primary/80" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                    </svg>
                                </span>
                            </a>
                        `);
                    });
                },
                error: function() {
                    $('#loader').hide();
                    $('#content').show();
                    $('#response-text').text('Error fetching data.');
                }
            });
        });
    </script>

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
