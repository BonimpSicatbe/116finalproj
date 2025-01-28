@extends('layouts.app')
@section('content')
   <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 blurred-bg">
        <div class="container mx-auto px-4 py-7 flex justify-between items-center">
            <a href="landing-page" class="text-2xl font-bold">Broadway API</a>
            <div class="space-x-6">
                <a href="documentation"
                class="text-white bg-gray-900 hover:bg-gray-800 border border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-100 dark:bg-white dark:border-gray-200 dark:text-gray-900 dark:hover:bg-gray-100 me-2 mb-2 transition duration-300 ease-in-out">Documentation</a>
            </div>
        </div>
    </nav>

    <header class="h-screen flex items-center justify-center bg-gradient-to-b from-[#030712] to-[#10141f]">
        <div class="text-center px-6">
            <h1 class="text-8xl font-bold mb-6">Welcome to Broadway</h1>
            <h1 class="text-8xl font-bold mb-6 text-[#ff2c21]" >API Docu.</h1>
            <div class="flex flex-wrap justify-center text-center max-w-3xl mx-auto">
                <p class="text-2xl mb-8 text-gray-400">Be more simplify with our powerful APIs</p>
            </div>
            <div class="space-x-4">
                <a href="#"
                    class="text-white bg-gray-900 hover:bg-gray-800 border border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-100 dark:bg-white dark:border-gray-200 dark:text-gray-900 dark:hover:bg-gray-100 me-2 mb-2 transition duration-300 ease-in-out">Get Started</a>
                <a href="#"
                    class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2 transition duration-300 ease-in-out">Demo
                    Project</a>
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
    <section id="developers" class="py-16 bg-gradient-to-b from-[#10141f] to-[#030712] relative overflow-hidden transition duration-500 ease-in-out">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Meet the Developers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Developer Card -->
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://scontent.fmnl19-1.fna.fbcdn.net/v/t39.30808-6/414556862_2009788716044072_3253570624580891932_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHkPb9Zwxorz_qN75YQrDbvARhrnKaVp90BGGucppWn3XAyrKx66mC21MiR_LQqPHik8qVsISc2H1S-vlrW0hUM&_nc_ohc=C4dceD7bw-8Q7kNvgHodaEG&_nc_zt=23&_nc_ht=scontent.fmnl19-1.fna&_nc_gid=A5BUg8cZ1RSRwNXiO0xUOP1&oh=00_AYA7J8mxagNqaRNxBAbcQYWZTFNU9Ea_82V77_NwbZA69A&oe=679BF289" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Doming H. Ricalde</h3>
                    <p class="text-gray-400">Full-Stack Developer</p>
                </div>
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://scontent.fmnl19-1.fna.fbcdn.net/v/t39.30808-6/452226639_1295183074792684_8613496832448125055_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHLxAfKCg4A45h3_YLXnSiOi-NO8UyHzhuL407xTIfOG_zgKLWGeBC5p4ZApwbVpde7bokOiUCy-CDi1udalw_k&_nc_ohc=rSPwYfCwg2EQ7kNvgEGKuwl&_nc_zt=23&_nc_ht=scontent.fmnl19-1.fna&_nc_gid=AczES1qY8eqTk9Mem5kujO8&oh=00_AYAaqyRqbbrnQ9XscFwuQCOcH1UhQDxxTsNjLbUSh22UGg&oe=679BF1C2" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">John Robin A. Estrella</h3>
                    <p class="text-gray-400">Front-End Developer</p>
                </div>
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out text-center">
                    <img src="images/josh.jpg" 
                        alt="Developer" 
                        class="w-24 h-24 rounded-full mx-auto mb-4 object-cover object-center">
                    <h3 class="text-xl font-semibold text-white">Joshua F. Penuela</h3>
                    <p class="text-gray-400">Front-End Developer</p>
                </div>
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://scontent.fmnl19-1.fna.fbcdn.net/v/t39.30808-6/434353836_7382220058527112_286138832604049429_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeF1uetT_oAuYz3g6ffZIT1VvMnNztikfrG8yc3O2KR-sSylGdUi8MrcNBTaV0nfIsN1_5NVTqpgoAStD87uaW_M&_nc_ohc=s5LDL5DJvBoQ7kNvgHOOwT_&_nc_zt=23&_nc_ht=scontent.fmnl19-1.fna&_nc_gid=AbwdthkOmWyJOdrIG7ige-X&oh=00_AYCT-dQJAMcHftK_zJpKsK04zKrQIbyVuoyRdgsx2-kZUg&oe=679BCB1A" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Alexander V. Llano</h3>
                    <p class="text-gray-400">Back-End Developer</p>
                </div>
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://scontent.fmnl19-1.fna.fbcdn.net/v/t39.30808-6/472987000_1344417680072042_4213912722454266823_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEkyPG8LjsZQ-kCSoxxrZaZhctyUgYzDUOFy3JSBjMNQ05lIEaSvB7LmCA4WgItXCQBiypaQKjazj9xVGWxYVIo&_nc_ohc=K2Ezc0ModKkQ7kNvgFVP8wo&_nc_zt=23&_nc_ht=scontent.fmnl19-1.fna&_nc_gid=Aib33neKZgxf-ni9nBkUah1&oh=00_AYCp9FftrEnRUlUvINPOiRORrROqFw3B0VUkYi9mHM87mg&oe=679BF6C5" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Hanzel L. Ramirez</h3>
                    <p class="text-gray-400">Back-End Developer</p>
                </div>
                <div class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                    <img src="https://scontent.fmnl19-1.fna.fbcdn.net/v/t1.6435-9/192779185_4244131869001230_43878358087028725_n.jpg?stp=dst-jpg_s552x414_tt6&_nc_cat=104&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeEM7B_TRfK12ft7DHuADnNnhP1LAo8ToxuE_UsCjxOjG4zSdsODwIGBWJ0DIuBeG-B9ssjA7JB6G4_cDLPzE-PY&_nc_ohc=xOr36MeMC18Q7kNvgE87_KY&_nc_zt=23&_nc_ht=scontent.fmnl19-1.fna&_nc_gid=ADv790NTiXctrdd9l7M1n-o&oh=00_AYCpe5uIByrZh4IrEplNOV1_GExeo48rQAY1ZGi_l7gS8g&oe=67BD71E6" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Clark Angelo P. Mendoza</h3>
                    <p class="text-gray-400">API Specialist</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="py-8 bg-[#030712]">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Broadyway Shows API Documentation. All rights reserved.</p>
        </div>
    </footer>
@endsection


