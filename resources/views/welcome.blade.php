<x-app-layout>
    <x-slot:title>
        Институт химии ДВО РАН
    </x-slot>
    <section>
        <div class="mb-16">
            <div class='bg-neutral-lighter mt-5 flex justify-start flex-col px-16 pb-8 pt-12'>
                <div class="">
                    <span class="mb-4 text-7xl text-center font-semibold ">Lorem ipsum<br>dolor sit amet,<br>consectetur</span>
                </div>
                <div class="mt-4 col font-normal text-3xl">
                    <p class="text-neutral-light">Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit, sed do</p>
                </div>
                <div class="mt-6">
                    <x-ui.button>Подробнее</x-ui.button>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <ul class="flex gap-x-4" >
                    <li class="active w-2 h-2 rounded bg-foreground"></li>
                    <li class="w-2 h-2 rounded bg-neutral"></li>
                    <li class="w-2 h-2 rounded bg-neutral"></li>
                    <li class="w-2 h-2 rounded bg-neutral"></li>
                </ul>
            </div>
        </div>
        <div class="mb-16 mx-auto my-0 max-w-screen-md">
            <x-ui.minibreadcrumb class=''>Об институте</x-ui.minibreadcrumb>
            <div class="text-neutral-light mb-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="">
                <x-ui.showMore>Подробнее</x-ui.showMore>
            </div>
        </div>
    </section>
    <section class="pb-10">
        <div class="pb-8 text-5xl pt-14">
            <h2 class="font-semibold">Тематики института 2023</h2>
        </div>
        <ul class="flex justify-between mt-8">
            <li class="max-w-72	bg-neutral-lighter rounded pl-9 pt-9 pb-5 pr-6">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-ui.h3>Lorem ipsum dolor sit amet</x-ui.h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{route('themes')}}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72	bg-neutral-lighter rounded pl-9 pt-9 pb-5 pr-6">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-ui.h3>Lorem ipsum dolor sit amet</x-ui.h3>
                    <p class="pb-16 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{route('themes')}}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72	bg-neutral-lighter rounded pl-9 pt-9 pb-5 pr-6">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-ui.h3>Lorem ipsum dolor sit amet</x-ui.h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{route('themes')}}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
            <li class="max-w-72	bg-neutral-lighter rounded pl-9 pt-9 pb-5 pr-6">
                <a href="" class="">
                    <img src="" alt="" class="">
                    <x-ui.h3>Lorem ipsum dolor sit amet</x-ui.h3>
                    <p class="pb-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    {{-- <div class="border-b-2 border-neutral"></div> --}}
                    <a href="{{route('themes')}}" class="text-xs font-semibold text-primary-detailed">
                        Подробнее
                    </a>
                </a>
            </li>
        </ul>
        <div class="flex justify-center mt-8">
            <x-ui.button>Все тематики</x-ui.button>
        </div>
    </section>
    <section class="pt-16 pb-20">
        <div class="pb-10 flex justify-start">
            <x-ui.h1>
                Направления работы института
            </x-ui.h1>
        </div>
        <div class="pb-10">
            <ul class="flex justify-between flex-wrap gap-y-10 pb-10">
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
                <li class="max-w-72">
                    <img src="" alt="" class="">
                    <x-ui.h3 class="pb-5">Название Направления</x-ui.h3>
                    <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="" class="">Подробнее</a>
                </li>
            </ul>
            <x-ui.showmore>Показать еще</x-ui.showmore>
        </div>
    </section>
    <section class="bg-neutral-lighter pt-20 pl-20 pb-75px flex justify-between mb-20">
        <div class="w-434px">
            <h3 class="font-semibold text-3xl pb-5">В институте можно оставить заявку на аренду оборудования</h3>
            <p class="pb-7 text-neutral-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="text-primary-detailed font-semibold text-xs">Подробнее</button>
        </div>
        <div class="bg-neutral-form w-650px h-72 mr-14 align-items-center rounded-lg text-center content-center">
            <div class="">Image</div>
        </div>
    </section>
    <section class="mb-16">
        <x-ui.minibreadcrumb>Новости</x-ui.minibreadcrumb>
        <h2 class="font-bold text-5xl">Наши новости</h2>
        <div class="mt-8">
            <ul class="flex justify-between">
                <li class="w-96 px-5 pt-5 border-solid border-2 border-neutral rounded-lg pb-10">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                    </a>
                    <x-ui.minibreadcrumb>Категория</x-ui.minibreadcrumb>
                    <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h3>
                    <p class="pt-6 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="" class="">Подробнее</a>
                    
                </li>
                <li class="w-96 px-5 pt-5 border-solid border-2 border-neutral rounded-lg pb-10">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                        <x-ui.minibreadcrumb>Категория</x-ui.minibreadcrumb>
                        <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h3>
                        <p class="pt-6 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="pt-6">Подробнее</a>
                    </a>
                </li>
                <li class="w-96 px-5 pt-5 border-solid border-2 border-neutral rounded-lg pb-10">
                    <a href="" class="">
                        <img src="" alt="image" class="mb-5">
                        <x-ui.minibreadcrumb>Категория</x-ui.minibreadcrumb>
                        <h3 class="text-xl font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h3>
                        <p class="pt-6 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="" class="mt-6">Подробнее</a>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class='bg-neutral-lighter text-center content-center py-52 mb-6'>
        <span>Форма обратной связи</span>
    </section>
</x-app-layout>

