<div class="h-full overflow-y-auto bg-[#030712] text-white p-20">
    <!-- Main Header -->
    <header class="mb-10">
        <h1 class="text-4xl font-extrabold"><span class="text-red-500 mr-2">#</span>Welcome to the API Docs</h1>
    </header>

    <!-- Documentation Sections -->
    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Getting Started</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Learn how to begin using our API effectively. This
                section will guide you
                through the initial steps required to set up and make your first API call.</p>
           
        </div>
        <div
            class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative max-w-full">
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
        fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
            </code>
            </pre>
        </div>

        <script>
            
        </script>
    </div>
    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Getting Started</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Learn how to begin using our API effectively. This
                section will guide you
                through the initial steps required to set up and make your first API call.</p>
           
        </div>
        <div
            class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative max-w-full">
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
        fetch('https://api.example.com/start', {
        method: 'GET',
        headers: {
        'Authorization': 'Bearer YOUR_API_KEY'
        }
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
            </code>
            </pre>
        </div>
    </div>
</div>
