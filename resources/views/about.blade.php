<x-app-layout>
    <x-slot:title>
        Об институте
    </x-slot>

    <section class="mb-16">
        <x-h1>Об институте</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</x-lead>
    </section>

    <hr />

    <section class="my-16">
        <ul class="flex justify-between gap-16">
            @foreach (['1', '2', '3'] as $info)
                <li class="space-y-5">
                    <x-icon.placeholder />
                    <x-h4>Lorem ipsum dolor sit amet {{ $info }}</x-h4>
                    <x-p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</x-p>
                </li>
            @endforeach
        </ul>
    </section>

    <hr />

    <section class='my-16 flex'>
        <div class="w-1/2 py-10 pr-28">
            <x-h2>Заголовок</x-h2>
            <x-p class="text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
                <br><br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </x-p>
        </div>
        <div class="w-1/2">
            <x-img class="rounded"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </section>

    <section class='mt-16 flex'>
        <div class="w-1/2 py-10 pr-28">
            <x-h2>Наши партнёры</x-h2>
            <x-p class="text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam,
            </x-p>
        </div>
        <ul class="grid w-1/2 grid-cols-3 gap-9">
            @foreach (['1', '2', '3', '4', '5', '6', '7', '8', '9'] as $partner)
                <li class="flex items-center justify-center rounded bg-neutral-lighter text-neutral-darker">
                    {{ $partner }}
                </li>
            @endforeach
        </ul>
    </section>
</x-app-layout>
