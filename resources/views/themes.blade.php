<x-app-layout container="">
    <x-slot:title>
        Тематики
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Тематики</x-layout.breadcrumb>
        <x-h1>Тематики</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>

    <!-- Секция с тематиками 2025 -->
    <section class="my-16 bg-neutral-lighter pb-11 pt-14">
        <div class="container px-4 md:px-0">
            <h2 class="mb-8 text-3xl font-semibold md:text-5xl">Тематики 2025</h2>
            <ul class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                @foreach (['1', '2', '3', '4'] as $info)
                    <div class="rounded-[5px] bg-background pb-5">
                        <li class="w-full px-6 pt-6 md:px-9 md:pt-9">
                            <x-h4>Lorem ipsum dolor sit amet</x-h4>
                            <x-p class="mb-6 mt-4 text-base md:mb-12 md:mt-6">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor</x-p>
                        </li>
                        <hr>
                        <x-link href="{{ route('theme') }}" class="mt-4 block pl-6 md:pl-9">Подробнее</x-link>
                    </div>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Секция с годами -->
    <section class="container mb-16 bg-neutral-lighter px-4 pb-16 pt-8 md:px-16">
        <ul class="flex flex-col">
            @foreach (['2025', '2024', '2023', '2022', '2021', '2020', '2019'] as $info)
                <li class="flex justify-between pb-6 pt-8">
                    <x-h4 class="my-0 py-0 text-2xl sm:text-3xl">{{ $info }}</x-h4>
                    <button class="flex items-center gap-x-2 pb-5">
                        <div class="flex h-7 w-7 items-center justify-center rounded-full bg-[#606568]">
                            <svg class="h-[7px] w-[7px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 5"
                                fill="none">
                                <path d="M2.66699 0.5V4.5" stroke="white" />
                                <path d="M4.66699 2.5L0.666992 2.5" stroke="white" />
                            </svg>
                        </div>
                    </button>
                </li>
                <hr>
            @endforeach
        </ul>
    </section>

    <!-- Секция с информацией о институте -->
    <section class="container flex flex-col items-center justify-between px-4 md:flex-row md:px-0">
        <div class="mb-8 w-full max-w-[425px] md:mb-0 md:w-2/5">
            <h2 class="mb-5 text-3xl font-bold leading-[1.2] md:text-5xl md:leading-[58px]">О нашем институте</h2>
            <p class="mb-8 text-base leading-[25px] text-[#606567] md:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
                <br><br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident
            </p>
            <x-button href="/">Подробнее</x-button>
        </div>
        <div class="w-full md:w-3/5">
            <img class="max-h-[300px] w-full rounded-[5px] object-cover md:max-h-[424px]"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
    </section>
</x-app-layout>
