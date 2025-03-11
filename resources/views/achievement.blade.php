<x-app-layout>
    <x-slot:title>
        Достижения
    </x-slot>

    <section class="mb-8 px-4 md:px-0">
        <div class="mx-auto max-w-4xl text-center">
            <x-layout.breadcrumb>Достижения</x-layout.breadcrumb>
            <h2 class="mb-8 text-3xl font-semibold sm:text-4xl md:text-5xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </h2>
            <span class="mb-8 flex justify-center text-lg text-[#606567] sm:text-xl">Дата</span>
            <div class="mb-8">
                <x-img src="https://multiurok.ru/img/265729/image_6034ce4112c63.jpg"
                    class="h-auto max-h-[300px] w-full object-cover"></x-img>
            </div>

            <x-p class="text-start text-sm sm:text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </x-p>

            <x-p class="text-start text-sm sm:text-base">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </x-p>

            <x-p class="text-start text-sm sm:text-base">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </x-p>

            <x-p class="text-start text-sm sm:text-base">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </x-p>

            <div class="mb-8">
                <x-img class="h-auto max-h-[460px] w-full object-cover"
                    src="https://thumbs.dreamstime.com/b/%D1%85%D0%B8%D0%BC%D0%B8%D1%8F-%D0%BD%D0%B0%D1%83%D0%BA%D0%B0-%D1%85%D0%B8%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5-%D1%8D-%D0%B5%D0%BC%D0%B5%D0%BD%D1%82%D1%8B-41128214.jpg?w=768">
                </x-img>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <x-h2 class="mb-8 text-2xl font-semibold sm:text-3xl">Заголовок второго уровня</x-h2>
        <x-p class="text-sm sm:text-base">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </x-p>
    </section>

    <section>
        <x-h2 class="mb-8 text-2xl font-semibold sm:text-3xl">Заголовок второго уровня</x-h2>
        <x-p class="text-sm sm:text-base">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </x-p>

        <x-p class="text-sm sm:text-base">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </x-p>
    </section>

    <hr class="my-8">

    <section class="mt-16">
        <div class="mb-4 flex items-center justify-start">
            <x-badge>Достижения</x-badge>
        </div>
        <x-h2 class="mb-8 text-2xl sm:text-5xl">Другие новости</x-h2>

        <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-7 lg:grid-cols-3">
            @for ($i = 0; $i < 3; $i++)
                <li class="w-full rounded-[5px] border border-neutral p-4 md:p-5">
                    <x-img class="mb-4 h-48 w-full rounded object-cover md:mb-5 md:h-56"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-2 md:ml-4">
                        <div class="mb-2 md:mb-3">
                            <span
                                class="inline-block rounded bg-neutral-lighter px-2 py-1 text-xs font-semibold uppercase text-neutral-darker md:px-3 md:py-2">
                                Категория
                            </span>
                        </div>
                        <x-h4 class="mb-4 text-lg md:mb-5 md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor</x-h4>
                        <x-p class="mb-4 text-sm md:mb-6 md:text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </x-p>
                        <x-link href="{{ route('achievement') }}"
                            class="text-sm text-[#242627] md:text-base">Подробнее</x-link>
                    </div>
                </li>
            @endfor
        </ul>
    </section>
</x-app-layout>
