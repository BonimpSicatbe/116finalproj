@props(['active' => false])

<a
    {{ $attributes->merge([
        'class' => $active
            ? 'border-b-2 text-gray-100 text-gray-300 font-black p-2'
            : 'hover:text-gray-100 text-gray-500 font-black px-4 py-2 transition-all',
    ]) }}>

    {{ $slot }}

</a>
