<div class="z-50 fixed w-screen bg-black border-b border-gray-900 xs:px-4">
    <div class="container mx-auto">
        {{-- label & searchbar --}}
        <div class="border-b border-gray-900 grid grid-cols-3 gap-4 items-center px-4 py-2 text-gray-100">
            {{-- <div class="text-2xl font-black">Cool Pal Kami</div> --}}
            <a href="{{ route('landing-page') }}" class="text-2xl font-black">Cool Pal Kami</a>

            <label class="input input-bordered border-gray-700 input-ghost input-sm flex items-center gap-2">
                <i class="fa-solid fa-search"></i>
                <form action="" method="post">
                    @csrf
                    <input type="text" class="grow" placeholder="Search" />
                </form>
            </label>
        </div>

        {{-- navbar links --}}
        <div class="py-2 space-y-4">
            <x-nav-link class="{{ route('landing-page') }}" href="">Home</x-nav-link>
            <x-nav-link class="" href="">Get Started</x-nav-link>
            <x-nav-link class="" href="">Movies</x-nav-link>
            <x-nav-link class="" href="">Docs</x-nav-link>
            <x-nav-link class="" href="">About</x-nav-link>
        </div>
    </div>
</div>
{{-- <div class="flex flex-row justify-center">
    <div class="container mx-auto fixed border-b border-gray-700">

    </div>
</div> --}}

{{-- <div class="navbar bg-ghost text-neutral-content">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a href="" class="btn btn-ghost text-xl">CoolPalKami</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a>Item 1</a></li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            <li><a>Item 3</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a class="btn btn-sm">Button</a>
    </div>
</div> --}}
