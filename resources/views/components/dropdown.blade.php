@props(['chevron' => true, 'variant' => 'default', 'clickinsideclose'=>true])

@php
    $variantClasses = [
        'default' => 'flex items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-dark',
        'button' => 'hover:bg-neutral-lighter rounded inline-flex items-center justify-center',
    ];
@endphp

<div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button
        {{ $trigger->attributes->class($variantClasses[$variant]) }}
        @click="open = !open">
        {{ $trigger }}
        @if ($chevron)
            <x-icon.chevron />
        @endif
    </button>

    <div {{ $wrapper->attributes->class('absolute z-50 origin-top transition') }} x-show="open" style="display: none;"
        x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        @click="{{$clickinsideclose ? 'open = false' : ''}}">
        <div {{ $content->attributes->class('text-nowrap border text-sm bg-background') }}>
            {{ $content }}
        </div>
    </div>
</div>
