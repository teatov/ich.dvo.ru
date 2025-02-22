<x-app-layout>
    <x-slot:title>
        Мероприятия
    </x-slot>

    <section class="container mb-16">
        <x-layout.breadcrumb>Мероприятия</x-layout.breadcrumb>
        <x-h1>Мероприятия</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=207
            0&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>
    <section>
        <div class="mb-10">
            <div>
                <x-h2 class="mb-10">Предстоящие мероприятия</x-h2>
                <ul class="mb-10 flex flex-wrap justify-between gap-7">
                    @for ($i = 0; $i < 3; $i++)
                        <li class="w-[407px] rounded-[5px] border border-neutral px-5 pb-9 pt-5">
                            <x-img class="mb-5 h-auto rounded"
                                src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="ml-4">
                                <div class="mb-3 flex justify-start">
                                    <span
                                        class="inline-block rounded bg-neutral-lighter px-3 py-2 text-xs font-semibold uppercase text-neutral-darker">Дата</span>
                                </div>
                                <x-h4 class="mb-5 max-w-[320px] sm:text-xl">Название мероприятия</x-h4>
                                <div class="mb-4 text-neutral-darker">
                                    12:00 - 14:00
                                    <br>
                                    Местоположение
                                </div>
                                <x-p class="mb-6 mt-0 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco</x-p>
                                <button
                                    class="inline-block text-nowrap rounded bg-[#4c9cd9] bg-opacity-20 px-5 py-3 text-sm font-semibold text-primary transition-[0.2s] hover:bg-primary hover:text-background">Зарегистрироваться</button>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <x-h2 class="mb-10">Прошедшие мероприятия</x-h2>
                <ul class="mb-10 flex flex-wrap justify-between gap-7">
                    @for ($i = 0; $i < 3; $i++)
                        <li class="w-[407px] rounded-[5px] border border-neutral px-5 pb-9 pt-5">
                            <x-img class="mb-5 h-auto rounded"
                                src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="ml-4">
                                <div class="mb-3 flex justify-start">
                                    <span
                                        class="inline-block rounded bg-neutral-lighter px-3 py-2 text-xs font-semibold uppercase text-neutral-darker">Дата</span>
                                </div>
                                <x-h4 class="mb-5 max-w-[320px] sm:text-xl">Название мероприятия</x-h4>
                                <div class="mb-4 text-neutral-darker">
                                    12:00 - 14:00
                                    <br>
                                    Местоположение
                                </div>
                                <x-p class="mb-6 mt-0 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco</x-p>
                                <button
                                    class="inline-block text-nowrap rounded bg-[#4c9cd9] bg-opacity-20 px-5 py-3 text-sm font-semibold text-primary transition-[0.2s] hover:bg-primary hover:text-background">Подробнее</button>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Показать ещё</x-link>
    </section>
</x-app-layout>
