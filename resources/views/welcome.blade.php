<x-app-layout container="">
    <x-slot:title>
        Институт химии ДВО РАН
    </x-slot>

    <section class="container">
        <div class="flex bg-neutral-lighter">
            <div class="w-1/2 py-12 pl-16">
                <h2 class="text-7xl font-semibold">Lorem ipsum dolor sit amet, consectetur</h2>
                <p class="mb-6 mt-4 text-3xl text-neutral-darker">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do
                </p>
                <x-button href="/">Подробнее</x-button>
            </div>
            <div class="w-1/2 bg-neutral"></div>
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
            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.</x-p>
            <x-link href="{{ route('about') }}" variant="primary">Подробнее</x-link>
        </div>
    </section>

    <section class="bg-neutral-lighter">
        <div class="container py-14">
            <x-h2>Тематики института {{ date('Y') }}</x-h2>
            <ul class="my-8 grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-4">
                @foreach (['1', '2', '3', '4'] as $theme)
                    <li class="rounded bg-background">
                        <div class="space-y-5 border-b p-10">
                            <x-icon.placeholder />
                            <x-h4>Lorem ipsum dolor sit amet {{ $theme }}</x-h4>
                            <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor</x-p>
                        </div>
                        <div class="px-10 py-4">
                            <x-link href="/{{ $theme }}" class="text-xs font-semibold">Подробнее</x-link>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="flex justify-center">
                <x-button href="{{ route('themes') }}">Все тематики</x-button>
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
                        <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor</x-p>
                        <x-link href="/{{ $direction }}" class="mt-2 block text-xs font-semibold">Подробнее</x-link>
                    </div>
                </li>
            @endforeach
        </ul>
        <x-link href="/" variant="primary">Показать ещё</x-link>
    </section>

    <section class="container flex bg-neutral-lighter py-14">
        <div class="w-1/2 p-6">
            <x-h3>В институте можно оставить заявку на аренду оборудования</x-h3>
            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</x-p>
            <x-link href="{{ route('equipment') }}">Оборудование</x-link>
        </div>
        <div class="w-1/2 rounded-xl bg-neutral"></div>
    </section>

    <section class="container py-16">
        <x-h2>Наши новости</x-h2>
        <ul class="my-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach (['1', '2', '3'] as $article)
                <li class="rounded-xl border p-5">
                    <div class="aspect-video rounded bg-neutral"></div>
                    <div class="space-y-5 p-5">
                        <x-badge>Категория</x-badge>
                        <x-h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            {{ $article }}</x-h4>
                        <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</x-p>
                        <x-link href="/{{ $article }}" class="mt-2 block text-xs font-semibold">Подробнее</x-link>
                    </div>
                </li>
            @endforeach
        </ul>
        <x-link href="{{ route('news') }}" variant="primary">Все новости</x-link>
    </section>

    <section class="bg-primary/20">
        <div class="container py-14 text-center text-neutral-darker">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
