@props(['active' => false])

<a {{ $attributes->merge(['class' => $active ? 'text-green-500 font-black uppercase transition-all px-4 py-2 rounded-lg' : 'hover:text-green-700 font-black uppercase transition-all px-4 py-2 rounded-lg']) }}>{{ $slot }}</a>
