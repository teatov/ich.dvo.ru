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
        <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>

    <!-- Секция с главными контактами -->
    <section class="mb-16 px-4 md:px-0">
        <h2 class="font-bold text-3xl md:text-5xl mb-5">Главные контакты</h2>
        <div class="overflow-x-auto">
            <ul class="flex flex-col md:flex-row gap-8 md:gap-4 lg:gap-8 xl:justify-between">
                @foreach ([1, 2, 3, 4] as $index)
                    <li class="flex flex-col max-w-[300px] w-full">
                        <div class="w-full">
                            <img class="h-[385px] w-full object-cover" src="https://avatars.mds.yandex.net/i?id=d9140878d603f5786dd4854cf1a15637-3028607-images-thumbs&n=13" alt="">
                        </div>
                        <h3 class="text-xl font-semibold leading-[25px] mt-3 mb-1">Имя Фамилия</h3>
                        <span class="text-[#606567] mb-6">Должность</span>
                        <button class="flex gap-x-2 items-center pb-5">
                            <div class="w-4 h-4 bg-[#606568] rounded-full flex justify-center items-center">
                                <svg class="w-[5px] h-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 5" fill="none">
                                    <path d="M2.66699 0.5V4.5" stroke="white"/>
                                    <path d="M4.66699 2.5L0.666992 2.5" stroke="white"/>
                                </svg>
                            </div>
                            <div class="uppercase font-bold text-[10px] leading-[12.5px]">
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
        <h2 class="font-bold text-3xl md:text-5xl mb-8">Все сотрудники</h2>
        <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $index)
                <li class="flex flex-col rounded-[5px]">
                    <img src="https://avatars.mds.yandex.net/i?id=d9140878d603f5786dd4854cf1a15637-3028607-images-thumbs&n=13" alt="" class="h-48 md:h-96 w-full object-cover mb-3">
                    <div class="flex flex-col gap-y-1 text-center">
                        <h3 class="text-lg md:text-xl font-semibold">Имя Фамилия</h3>
                        <span class="text-[#606568] text-sm">Должность</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <!-- Секция с призывом к действию -->
    <section class="flex flex-col md:flex-row items-center justify-between px-4 md:px-0">
        <div class="w-full md:w-2/5 max-w-[425px] mb-8 md:mb-0">
            <h2 class="text-3xl md:text-5xl leading-[1.2] md:leading-[58px] font-bold mb-5">Присоединяйся к нашей команде</h2>
            <p class="mb-8 text-base md:text-lg leading-[25px] text-[#606567]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br><br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
            <x-button href="/">Наши вакансии</x-button>
        </div>
        <div class="w-full md:w-3/5">
            <img class="h-[300px] md:h-[474px] w-full object-cover rounded-[5px]" src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
    </section>
</x-app-layout>
