<x-app-layout>
    <x-slot:title>
        Новости
    </x-slot>

    <section class="mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Новости</x-layout.breadcrumb>
        <x-h1>Новости</x-h1>
        <x-lead class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>

        <!-- Главная новость -->
        <div class="flex flex-col md:flex-row justify-between bg-neutral-lighter pt-8 md:pt-12 pb-8 md:pb-12 px-4 md:px-16 items-center mb-10 gap-6">
            <div class="max-w-[450px] w-full">
                <x-h3 class="mb-4 md:mb-7 text-xl md:text-3xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h3>
                <x-p class="text-base mb-6 md:mb-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                </x-p>
                <x-link class="text-[#232627] text-xs">Подробнее</x-link>
            </div>
            <div class="w-full md:w-auto">
                <img
                    class="rounded max-w-full md:max-w-[420px] h-auto"
                    src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                />
            </div>
        </div>

        <!-- Сетка новостей -->
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-7 mb-10">
            @for ($i = 0; $i < 9; $i++)
                <li class="px-4 md:px-5 pt-4 md:pt-5 pb-6 md:pb-9 border border-neutral rounded-[5px]">
                    <x-img class="h-auto rounded mb-4 md:mb-5"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-2 md:ml-4">
                        <div class="flex justify-start mb-2 md:mb-3">
                            <span class="font-semibold inline-block rounded bg-neutral-lighter px-2 md:px-3 py-1 md:py-2 text-xs uppercase text-neutral-darker">Категория</span>
                        </div>
                        <x-h4 class="text-lg md:text-xl mb-4 md:mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h4>
                        <x-p class="text-sm md:text-base mb-4 md:mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-p>
                        <x-link class="text-[#242627] text-sm md:text-base">Подробнее</x-link>
                    </div>
                </li>
            @endfor
        </ul>

        <!-- Кнопка -->
        <div class="flex justify-center md:justify-start">
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Показать ещё</x-link>
        </div>
    </section>
</x-app-layout>
