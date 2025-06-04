<x-app-layout container="">
    <x-slot:title>
        История
    </x-slot>

    <section class="mb-16">
        <x-h1>Наша история</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
    </section>

    <section class="mx-auto my-16 max-w-screen-md">
        <x-icon.dot-filled class="mx-auto" />
        <ul class="mb-16">
            @foreach (['1', '2', '3'] as $stage)
                <li @class([
                    'flex gap-20 items-center',
                    'flex-row-reverse' => $loop->index % 2 == 0,
                ])>
                    <x-img class="my-8 max-h-60 w-1/2 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="relative w-0 self-stretch border-x border-neutral-dark">
                        <x-icon.dot-empty class="absolute inset-1/2 origin-center -translate-x-1/2 -translate-y-1/2" />
                    </div>
                    <div class="my-8 w-1/2">
                        <x-h3>Этап {{ $stage }}</x-h3>
                        <x-p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </x-p>
                    </div>
                </li>
            @endforeach
        </ul>
        <x-badge>Об институте</x-badge>
        <x-p class="text-xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </x-p>
        <div>
            <x-link variant="primary" href="{{ route('about') }}">Подробнее</x-link>
        </div>
    </section>

    <section class="bg-neutral-lighter py-48">
        <x-h2 class="text-center font-semibold">Наша команда – залог успеха</x-h2>
        <x-p class="mx-auto max-w-screen-sm text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
        </x-p>
        <div class="mt-10 flex justify-center">
            <x-button href="{{ route('staff') }}">Познакомиться</x-button>
        </div>
    </section>

    <section class="container mt-16 flex gap-14">
        <div class="w-5/12 py-4">
            <x-h2>Присоединяйся к нашей команде</x-h2>
            <x-p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </x-p>
            <div>
                <x-button href="{{ route('jobs') }}">Наши вакансии</x-button>
            </div>
        </div>
        <x-img class="w-7/12 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>
</x-app-layout>
