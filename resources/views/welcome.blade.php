<x-app-layout>


    <!-- Header -->
    <header class="h-screen flex items-center justify-center bg-gradient-to-b from-[#030712] to-[#10141f]">
        <div class="text-center px-6">
            <h1 class="text-6xl font-bold mb-6">Welcome to the API Documentation</h1>
            <p class="text-xl mb-8">Streamline your integration with our powerful APIs</p>
            <div class="space-x-4">
                <a href="#"
                   class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2 transition duration-300 ease-in-out">Demo
                    Project</a>
                <a href="#"
                   class="text-white bg-gray-900 hover:bg-gray-800 border border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-100 dark:bg-white dark:border-gray-200 dark:text-gray-900 dark:hover:bg-gray-100 me-2 mb-2 transition duration-300 ease-in-out">Documentation</a>
            </div>

        </div>

    </header>

    <!-- Features Section -->
    <section id="features"
             class="h-screen py-16 bg-[#10141f] relative overflow-hidden transition duration-500 ease-in-out">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="relative">
                <img src="{{asset('images/code.png')}}" alt="Feature Image"
                     class="rounded-lg shadow-lg transform hover:rotate-3 hover:scale-105 transition duration-500 ease-in-out">
            </div>
            <div>
                <h2 class="text-4xl font-bold mb-4">Powerful API Features</h2>
                <p class="text-gray-400 mb-6">Our API provides robust features that streamline your development process.
                </p>
                <a href="#"
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">Learn
                    More</a>
            </div>
        </div>
    </section>

    <!-- Developers Section -->
    <section id="developers"
             class="py-16 bg-gradient-to-b from-[#10141f] to-[#030712] relative overflow-hidden transition duration-500 ease-in-out">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-20">Meet the Developers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">John Doe</h3>
                    <p class="text-gray-400">Frontend Developer</p>
                </div>
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Jane Smith</h3>
                    <p class="text-gray-400">Backend Developer</p>
                </div>
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Alex Johnson</h3>
                    <p class="text-gray-400">API Specialist</p>
                </div>
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">John Doe</h3>
                    <p class="text-gray-400">Frontend Developer</p>
                </div>
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Jane Smith</h3>
                    <p class="text-gray-400">Backend Developer</p>
                </div>
                <div
                    class="bg-[#10141f] rounded-lg shadow-lg p-6 border border-gray-800 hover:border-gray-500 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://placehold.co/600x400/000000/FFFFFF/png" alt="Developer"
                         class="size-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Alex Johnson</h3>
                    <p class="text-gray-400">API Specialist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="py-8 bg-[#030712]">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 API Documentation. All rights reserved.</p>
        </div>
    </footer>
</x-app-layout>
