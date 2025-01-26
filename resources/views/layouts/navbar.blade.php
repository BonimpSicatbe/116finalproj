
<div class="grid grid-cols-3 gap-4 items-center px-8 py-4 text-gray-100">
    <a href="{{ route('landing-page') }}" class="text-2xl font-black">Cool Pal Kami</a>
    <div class="">
        <x-nav-link class="{{ request()->is('') }}" href="{{ route('landing-page') }}">Home</x-nav-link>
        <x-nav-link class="" href="">Get Started</x-nav-link>
        <x-nav-link class="" href="">Movies</x-nav-link>
        <x-nav-link class="" href="">Docs</x-nav-link>
        <x-nav-link class="" href="">About</x-nav-link>
    </div>
</div>
