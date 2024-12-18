<x-app-layout>
    <x-slot:title>
        Тематики
    </x-slot>
    <section class="mb-16">
        <x-layout.breadcrumb>Тематики</x-layout.breadcrumb>
        <x-h1>Тематики</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=207
            0&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                 dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                 ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>
    <section class="pt-14 bg-neutral-lighter pb-11 my-16">
        <h2 class="text-5xl font-semibold mb-8">Тематики 2025</h2>
        <ul class="flex justify-between">
            @foreach (['1', '2', '3', '4'] as $info)
            <div class="bg-background pb-5 rounded-[5px]">
                <li class=" w-[295px] px-9 pt-9">
                    <x-h4>Lorem ipsum dolor sit amet</x-h4>
                    <x-p class="text-base mb-12 mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-p>
                </li>
                <hr>
                <x-link href="#!" class="block pl-9 mt-4">Подробнее</x-link>
            </div>
            @endforeach
        </ul>
    </section>
    <section class="bg-neutral-lighter pb-16 pt-8 px-16 mb-16">
        <ul class="flex flex-col">
            @foreach (['2025', '2024', '2023', '2022', '2021', '2020', '2019'] as $info)
                <li class="flex justify-between pt-8 pb-6">
                    <x-h4 class="my-0 py-0 sm:text-3xl">{{$info}}</x-h4>
                    <button class="flex gap-x-2 items-center pb-5">
                        <div class="w-7 h-7 bg-[#606568] rounded-full flex justify-center items-center">
                            <svg class="w-[7px] h-[7px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 5" fill="none">
                                <path d="M2.66699 0.5V4.5" stroke="white"/>
                                <path d="M4.66699 2.5L0.666992 2.5" stroke="white"/>
                            </svg>
                        </div>
                    </button>
                </li>
                <hr>
            @endforeach
        </ul>
    </section>
    <section class="flex items-center justify-between">
        <div class="w-2/5 max-w-[425px]">
            <div class="">
                <h2 class="text-5xl leading-[58px] font-bold mb-5">О нашем институте</h2>
                <p class="mb-8 text-lg leading-[25px] text-[#606567]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    <x-button href="/">Подробнее</x-button>
            </div>
        </div>
        <div class="w-3/5">
            <img class="max-h-[424px] w-full float-end rounded-[5px] object-cover" src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
    </section>
</x-app-layout>
