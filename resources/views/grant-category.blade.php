<x-app-layout>
    <x-slot:title>
        Категория
    </x-slot>

    <section class="container mb-16">
        <x-h1>Категория</x-h1>
        <x-common.card-picture-grid class="my-8" />
        <div x-data="{ open: false }" class="border-b pb-3">
            <button type="button" class="mb-3 flex items-center gap-1 text-xs font-bold uppercase" @click="open = !open">
                <x-icon.accordion-expand class="inline" ::class="{ 'hidden': open }" />
                <x-icon.accordion-collapse class="inline" ::class="{ 'hidden': !open }" />
                <span>Показать ещё</span>
            </button>
            <div x-show="open" x-collapse x-cloak>
                <x-common.card-picture-grid />
            </div>
        </div>
    </section>
</x-app-layout>
