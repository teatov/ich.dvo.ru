<x-app-layout container="">
    <x-slot:title>
        {{ $item->title }}
    </x-slot>

    <section class="container">
        <div class="flex flex-col bg-neutral-lighter lg:flex-row">
            <div class="p-4 lg:w-[48%] xl:py-12 xl:pl-16">
                <h2 class="text-4xl font-semibold sm:text-5xl xl:text-7xl">Lorem ipsum dolor sit amet, consectetur</h2>
                <p class="mb-6 mt-4 text-2xl text-neutral-darker xl:text-3xl">Lorem ipsum dolor sit amet, consectetur
                    adipiscing
                    elit, sed do
                </p>
                <x-button href="/">Подробнее</x-button>
            </div>
            <div class="lg:w-[52%]">
                <x-img class="lg:clip-path h-72 lg:h-full"
                    src="https://images.unsplash.com/photo-1608037222011-cbf484177126?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            </div>
        </div>
        <div class="flex justify-center pt-6">
            <div class="flex flex-nowrap gap-4">
                @foreach ([true, false, false, false] as $page)
                    <svg width="9" height="8" viewBox="0 0 9 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg" @class(['text-neutral' => !$page, 'text-foreground' => $page])>
                        <circle cx="4.75" cy="4" r="4" fill="currentColor" />
                    </svg>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container my-16">
        <div class="mx-auto max-w-screen-md">
            <x-badge>Об институте</x-badge>
            <p class="relative text-xl text-neutral-darker" >{{ $item->about }}</p>
                <x-link :href="'about'" variant="primary">Подробнее</x-link>
        </div>
    </section>

    <section class="bg-neutral-lighter">
        <div class="container py-14">
            <x-h2>Тематики института {{ date('Y') }}</x-h2>
            <ul class="my-8 grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-4">
                @foreach (['1', '2', '3', '4'] as $theme)
                    <li class="rounded bg-background">
                        <div class="space-y-5 border-b p-4 md:p-10">
                            <x-icon.placeholder />
                            <x-h4>Lorem ipsum dolor sit amet {{ $theme }}</x-h4>
                            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor</x-p>
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <x-link href="/{{ $theme }}" class="text-xs font-semibold">Подробнее</x-link>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="flex justify-center">
                <x-button :href="'themes'">Все тематики</x-button>
            </div>
        </div>
    </section>

    <section class="container py-14">
        <x-h2>Направления работы института</x-h2>
        <ul class="my-8 grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-4">
            @foreach (['1', '2', '3', '4', '5', '6', '7', '8'] as $direction)
                <li class="space-y-5">
                    <x-icon.placeholder />
                    <x-h4>Lorem ipsum dolor sit amet {{ $direction }}</x-h4>
                    <div>
                        <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor</x-p>
                        <x-link href="/{{ $direction }}" class="mt-2 block text-xs font-semibold">Подробнее</x-link>
                    </div>
                </li>
            @endforeach
        </ul>
        <x-link href="/" variant="primary">Показать ещё</x-link>
    </section>

    <section class="container flex flex-col gap-y-4 bg-neutral-lighter py-14 lg:flex-row">
        <div class="md:p-6 lg:w-1/2">
            <x-h3>В институте можно оставить заявку на аренду оборудования</x-h3>
            <p class="relative text-xl text-neutral-darker" >Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <x-link :href="'equipment'">Подробнее</x-link>
        </div>
        <div class="h-72 lg:w-1/2">
            <x-img class="rounded-xl"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </section>

    {{-- <section class="container py-16">
        <x-h2>Наши новости</x-h2>
        <x-common.card-picture-grid class="my-8" :cards="$newsArticles->cardSerialize()" />
        <x-link :href="'news-articles.index'" variant="primary">Все новости</x-link>
    </section> --}}

    <section class="bg-primary/20">
        <div class="container py-14 text-center text-neutral-darker">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
