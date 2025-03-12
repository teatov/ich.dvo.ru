<x-app-layout>
    <x-slot:title>
        Сотрудники
    </x-slot>

    <section class="mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Команда</x-layout.breadcrumb>
        <x-h1>Сотрудники</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>

    <!-- Секция с главными контактами -->
    <section class="mb-16 px-4 md:px-0">
        <h2 class="mb-5 text-3xl font-bold md:text-5xl">Главные контакты</h2>
        <div class="overflow-x-auto">
            <ul class="flex flex-col gap-8 md:flex-row md:gap-4 lg:gap-8 xl:justify-between">
                @foreach ([1, 2, 3, 4] as $index)
                    <li class="flex w-full max-w-[300px] flex-col">
                        <div class="w-full">
                            <img class="h-[385px] w-full object-cover"
                                src="https://avatars.mds.yandex.net/i?id=d9140878d603f5786dd4854cf1a15637-3028607-images-thumbs&n=13"
                                alt="">
                        </div>
                        <h3 class="mb-1 mt-3 text-xl font-semibold leading-[25px]">Имя Фамилия</h3>
                        <span class="mb-6 text-[#606567]">Должность</span>
                        <button class="flex items-center gap-x-2 pb-5">
                            <div class="flex h-4 w-4 items-center justify-center rounded-full bg-[#606568]">
                                <svg class="h-[5px] w-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 5"
                                    fill="none">
                                    <path d="M2.66699 0.5V4.5" stroke="white" />
                                    <path d="M4.66699 2.5L0.666992 2.5" stroke="white" />
                                </svg>
                            </div>
                            <div class="text-[10px] font-bold uppercase leading-[12.5px]">
                                Узнать больше
                            </div>
                        </button>
                        <hr>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Секция со всеми сотрудниками -->
    <section class="mb-16 px-4 md:px-0">
        <h2 class="mb-8 text-3xl font-bold md:text-5xl">Все сотрудники</h2>
        <ul class="grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-8 lg:grid-cols-4">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $index)
                <li class="flex flex-col rounded-[5px]">
                    <a href="{{route('employee')}}">
                        <img src="https://avatars.mds.yandex.net/i?id=d9140878d603f5786dd4854cf1a15637-3028607-images-thumbs&n=13"
                            alt="" class="mb-3 h-48 w-full object-cover md:h-96">
                        <div class="flex flex-col gap-y-1 text-center">
                            <h3 class="text-lg font-semibold md:text-xl">Имя Фамилия</h3>
                            <span class="text-sm text-[#606568]">Должность</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- Секция с призывом к действию -->
    <section class="flex flex-col items-center justify-between px-4 md:flex-row md:px-0">
        <div class="mb-8 w-full max-w-[425px] md:mb-0 md:w-2/5">
            <h2 class="mb-5 text-3xl font-bold leading-[1.2] md:text-5xl md:leading-[58px]">Присоединяйся к нашей
                команде</h2>
            <p class="mb-8 text-base leading-[25px] text-[#606567] md:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
                <br><br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident
            </p>
            <x-button href="/">Наши вакансии</x-button>
        </div>
        <div class="w-full md:w-3/5">
            <img class="h-[300px] w-full rounded-[5px] object-cover md:h-[474px]"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
    </section>
</x-app-layout>
