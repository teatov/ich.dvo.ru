<x-app-layout container="">
    <x-slot:title>
        Контакты
    </x-slot>

    <section class="container mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Контакты</x-layout.breadcrumb>
        <x-h1>Контакты</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 w-full rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>

    <section class="container mb-24 px-4 md:px-0">
        <x-h2 class="mb-5 text-2xl md:text-3xl">Наши подразделения</x-h2>
        <div class="mb-16 md:mb-28 flex flex-col md:flex-row gap-8 md:gap-16">
            <div class="max-w-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </div>
            <div class="max-w-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 md:gap-20">
            @for ($i = 0; $i < 3; $i++)
                <div class="{{ $i < 2 ? 'md:pr-16' : '' }} relative pb-8 md:pb-0">
                    <h5 class="mb-4 md:mb-5 text-2xl md:text-3xl font-bold">Подразделение</h5>
                    <h6 class="mb-2 text-xl font-bold">Контакты</h6>
                    <address class="flex flex-col gap-2">
                        <a href='' class="text-sm md:text-base">Адрес</a>
                        <a href="" class="text-sm md:text-base">Телефон</a>
                        <a href="" class="text-sm md:text-base">Email</a>
                    </address>
                    @if ($i < 2)
                        <div class="absolute bottom-0 left-0 right-0 h-px md:h-52 md:border-r border-neutral"></div>
                    @endif
                </div>
            @endfor
        </div>
    </section>

    <section class="bg-primary/20">
        <div class="container py-16 md:py-20 text-center text-neutral-darker px-4 md:px-0">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
