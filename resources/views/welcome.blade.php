<x-app-layout>
    <x-slot:title>
        Институт химии ДВО РАН
    </x-slot>
    <section>
        <div class="mb-16">
            <div class='mt-5 flex flex-col justify-start bg-neutral-lighter px-16 pb-8 pt-12'>
                <div class="">
                    <span class="mb-4 text-center text-7xl font-semibold">Lorem ipsum<br>dolor sit
                        amet,<br>consectetur</span>
                </div>
                <div class="col mt-4 text-3xl font-normal">
                    <p class="text-neutral-light">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do</p>
                </div>
                <div class="mt-6">
                    <x-button>Подробнее</x-button>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <ul class="flex gap-x-4">
                    <li class="active h-2 w-2 rounded bg-foreground"></li>
                    <li class="h-2 w-2 rounded bg-neutral"></li>
                    <li class="h-2 w-2 rounded bg-neutral"></li>
                    <li class="h-2 w-2 rounded bg-neutral"></li>
                </ul>
            </div>
        </div>
        <div class="mx-auto my-0 mb-16 max-w-screen-md">
            <x-minibreadcrumb class=''>Об институте</x-minibreadcrumb>
            <div class="mb-8 text-neutral-light">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. </p>
            </div>
            <div class="">
                <x-showMore>Подробнее</x-showMore>
            </div>
        </div>
    </section>
    <section class="pb-10">
        <div class="pb-8 pt-14 text-5xl">
            <h2 class="font-semibold">Тематики института 2023</h2>
        </div>
        <ul class="mt-8 flex justify-between">
            <li class="max-w-72 rounded bg-neutral-lighter pb-5 pl-9 pr-6 pt-9">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-h3>Lorem ipsum dolor sit amet</x-h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{ route('themes') }}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72 rounded bg-neutral-lighter pb-5 pl-9 pr-6 pt-9">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-h3>Lorem ipsum dolor sit amet</x-h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{ route('themes') }}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72 rounded bg-neutral-lighter pb-5 pl-9 pr-6 pt-9">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-h3>Lorem ipsum dolor sit amet</x-h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{ route('themes') }}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72 rounded bg-neutral-lighter pb-5 pl-9 pr-6 pt-9">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-h3>Lorem ipsum dolor sit amet</x-h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{ route('themes') }}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
        </ul>
        <div class="mt-8 flex justify-center">
            <x-button>Все тематики</x-button>
        </div>
    </section>
    <section class="pb-20 pt-16">
        <div class="flex justify-start pb-10">
            <x-h1>
                Направления работы института
            </x-h1>
        </div>
        <div class="pb-10">
            <ul class="flex flex-wrap justify-between gap-y-10 pb-10">
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-h3 class="pb-5">Название Направления</x-h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
            </ul>
            <x-showmore>Показать еще</x-showmore>
        </div>
    </section>
    <section class="mb-20 flex justify-between bg-neutral-lighter pb-75px pl-20 pt-20">
        <div class="w-434px">
            <h3 class="pb-5 text-3xl font-semibold">В институте можно оставить заявку на аренду оборудования</h3>
            <p class="pb-7 text-neutral-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="text-xs font-semibold text-primary-detailed">Подробнее</button>
        </div>
        <div class="align-items-center mr-14 h-72 w-650px content-center rounded-lg bg-neutral-form text-center">
            <div class="">Image</div>
        </div>
    </section>
    <section class="mb-16">
        <x-minibreadcrumb>Новости</x-minibreadcrumb>
        <h2 class="text-5xl font-bold">Наши новости</h2>
        <div class="mt-8">
            <ul class="flex justify-between">
                <li class="w-96 rounded-lg border-2 border-solid border-neutral px-5 pb-10 pt-5">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                    </a>
                    <x-minibreadcrumb>Категория</x-minibreadcrumb>
                    <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor</h3>
                    <p class="mb-6 pt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <a href="" class="">Подробнее</a>

                </li>
                <li class="w-96 rounded-lg border-2 border-solid border-neutral px-5 pb-10 pt-5">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                        <x-minibreadcrumb>Категория</x-minibreadcrumb>
                        <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor</h3>
                        <p class="mb-6 pt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="pt-6">Подробнее</a>
                    </a>
                </li>
                <li class="w-96 rounded-lg border-2 border-solid border-neutral px-5 pb-10 pt-5">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                        <x-minibreadcrumb>Категория</x-minibreadcrumb>
                        <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor</h3>
                        <p class="mb-6 pt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="mt-6">Подробнее</a>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class='mb-6 content-center bg-neutral-lighter py-52 text-center'>
        <span>Форма обратной связи</span>
    </section>
</x-app-layout>
