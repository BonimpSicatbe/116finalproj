<div class="h-full overflow-y-auto bg-[#030712] text-white p-20">
    <!-- Main Header -->
    <header class="mb-10">
        <h1 class="text-4xl font-extrabold"><span class="text-red-500 mr-2">#</span>Welcome to the Broadway Shows API Docs</h1>
    </header>

    <!-- Documentation Sections -->
    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Overview</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Getting Started</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>

        </div>
    </div>


    <hr class="mt-16 border-gray-700" />

    <!-- MOVIES API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Movies API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch movies.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:</p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/movies">http://127.0.0.1:8000/api/v1/movies</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all movies in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a movie in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular movie in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20"></p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt </span>  less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed mb-2 ml-5 mr-20">Return a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">title</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">description</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">release_date</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">duration</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">language</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">country</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">rating</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">posterURL</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">trailerURL</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
        <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
            </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <pre class="p-4 rounded mt-4 overflow-x-auto">
            <code class="language-javascript">
                fetch('http://127.0.0.1:8000/api/v1/movies')
                .then(response => response.json()) // Convert the response to JSON
                .then(data => {
                    if (data.data) {
                        const movies = data.data.slice(0, 2); // Limit to 2 results
                        const moviesList = document.getElementById('movies-list');

                        // Loop through movies and append them to the list
                        movies.forEach(function(movie) {
                            const listItem = document.createElement('li');
                            listItem.innerHTML = `
                                <pre>${JSON.stringify(movie, null, 2)}</pre>
            `;
            moviesList.appendChild(listItem);
            });
            } else {
            console.log('Error:', data.message);
            }
            })
            .catch(error => {
            console.error('There was an error fetching the movies:', error);
            });
            </code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <div class="w-full overflow-hidden">
                <ul id="movies-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/movies')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const movies = data.data.slice(0, 2); // Limit to 2 results
                                const moviesList = document.getElementById('movies-list');

                                // Loop through movies and append them to the list
                                movies.forEach(function(movie) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(movie, null, 2)}</pre>
                                    `;
                                    moviesList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the movies:', error);
                        });
                </script>
            </div>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Errors</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>

    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- ACTORS API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Actors API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch actors.</p>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed mb-2 ml-5 mr-20">The base URL for all API request is: </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/actors">http://127.0.0.1:8000/api/v1/actors</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all actors in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update actor's details in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Remove an actor in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt </span>  less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Return a JSON object with the following properties:</p>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed mb-2 ml-5 mr-20">Return a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">birthDate</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">biography</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">profileURL</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-4 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
            <code class="language-javascript">

        {{-- fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error)); --}}

            fetch('http://127.0.0.1:8000/api/v1/actors', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer YOUR_API_KEY'
                }
            })
            .then(response => response.json())
            .then(data => {
                const actors = data.data;
                movies.forEach(actors => {
                    console.log(actors.name);
                    console.log(actors.birthDate);
                });
            })
            .catch(error => console.error('Error:', error));
 
            </code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
<div class="w-full overflow-hidden">
                <ul id="actors-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/actors')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const actors = data.data.slice(0, 2); // Limit to 2 results
                                const actorsList = document.getElementById('actors-list');

                                // Loop through actors and append them to the list
                                actors.forEach(function(actor) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(actor, null, 2)}</pre>
                                    `;
                                    actorsList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the actors:', error);
                        });
                </script>
            </div>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>

    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- DIRECTORS API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Directors API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch directors.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:</p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/directors">http://127.0.0.1:8000/api/v1/directors</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all directors in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update director's details in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Remove a director in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt </span>  less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">birthDate</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">biography</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">profileURL</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="directors-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/directors')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const directors = data.data.slice(0, 2); // Limit to 2 results
                                const directorsList = document.getElementById('directors-list');

                                // Loop through directors and append them to the list
                                directors.forEach(function(director) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(director, null, 2)}</pre>
                                    `;
                                    directorsList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the directors:', error);
                        });
                </script>
            </div>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <div class="w-full overflow-hidden">
                <ul id="directors-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/directors')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const directors = data.data.slice(0, 2); // Limit to 2 results
                                const directorsList = document.getElementById('directors-list');

                                // Loop through directors and append them to the list
                                directors.forEach(function(director) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(director, null, 2)}</pre>
                                    `;
                                    directorsList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the directors:', error);
                        });
                </script>
            </div>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- GENRE API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Genre API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch genres.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:</p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/genres">http://127.0.0.1:8000/api/v1/genres</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all genres in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update genre's details in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a genre in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt </span>  less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">description</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-4 rounded mt-4 overflow-x-auto">
            <code class="language-javascript">
        {{-- fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error)); --}}
            </code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <div class="w-full overflow-hidden">
                <ul id="genres-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/genres')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const genres = data.data.slice(0, 2); // Limit to 2 results
                                const genresList = document.getElementById('genres-list');

                                // Loop through genres and append them to the list
                                genres.forEach(function(genre) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(genre, null, 2)}</pre>
                                    `;
                                    genresList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the genres:', error);
                        });
                </script>
            </div>

        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- TICKET API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Ticket API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch tickets.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:</p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/tickets">http://127.0.0.1:8000/api/v1/tickets</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all tickets in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a ticket's details in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular ticket in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt </span>  less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">userId</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">movieId</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">showTime</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-4 rounded mt-4 overflow-x-auto">
            <code class="language-javascript">
        {{-- fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error)); --}}
            </code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="tickets-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/tickets')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const tickets = data.data.slice(0, 2); // Limit to 2 results
                                const ticketsList = document.getElementById('tickets-list');

                                // Loop through tickets and append them to the list
                                tickets.forEach(function(ticket) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(ticket, null, 2)}</pre>
                                    `;
                                    ticketsList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the tickets:', error);
                        });
                </script>
            </div>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- REVIEW API -->

    <h1 class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Review API</h1>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch reviews.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:</p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50" href="http://127.0.0.1:8000/api/v1/reviews">http://127.0.0.1:8000/api/v1/reviews</a>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">GET /reviews</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all reviews in Broadway.</p>
            <p class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">PUT /reviews</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a review's details in Broadway.</p>
            <p class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">DELETE /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular review in Broadway.</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span> </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map: </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• eq</span>   equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-6 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• ne</span>   not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lt</span>   less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gt</span>   greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• gte</span>  greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">• lte</span>  less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following properties:</p>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">movieId</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">userId</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">rating</span> The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">comment</span> The unique identifier of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-4 rounded mt-4 overflow-x-auto">
            <code class="language-javascript">
        {{-- fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error)); --}}
            </code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded" onclick="copyToClipboard(this)"
                title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="reviews-list"></ul>
                <script>
                    fetch('http://127.0.0.1:8000/api/v1/reviews')
                        .then(response => response.json()) // Convert the response to JSON
                        .then(data => {
                            if (data.data) {
                                const reviews = data.data.slice(0, 2); // Limit to 2 results
                                const reviewsList = document.getElementById('reviews-list');

                                // Loop through reviews and append them to the list
                                reviews.forEach(function(review) {
                                    const listItem = document.createElement('li');
                                    listItem.innerHTML = `
                                        <pre>${JSON.stringify(review, null, 2)}</pre>
                                    `;
                                    reviewsList.appendChild(listItem);
                                });
                            } else {
                                console.log('Error:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('There was an error fetching the reviews:', error);
                        });
                </script>
            </div>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:</p>
        </div>
    </div>



</div>
