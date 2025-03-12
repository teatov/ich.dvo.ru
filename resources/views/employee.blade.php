<x-app-layout>
    <x-slot:title>
        Сотрудник
    </x-slot>

    <section class="container px-4 md:px-0">
        <!-- Заголовок и хлебные крошки -->
        <div class="mb-8">
            <x-layout.breadcrumb>Команда</x-layout.breadcrumb>
            <x-h1>Имя Фамилия</x-h1>
        </div>

        <!-- Основной контент -->
        <div class="flex flex-col items-center gap-8 lg:flex-row lg:justify-center lg:gap-24">
            <!-- Блок с изображением -->
            <div class="w-full max-w-[390px] flex-1">
                <x-img class="max-h-[500px] w-full rounded object-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxXc6Ayv4OqOOB60OVdL3LGlSTPv2SoZx8XA&s"></x-img>
            </div>

            <!-- Блок с текстом -->
            <div class="w-full max-w-[612px]">
                <x-p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</x-p>
                <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</x-p>
            </div>
        </div>
    </section>
</x-app-layout>
