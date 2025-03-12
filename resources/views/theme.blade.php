<x-app-layout container="">
    <x-slot:title>
        Тематика
    </x-slot>

    <section class="mb-16 bg-[#767676] pb-15 pt-32 text-[#fff]">
        <div class="ml-15 max-w-[800px]">
            <x-badge class="mb-5 bg-[#fff] bg-opacity-10 text-[#fff]">Тематики</x-badge>
            <x-h1 class="mb-16 mb-5 text-start font-semibold text-[#fff]">Название тематики</x-h1>
            <p class="mb-7 text-3xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore </p>
            <x-button class="bg-[#fff] text-[#00487F]">Связаться с нами</x-button>
        </div>
    </section>

    <section class="container mb-20 flex flex-col items-center justify-between gap-8 px-4 md:flex-row md:px-0">
        <div class="max-w-3xl">
            <x-h2 class="mb-5 max-w-md text-2xl font-semibold md:text-3xl">Lorem ipsum dolor sit amet, consectetur
                adipiscing
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
                            <div class="flex pl-0">
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
    <section class="container mb-16">
        <div class="flex items-center justify-between">
            <div class="max-w-[704px]">
                <x-img class="rounded"
                    src="https://images.wallpaperscraft.ru/image/single/atom_molekula_himiia_161897_1920x1080.jpg"></x-img>
            </div>
            <div class="max-w-lg">
                <x-h3 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-h3>
                <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </x-p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="flex items-center justify-between">
            <div class="max-w-[650px]">
                <x-h2>Основные разделы</x-h2>
                <x-p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim </x-p>
            </div>
            <div class="max-w-[500px]">
                <ul class="flex flex-col">
                    @for ($i = 0; $i < 5; $i++)
                        <li>
                            <hr>
                            <div class="flex gap-x-3 py-12">
                                <svg width="27" height="27" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12.5" cy="12.5" r="8" stroke="#40ADFF" stroke-width="8" />
                                </svg>
                                <div class="">
                                    <x-h5 class="mb-2">Название направления</x-h5>
                                    <x-p class="mt-0 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor incididunt ut labore et dolore </x-p>
                                </div>
                            </div>

                        </li>
                    @endfor
                    <hr>
                </ul>
            </div>
        </div>
    </section>

</x-app-layout>
