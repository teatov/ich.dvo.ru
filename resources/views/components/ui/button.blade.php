@php
    $classes = 'bg-blue text-background py-3 px-5 rounded hover:bg-blue-lighter active:bg-blue-darker';
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
