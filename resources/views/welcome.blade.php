<x-app-layout>
    {{-- section 1 (header) --}}
    {{-- <div class="">
        <img src="{{ asset('img/bg-image.jpg') }}" alt="Background Image" class="w-full h-auto">
        <x-section class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-5xl font-black text-gray-200">Lorem ipsum dolor sit.</div>
            <a href="" class="btn btn-sm btn-wide glass mt-4">Get Started</a>
        </x-section>
    </div> --}}


    {{-- section 2 (content) --}}
    <div class="relative hero min-h-screen" style="background-image: url({{ asset('img/bg-image.jpg') }});">
        <div class="hero-overlay bg-opacity-70 bg-black"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-2xl">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate dolorem animi tempore omnis earum aliquam minima, possimus, nam dicta expedita officia doloribus consequuntur eos enim.
                </p>
                <button class="btn btn-md btn-wide glass text-gray-50">Get Started</button> {{-- redirect to get started route name --}}
            </div>
        </div>
    </div>

    {{-- section 3 (footer) --}}
    <div class="bg-black text-white py-16">
        <div class="container mx-auto">
            <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
            <p class="mb-5">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
        </div>
    </div>
</x-app-layout>
