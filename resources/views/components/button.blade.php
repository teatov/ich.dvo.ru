@props(['variant' => 'default', 'size' => 'default', 'type'=>'button'])

@php
    $baseClasses = 'font-semibold text-nowrap rounded inline-flex items-center justify-center';
    $variantClasses = [
        'default' => 'bg-primary text-background hover:bg-primary-lighter active:bg-primary-dark ',
        'secondary' => 'bg-background text-primary-darker hover:bg-neutral-lighter',
        'none' => 'hover:bg-neutral-lighter',
        'danger' => 'bg-error text-white',
    ];
    $sizeClasses = [
        'default' => 'py-3 px-5 text-sm',
        'sm' => 'py-1 px-3 text-xs',
        'icon' => 'size-9',
    ];
@endphp

@if ($attributes->has('href'))
    <a
        {{ $attributes->twMerge(['class' => [$baseClasses, $variantClasses[$variant], $sizeClasses[$size]]]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}"
        {{ $attributes->twMerge(['class' => [$baseClasses, $variantClasses[$variant], $sizeClasses[$size]]]) }}>{{ $slot }}</button>
@endif
