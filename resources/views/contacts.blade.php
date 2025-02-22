<x-app-layout container="">
    <x-slot:title>
        Контакты
    </x-slot>
    <section class='container mb-16'>
        <x-layout.breadcrumb>Контакты</x-layout.breadcrumb>
        <x-h1>Контакты</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=207
        0&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>
    <section class="container mb-24">
        <x-h2 class="mb-5">Наши подразделения</x-h2>
        <div class="mb-28 flex gap-16">
            <div class="max-w-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</div>
            <div class="max-w-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</div>
        </div>
        <div class="flex gap-20">
            @for ($i = 0; $i < 3; $i++)
                <div class="{{ $i < 2 ? 'pr-16' : '' }} relative">
                    <h5 class="mb-5 text-3xl font-bold">Подразделение</h5>
                    <h6 class="mb-2 text-xl font-bold">Контакты</h6>
                    <address class="flex flex-col">
                        <a href=''>Адрес</a>
                        <a href="">Телефон</a>
                        <a href="">Email</a>
                    </address>
                    @if ($i < 2)
                        <div class="absolute bottom-auto right-0 top-0 h-52 border-r border-neutral"></div>
                    @endif
                </div>
            @endfor
        </div>
    </section>
    <section class="bg-primary/20">
        <div class="container py-20 text-center text-neutral-darker">
            Форма обратной связи
        </div>
    </section>
</x-app-layout>
