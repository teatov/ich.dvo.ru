<x-app-layout container="">
    <x-slot:title>
        Название направления
    </x-slot>

    <section
        class="bg-[url(https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] pb-14 pt-32 text-background">
        <div class="container space-y-8">
            <x-h1 class="text-left">Название направления</x-h1>
            <p class="max-w-screen-md text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
            </p>
            <x-button variant="secondary">Связаться с нами</x-button>
        </div>
    </section>

    <section class="container mt-16 flex gap-14">
        <div class="w-7/12 py-4">
            <x-h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-h3>
            <x-p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim
            </x-p>
            <ul class="grid grid-cols-2 gap-10">
                @foreach (['1', '2', '3', '4'] as $stage)
                    <li class="flex gap-2">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12.625" cy="12.125" r="11.5" fill="#40ADFF" />
                            </svg>

                        </div>
                        <div>
                            <x-h5>Lorem ipsum dolor sit</x-h5>
                            <x-p class="text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            </x-p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <x-img class="w-5/12 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>

    <section class="container mt-16 flex gap-14">
        <x-img class="w-7/12 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <div class="w-5/12 py-4">
            <x-h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-h3>
            <x-p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim
            </x-p>
        </div>
    </section>

    <section class="container mt-16 flex gap-14">
        <div class="flex w-7/12 flex-col justify-center py-4">
            <x-h2>Основные научные направления лаборатории</x-h2>
            <x-p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim
            </x-p>
        </div>
        <ul class="w-5/12 divide-y border-y">
            @foreach (['1', '2', '3', '4', '5'] as $course)
                <li class="flex gap-2 py-12">
                    <div>
                        <x-icon.dot-filled />
                    </div>
                    <div>
                        <x-h5>Название направления {{ $course }}</x-h5>
                        <x-p class="my-0 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                        </x-p>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
</x-app-layout>
