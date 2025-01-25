@props(['active' => false])

<a
    {{ $attributes->merge([
        'class' => $active
            ? 'text-green-500 font-bold capitalize transition-all px-4 py-2 rounded-lg'
            : 'hover:text-green-700 font-bold capitalize transition-all px-4 py-2 rounded-lg',
    ]) }}>

    {{ $slot }}

</a>
