<x-app-layout>
    <x-slot:title>
        {{ $item->title }}
    </x-slot>

    <section class="mb-16">
        <x-h1>{{ $item->title }}</x-h1>
        @if ($item->description)
            <x-lead>{{ $item->description }}</x-lead>
        @endif
        @if ($item->image('cover'))
            <x-img class="mb-16 max-h-80 rounded" src="{{ $item->image('cover') }}" alt="{{ $item->imageAltText('cover') }}" />
        @endif
    </section>

    {!! $item->renderBlocks() !!}
</x-app-layout>
