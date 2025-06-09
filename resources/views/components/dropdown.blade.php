@props(['chevron' => true])

<div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button class="flex flex-col items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-dark"
        @click="open = ! open">
        {{ $trigger }}
        @if ($chevron)
            <x-icon.chevron />
        @endif
    </button>

    <div {{ $wrapper->attributes->class('absolute z-50 origin-top transition') }} x-show="open" style="display: none;"
        x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        @click="open = false">
        <div {{ $content->attributes->class('text-nowrap border text-sm bg-background') }}>
            {{ $content }}
        </div>
    </div>
</div>
