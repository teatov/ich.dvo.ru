@props(['expandText' => 'Показать ещё'])

<div x-data="{ open: false }" class="border-b pb-3">
    <button class="mb-3 flex items-center gap-1 text-xs font-bold uppercase" @click="open = !open">
        <x-icon.accordion-expand class="inline" ::class="{ 'hidden': open }" />
        <x-icon.accordion-collapse class="inline" ::class="{ 'hidden': !open }" />
        <span>{{ $expandText }}</span>
    </button>
    <div x-show="open" x-collapse x-cloak>
        {{ $slot }}
    </div>
</div>
