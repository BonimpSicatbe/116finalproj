<div class="flex flex-row items-center justify-center gap-4 py-4 bg-gray-700 text-gray-50">

    <x-nav-link href="{{ route('home') }}" :active="request()->is(patterns: '/')" class="">Home</x-nav-link>
    <x-nav-link href="{{ route('movies.index') }}" :active="request()->is('movies')" class="">Movies</x-nav-link>
    <x-nav-link href="{{ route('docs.index') }}" :active="request()->is(patterns: 'docs')">Docs</x-nav-link>
    <x-nav-link href="">About</x-nav-link>
</div>
