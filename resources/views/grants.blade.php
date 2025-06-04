<x-app-layout>
    <x-slot:title>
        Гранты
    </x-slot>

    <section class="container mb-16">
        <x-h1>Гранты</x-h1>
        <ul class="my-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach (['1', '2', '3', '4', '5', '6'] as $article)
                <x-reuse.card-picture
                    imgsrc="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    category="Категория"
                    heading="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor {{ $article }}"
                    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    url="/{{ $article }}" />
            @endforeach
        </ul>
        <div x-data="{ open: false }" class="border-b pb-3">
            <button class="mb-3 flex items-center gap-1 text-xs font-bold uppercase" @click="open = !open">
                <x-icon.accordion-expand class="inline" ::class="{ 'hidden': open }" />
                <x-icon.accordion-collapse class="inline" ::class="{ 'hidden': !open }" />
                <span>Показать ещё</span>
            </button>
            <div x-show="open" x-collapse x-cloak>
                <ul class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
                    @foreach (['1', '2', '3', '4', '5', '6'] as $article)
                        <x-reuse.card-picture
                            imgsrc="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            category="Категория"
                            heading="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor {{ $article }}"
                            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                            url="/{{ $article }}" />
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</x-app-layout>
