<x-app-layout>
    <x-slot:title>
        {{ $item->title }}
    </x-slot>

    <section class="mb-16">
        <x-h1>{{ $item->title }}</x-h1>
        @if ($item->description)
            <x-lead>{{ $item->description }}</x-lead>
        @endif
    </section>

    {!! $item->renderBlocks() !!}
</x-app-layout>
