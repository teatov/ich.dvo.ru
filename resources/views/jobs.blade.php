<x-app-layout container="">
    <x-slot:title>
        Вакансии
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Вакансии</x-layout.breadcrumb>
        <x-h1>Вакансии</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
        <x-img class="mx-auto max-h-[466px] max-w-[620px] rounded"
            src="https://habrastorage.org/files/ce1/21f/a38/ce121fa38cbb44acb763f2620ef84573.jpg" />
    </section>

    <section class="container mb-16 px-4 md:px-0">
        <x-h2 class="">Заголовок</x-h2>
        <div class="flex flex-col justify-between gap-8 md:flex-row">
            <div class="">
                <x-p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. </x-p>
            </div>
            <div class="">
                <x-p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. </x-p>
            </div>
        </div>
    </section>

    <section class="bg-neutral-lighter pb-10 pt-12 text-center">
        <div class="container px-4 md:px-0">
            <x-h2 class="mb-4 font-semibold">Вакансии</x-h2>
            <ul class="mb-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                @for ($i = 0; $i < 8; $i++)
                    <li class="bg-background px-9 py-16 text-2xl">
                        <x-h4>Lorem ipsum dolor sit amet</x-h4>
                        <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor </x-p>
                    </li>
                @endfor
            </ul>
            <x-button href="{{ route('about') }}" variant="primary">Посмотреть на hh</x-button>
        </div>
    </section>

    <section class="container flex flex-col items-center justify-between px-4 py-16 md:flex-row md:px-0">
        <div class="mb-8 w-full max-w-[425px] md:mb-0 md:w-2/5">
            <h2 class="mb-5 text-3xl font-bold leading-[1.2] md:text-5xl md:leading-[58px]">О нашем институте</h2>
            <p class="mb-8 text-base leading-[25px] text-[#606567] md:text-lg">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br><br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident
            </p>
            <x-button href="/">Подробнее</x-button>
        </div>
        <div class="w-full md:w-3/5">
            <img class="max-h-[300px] w-full rounded-[5px] object-cover md:max-h-[424px]"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
    </section>

    <section class="bg-primary/20">
        <div class="container px-4 py-20 text-center text-neutral-darker md:px-0">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
