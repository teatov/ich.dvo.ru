@props(['cards' => []])

<ul {{ $attributes->twMerge(['class' => 'grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3']) }}>
    @foreach (['1', '2', '3'] as $card)
        <x-common.card-picture
            imgsrc="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            category="Категория"
            heading="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor {{ $card }}"
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            url="/{{ $card }}" />
    @endforeach
</ul>
