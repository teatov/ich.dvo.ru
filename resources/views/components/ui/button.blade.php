@php
    $classes =
        'bg-primary text-nowrap text-background py-3 px-5 rounded hover:bg-primary-lighter active:bg-primary-darker inline-block';
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
