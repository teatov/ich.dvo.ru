@props(['chevron' => true])

<div x-data="{ open: false }" @close.stop="open = false">
    <button class="flex items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-darker"
        @click="open = ! open">
        {{ $trigger }}
        @if ($chevron)
            <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.10766 4L7.57176 0H0.643555L4.10766 4Z" fill="currentColor" />
            </svg>
        @endif
    </button>

    <div x-show="open" class="grid" style="display: none;"
        x-transition:enter="transition-[grid-template-rows] ease-out duration-200"
        x-transition:enter-start="grid-rows-[0fr]" x-transition:enter-end="grid-rows-[1fr]"
        x-transition:leave="transition-[grid-template-rows] ease-in duration-75"
        x-transition:leave-start="grid-rows-[1fr]" x-transition:leave-end="grid-rows-[0fr]" @click="open = false">
        <div {{ $content->attributes->class('overflow-hidden') }}>
            {{ $content }}
        </div>
    </div>
</div>
