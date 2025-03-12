<x-app-layout container="">
    <x-slot:title>
        ДВЦСИ
    </x-slot:dvcsi>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Организация</x-layout.breadcrumb>
        <x-h1>ДВЦСИ</x-h1>
        <x-lead class="max-w-4xl">Центр коллективного пользования дальневосточный центр структурных исследований</x-lead>
        <x-img class="mb-16 max-h-80 w-full rounded object-cover"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <div class="mx-auto max-w-4xl">
            <x-badge class="mb-4">Об организации</x-badge>
            <x-lead class="mb-8 max-w-4xl text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</x-lead>
        </div>
    </section>
    <section class="container mb-16 flex flex-col justify-between md:flex-row">
        <div class="max-h-[589px] max-w-2xl mb-8 md:mb-0">
            <x-img class="max-h-[587px] w-full rounded object-cover"
                src="https://img.freepik.com/premium-vector/chemistry-square-background-with-blue-chemical-outline-icons_104589-194.jpg?w=900"></x-img>
        </div>
        <div class="max-w-[490px]">
            <x-h2 class="mb-10 font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </x-h2>
            <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</x-p>
            <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</x-p>
        </div>
    </section>
    <section class="container mb-16">
        <x-h2 class="mb-8">Заголовок</x-h2>
        <div class="flex flex-col gap-8 md:flex-row md:justify-between">
            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. </x-p>
            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. </x-p>
        </div>
    </section>
    <section class="container mb-16">
        <x-h2 class="mb-8">Главные контакты</x-h2>
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
    <section class="container mb-16">
        <x-h2 class="mb-8">Заголовок</x-h2>
        <div class="">
            <ul class="grid grid-cols-1 gap-y-8 md:grid-cols-2">
                @foreach ([1, 2, 3, 4, 5, 6] as $index)
                    <li class="flex items-center gap-x-3"> <svg class="h-4 w-4 flex-shrink-0" viewBox="0 0 25 25"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.625" cy="12.125" r="12" fill="#40ADFF" />
                        </svg>
                        <p class="text-xl text-neutral-darker">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="container mb-16 flex flex-col justify-between md:flex-row">
        <div class="max-w-[490px] mb-8 md:mb-0">
            <x-h2 class="mb-10 font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </x-h2>
            <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</x-p>
            <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</x-p>
        </div>
        <div class="max-h-[589px] max-w-2xl">
            <x-img class="max-h-[587px] w-full rounded object-cover"
                src="https://img.freepik.com/premium-vector/chemistry-square-background-with-blue-chemical-outline-icons_104589-194.jpg?w=900"></x-img>
        </div>
    </section>
    <section class="bg-primary/20">
        <div class="container px-4 py-20 text-center text-neutral-darker md:px-0">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
