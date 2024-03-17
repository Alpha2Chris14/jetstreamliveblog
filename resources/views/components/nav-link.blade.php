@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center space-x-2 text-sm text-yellow-900 hover:text-yellow-500'
            : 'inline-flex items-center space-x-2 text-sm text-gray-500 hover:text-yellow-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>
    {{ $slot }}
</a>
