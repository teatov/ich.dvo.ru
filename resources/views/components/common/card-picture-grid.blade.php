@props(['cards' => []])

<ul {{ $attributes->twMerge(['class' => 'grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3']) }}>
    @foreach ($cards as $card)
        <x-common.card-picture
            imgsrc="{{ $card['imgsrc'] }}"
            category="Категория"
            heading="{{ $card['heading'] }}"
            text="{{ $card['text'] }}"
            url="{{ $card['url'] }}" />
    @endforeach
</ul>
