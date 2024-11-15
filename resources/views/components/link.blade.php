@props(['variant' => 'default'])

@php
    $classes = [
        'default' => 'font-medium hover:text-primary active:text-primary-darker',
        'primary' =>
            'font-semibold underline underline-offset-4 decoration-primary/20 text-primary decoration-2 hover:text-primary-lighter hover:decoration-primary-lighter active:text-primary-darker active:decoration-primary-darker',
    ];
@endphp

<a {{ $attributes->twMerge(['class' => $classes[$variant]]) }}>{{ $slot }}</a>
