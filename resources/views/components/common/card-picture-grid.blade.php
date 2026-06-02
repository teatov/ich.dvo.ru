@props(['cards' => []])

<ul {{ $attributes->twMerge(['class' => 'grid grid-cols-1 gap-8 items-start md:grid-cols-2 xl:grid-cols-3']) }}>
    @foreach ($cards as $card)
        <x-common.card-picture
            :imgSrc="$card->getCardImageSrc()"
            :category="$card->getCardCategory()"
            :heading="$card->getCardHeading()"
            :text="$card->getCardText()"
            :url="$card->getCardUrl()" />
    @endforeach
</ul>
