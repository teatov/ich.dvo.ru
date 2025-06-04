@props(['variant' => 'default'])

@php
    $classes = [
        'default' =>
            'bg-primary font-semibold text-nowrap text-background py-3 px-5 rounded hover:bg-primary-lighter active:bg-primary-dark inline-block text-sm',
        'secondary' =>
            'bg-background font-semibold text-nowrap text-primary-darker py-3 px-5 rounded hover:bg-neutral-lighter inline-block text-sm',
    ];
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->twMerge(['class' => $classes[$variant]]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->twMerge(['class' => $classes[$variant]]) }}>{{ $slot }}</button>
@endif
