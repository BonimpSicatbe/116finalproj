<x-app-layout>
    <x-section>

        <div class="mb-4">
            <input type="text" id="search-input" class="border border-gray-300 p-2 rounded w-full"
                placeholder="Search movies...">
        </div>

        <div class="mb-4">
            <select id="filter-dropdown" class="border border-gray-300 p-2 rounded w-full">
                <option value="">All</option>
                <option value="action">Action</option>
                <option value="comedy">Comedy</option>
                <option value="drama">Drama</option>
            </select>
        </div>

        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">API Data Fetch Example</h1>

            <button id="fetch-btn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Fetch Data
            </button>

            <div id="result" class="mt-4 text-gray-700 hidden">
            </div>
        </div>

    </x-section>

    <script>
        let movies = [];

        const fetchMovies = async () => {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `<div class="text-3xl font-bold p-4">loading...</div>`;
            resultDiv.classList.remove('hidden');

            try {
                const response = await fetch('http://127.0.0.1:8000/api/v1/movies');
                const json = await response.json(); // Parse the response JSON

                // Log the full response for debugging
                console.log(json);

                // Access the `data` array inside the response
                movies = json.data;

                // Ensure `data` exists and is an array
                if (Array.isArray(movies)) {
                    displayMovies(movies);
                } else {
                    resultDiv.innerHTML = `<p class="text-red-500">Error: No movies found in the response</p>`;
                }
            } catch (error) {
                console.error('Error fetching movies:', error);
                resultDiv.innerHTML = `<p class="text-red-500">Error fetching movies: ${error.message}</p>`;
            }
        };

        const displayMovies = (movies) => {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `
                <ul class="list-disc pl-6 space-y-4">
                ${movies.map(movie => `
                                {{-- card --}}
                                <div class="flex flex-row justify-between items-center gap-4 w-full max-h-[500px] p-4 border border-gray-500 rounded-lg">
                                    {{-- left --}}
                                    <img src="${movie.posterUrl}" alt="${movie.posterUrl}" class="w-1/3 h-full">

                                    {{-- right --}}
                                    <div class="w-2/3">
                                        <h1 class="text-2xl font-bold">${movie.title}</h1>
                                        <p class="text-gray-700">${movie.description}</p>
                                        <p class="text-gray-700">Released on: ${movie.releaseDate}</p>
                                        <p class="text-gray-700">Duration: ${movie.duration} minutes</p>
                                    </div>
                                </div>
                            `).join('')}
                </ul>
            `;
        };

        const searchMovies = () => {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const filteredMovies = movies.filter(movie => movie.title.toLowerCase().includes(searchInput));
            displayMovies(filteredMovies);
        };

        const filterMovies = () => {
            const filterValue = document.getElementById('filter-dropdown').value.toLowerCase();
            const filteredMovies = filterValue ? movies.filter(movie => movie.genre.toLowerCase() === filterValue) : movies;
            displayMovies(filteredMovies);
        };

        // Attach the fetchMovies function to your button click event
        document.getElementById('fetch-btn').addEventListener('click', fetchMovies);

        // Attach the searchMovies function to the search input event
        document.getElementById('search-input').addEventListener('input', searchMovies);

        // Attach the filterMovies function to the dropdown change event
        document.getElementById('filter-dropdown').addEventListener('change', filterMovies);
    </script>
</x-app-layout>
