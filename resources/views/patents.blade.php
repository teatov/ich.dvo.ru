<x-app-layout>
    <x-slot:title>
        Список патентов
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Список патентов</x-layout.breadcrumb>
        <x-h1>Список патентов</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 w-full rounded object-cover"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>

    <section class="container px-4 md:px-0">
        <div class="mx-auto max-w-3xl">
            <x-badge class="mb-4">Поддерживаемые патенты организации</x-badge>
            <x-lead class="mb-8 text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</x-lead>

            <hr class="mb-8">

            <ul class="mb-8 flex flex-col">
                @for ($i = 0; $i < 6; $i++)
                    <li class="flex flex-col justify-between gap-4 py-6 md:flex-row md:items-center">
                        <div class="flex flex-col gap-y-2 md:gap-y-4">
                            <p class="text-lg font-bold text-[#606567] md:text-xl">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <span class="text-xs text-[#606567] md:text-sm">Дата / Подразделение / Тема</span>
                        </div>
                        <button class="self-start p-2 text-2xl md:self-auto">+</button>
                    </li>
                    <hr class="my-4">
                @endfor
            </ul>
            <div class="mb-8 flex justify-center md:justify-start">
                <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">
                    Показать ещё
                </x-link>
            </div>
        </div>

    </section>
</x-app-layout>
