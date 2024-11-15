@props(['chevron' => true])

<div x-data="{ open: false }" @close.stop="open = false">
    <button class="flex items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-darker"
        @click="open = ! open">
        {{ $trigger }}
        @if ($chevron)
            <x-icon.chevron />
        @endif
    </button>

    <div x-show="open" class="grid transition-[grid-template-rows]" style="display: none;"
        x-transition:enter="ease-out duration-200" x-transition:enter-start="grid-rows-[0fr]"
        x-transition:enter-end="grid-rows-[1fr]" x-transition:leave="ease-in duration-75"
        x-transition:leave-start="grid-rows-[1fr]" x-transition:leave-end="grid-rows-[0fr]" @click="open = false">
        <div {{ $content->attributes->class('overflow-hidden') }}>
            {{ $content }}
        </div>
    </div>
</div>
