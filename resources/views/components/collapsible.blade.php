<div x-data="{ open: false }" @close.stop="open = false">
    <button class="flex items-center gap-x-1.5 font-medium hover:text-primary active:text-primary-darker"
        @click="open = ! open">{{ $trigger }}</button>

    <div x-show="open" x-collapse @click="open = false">
        <div {{ $content->attributes->class('overflow-hidden') }}>
            {{ $content }}
        </div>
    </div>
</div>
