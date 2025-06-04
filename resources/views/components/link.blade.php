@props(['variant' => 'default'])

@php
    $classes = [
        'default' => 'font-medium hover:text-primary active:text-primary-dark',
        'primary' =>
            'font-semibold underline underline-offset-4 decoration-primary/20 text-primary decoration-2 hover:text-primary-lighter hover:decoration-primary-lighter active:text-primary-dark active:decoration-primary-dark',
    ];
@endphp

<a {{ $attributes->twMerge(['class' => $classes[$variant]]) }}>{{ $slot }}</a>
