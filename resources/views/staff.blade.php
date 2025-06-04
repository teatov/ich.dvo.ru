<x-app-layout>
    <x-slot:title>
        Сотрудники
    </x-slot>

    <section class="mb-16">
        <x-h1>Сотрудники</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>

    <section class="my-16">
        <x-h2>Главные контакты</x-h2>
        <ul class="grid grid-cols-4 gap-6">
            @foreach (['1', '2', '3', '4'] as $employee)
                <li class="space-y-3">
                    <x-img class="h-96 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div>
                        <x-h4 class="my-0">Сотрудник {{ $employee }}</x-h4>
                        <x-p class="my-0 text-sm">Должность</x-p>
                    </div>
                    <x-reuse.collapsible expandtext="Узнать больше">
                        <x-p class="my-0 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </x-p>
                    </x-reuse.collapsible>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="my-16">
        <x-h2>Все сотрудники</x-h2>
        <ul class="grid grid-cols-4 gap-6">
            @foreach (['1', '2', '3', '4', '5', '6', '7', '8'] as $employee)
                <li class="space-y-3 text-center">
                    <x-img class="h-96 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div>
                        <x-h4 class="my-0">Сотрудник {{ $employee }}</x-h4>
                        <x-p class="my-0 text-sm">Должность</x-p>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="mt-16 flex gap-14">
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
