<x-app-layout>
    <x-slot:title>
        Мероприятия
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Мероприятия</x-layout.breadcrumb>
        <x-h1>Мероприятия</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 w-full rounded object-cover"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>

    <section class="px-4 md:px-0">
        <div class="mb-10">
            <!-- Предстоящие мероприятия -->
            <div class="mb-16">
                <x-h2 class="mb-8 md:mb-10 text-2xl md:text-3xl">Предстоящие мероприятия</x-h2>
                <ul class="mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-7">
                    @for ($i = 0; $i < 3; $i++)
                        <li class="w-full rounded-[5px] border border-neutral p-4 md:p-5">
                            <x-img class="mb-4 md:mb-5 h-48 md:h-56 w-full rounded object-cover"
                                src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="ml-2 md:ml-4">
                                <div class="mb-2 md:mb-3">
                                    <span class="inline-block rounded bg-neutral-lighter px-2 md:px-3 py-1 md:py-2 text-xs font-semibold uppercase text-neutral-darker">
                                        Дата
                                    </span>
                                </div>
                                <x-h4 class="mb-4 md:mb-5 text-lg md:text-xl">Название мероприятия</x-h4>
                                <div class="mb-4 text-sm md:text-base text-neutral-darker">
                                    12:00 - 14:00<br>
                                    Местоположение
                                </div>
                                <x-p class="mb-4 md:mb-6 text-sm md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                                </x-p>
                                <button class="w-full md:w-auto rounded bg-[#4c9cd9]/20 px-4 md:px-5 py-2 md:py-3 text-sm font-semibold text-primary hover:bg-primary hover:text-background transition-colors">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>

            <!-- Прошедшие мероприятия -->
            <div class="mb-16">
                <x-h2 class="mb-8 md:mb-10 text-2xl md:text-3xl">Прошедшие мероприятия</x-h2>
                <ul class="mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-7">
                    @for ($i = 0; $i < 3; $i++)
                        <li class="w-full rounded-[5px] border border-neutral p-4 md:p-5">
                            <x-img class="mb-4 md:mb-5 h-48 md:h-56 w-full rounded object-cover"
                                src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="ml-2 md:ml-4">
                                <div class="mb-2 md:mb-3">
                                    <span class="inline-block rounded bg-neutral-lighter px-2 md:px-3 py-1 md:py-2 text-xs font-semibold uppercase text-neutral-darker">
                                        Дата
                                    </span>
                                </div>
                                <x-h4 class="mb-4 md:mb-5 text-lg md:text-xl">Название мероприятия</x-h4>
                                <div class="mb-4 text-sm md:text-base text-neutral-darker">
                                    12:00 - 14:00<br>
                                    Местоположение
                                </div>
                                <x-p class="mb-4 md:mb-6 text-sm md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                                </x-p>
                                <button class="w-full md:w-auto rounded bg-[#4c9cd9]/20 px-4 md:px-5 py-2 md:py-3 text-sm font-semibold text-primary hover:bg-primary hover:text-background transition-colors">
                                    Подробнее
                                </button>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>

        <div class="flex justify-center md:justify-start px-4 md:px-0">
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">
                Показать ещё
            </x-link>
        </div>
    </section>
</x-app-layout>
