<x-app-layout>
    <x-slot:title>
        Диссертационный совет
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Диссертационный совет</x-layout.breadcrumb>
        <x-h1>Диссертационный совет</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
    </section>

    <section class="container mb-20 flex flex-col items-center justify-between gap-8 px-4 md:flex-row md:px-0">
        <div class="max-w-3xl">
            <x-h2 class="mb-5 text-2xl font-semibold md:text-3xl max-w-md">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit</x-h2>
            <x-p class="mb-8 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </x-p>
            <div class="">
                <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-10 md:pl-3">
                    @for ($i = 0; $i < 4; $i++)
                        <li>
                            <div class="flex pl-0 ">
                                <svg class="h-6 w-6 flex-shrink-0" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12.625" cy="12.125" r="12" fill="#40ADFF" />
                                </svg>
                                <div class="ml-4">
                                    <x-h4 class="text-lg md:text-xl">Lorem ipsum dolor sit </x-h4>
                                    <x-p class="text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim </x-p>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="w-full md:w-auto">
            <img class="h-auto w-full rounded md:max-w-[420px]"
                src="https://img.freepik.com/premium-vector/chemistry-blue-vertical-frame-chemical-vector-background_104589-192.jpg" />
        </div>
    </section>

    <section class="container px-4 md:px-0">
        <x-h2 class="mb-8 text-2xl md:text-3xl">Список работ</x-h2>
        <hr>
        <ul class="mb-8 flex flex-col">
            @for ($i = 0; $i < 6; $i++)
                <li class="flex flex-col items-center justify-between gap-4 py-6 md:flex-row md:gap-0">
                    <div class="flex max-w-2xl flex-col gap-y-2 md:gap-y-4">
                        <p class="text-lg font-bold text-[#606567] md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <span class="text-xs text-[#606567] md:text-sm">Дата / Подразделение / Тема</span>
                    </div>
                    <button class="p-2 text-2xl">+</button>
                </li>
                <hr>
            @endfor
        </ul>
        <div class="flex justify-center md:justify-start">
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">
                Показать ещё
            </x-link>
        </div>
    </section>
</x-app-layout>
