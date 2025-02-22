<x-app-layout container="">
    <x-slot:title>
        Вакансии
    </x-slot>

    <section class="mb-16 container">
        <x-layout.breadcrumb>Вакансии</x-layout.breadcrumb>
        <x-h1>Вакансии</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=207
            0&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
        <x-img class="max-h-[466px] max-w-[620px] rounded mx-auto"
        src="https://habrastorage.org/files/ce1/21f/a38/ce121fa38cbb44acb763f2620ef84573.jpg"/>
    </section>

    <section class="mb-16 container">
        <x-h2 class="">Заголовок</x-h2>
        <div class="flex justify-between">
            <div class="">
                <x-p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </x-p>
            </div>
            <div class="">
                <x-p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </x-p>
            </div>
        </div>
    </section>

    <section class="pt-12 pb-10 bg-neutral-lighter text-center">
        <div class="container">
            <x-h2 class="font-semibold mb-4">Вакансии</x-h2>
            <ul class="flex justify-between flex-wrap gap-8 mb-8">
                @for($i = 0; $i < 8; $i++)
                    <li class="bg-background py-16 px-9 text-2xl max-w-[295px] ">
                        <x-h4>Lorem ipsum dolor sit amet</x-h4>
                        <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </x-p>
                    </li>
                @endfor
            </ul>
            <x-button  href="{{route('about')}}" variant="primary">Посмотреть на hh</x-button>
        </div>
    </section>

    <section class="flex items-center justify-between container py-16">
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
    <section class="bg-primary/20">
        <div class="container py-20 text-center text-neutral-darker">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
