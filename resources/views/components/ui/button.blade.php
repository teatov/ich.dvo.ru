@php
    $classes =
        'bg-primary font-semibold text-nowrap text-background py-3 px-5 rounded hover:bg-primary-lighter active:bg-primary-darker inline-block text-sm';
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->twMerge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->twMerge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
