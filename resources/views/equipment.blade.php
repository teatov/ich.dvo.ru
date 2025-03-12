<x-app-layout container="">
    <x-slot:title>
        Оборудование
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Оборудование</x-layout.breadcrumb>
        <x-h1>Оборудование</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <div class="text-center">

            <x-badge>Профессиональное оборудование</x-badge>
            <x-lead class="max-w-[900px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</x-lead>
        </div>
    </section>

    <section class="container mb-16 bg-neutral-lighter px-4 pb-16 pt-8 md:px-16">
        <ul class="mb-8 flex flex-col">
            @for ($i = 0; $i < 7; $i++)
                <li class="flex justify-between pb-6 pt-8">
                    <x-h4 class="my-0 py-0 text-2xl sm:text-3xl">Lorem ipsum dolor sit amet</x-h4>
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
            @endfor
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
    </section>
    <section class="bg-primary/20">
        <div class="container px-4 py-16 text-center text-neutral-darker md:px-0 md:py-20">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
