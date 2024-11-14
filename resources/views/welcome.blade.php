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
</x-app-layout>
