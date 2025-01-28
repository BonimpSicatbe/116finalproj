<div class="h-screen w-96 bg-gray-900 text-white flex flex-col overflow-y-auto overflow-hidden fixed">
    <div class="p-10 text-5xl font-bold text-center flex items-center justify-center space-x-3">
        <x-play-icon />
        <span class="text-[#ff2c21]">Broadway</span>
    </div>

    <ul class="space-y-3 text-base px-10 pb-10">
        @foreach($menuItems as $item)
            @if(isset($item['title']))
                <li class="p-3 font-bold text-white text-xl flex items-center space-x-2">
                    <x-hamburger-icon />
                    <span>{{ $item['title'] }}</span>
                </li>

                @if(isset($item['subItems']))
                    <ul class="ml-6 space-y-2">
                        @foreach($item['subItems'] as $subItem)
                            <li class="p-2 text-gray-400 hover:text-white hover:translate-x-2 cursor-pointer flex items-center transition-transform duration-300">
                                <x-arrow-icon class="mr-2" />
                                {{ $subItem }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            @else
                <li class="p-3 text-gray-400 hover:text-white hover:translate-x-2 cursor-pointer flex items-center transition-transform duration-300">
                    {{ $item }}
                </li>
            @endif
        @endforeach
    </ul>
</div>
 