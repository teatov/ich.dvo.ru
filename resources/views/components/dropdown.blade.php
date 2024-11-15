@props(['wrapperClasses' => '', 'chevron' => true])

<div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button class="flex items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-darker"
        @click="open = ! open">
        {{ $trigger }}
        @if ($chevron)
            <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.10766 4L7.57176 0H0.643555L4.10766 4Z" fill="currentColor" />
            </svg>
        @endif
    </button>

    <div x-show="open" class="{{ $wrapperClasses }} absolute z-50 origin-top" style="display: none;"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        @click="open = false">
        <div {{ $content->attributes->class('text-nowrap border text-sm bg-background') }}>
            {{ $content }}
        </div>
    </div>
</div>
