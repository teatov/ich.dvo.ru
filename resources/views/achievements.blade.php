<x-app-layout>
    <x-slot:title>
        Достижения
    </x-slot>

    <div class="container px-4 md:px-0">
        <x-layout.breadcrumb>Достижения</x-layout.breadcrumb>
        <x-h1 class="mb-8">Достижения</x-h1>
    </div>

    <section class="container px-4 md:px-0">
        <ul class="mb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-7">
            @for ($i = 0; $i < 6; $i++)
                <li class="w-full rounded-[5px] border border-neutral p-4 md:p-5">
                    <x-img class="mb-4 md:mb-5 h-48 md:h-56 w-full rounded object-cover"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-2 md:ml-4">
                        <div class="mb-2 md:mb-3">
                            <span class="inline-block rounded bg-neutral-lighter px-2 md:px-3 py-1 md:py-2 text-xs font-semibold uppercase text-neutral-darker">
                                Категория
                            </span>
                        </div>
                        <x-h4 class="mb-4 md:mb-5 text-lg md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h4>
                        <x-p class="mb-4 md:mb-6 text-sm md:text-base">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </x-p>
                        <x-link href="{{ route('achievement') }}" class="text-[#242627] text-sm md:text-base">Подробнее</x-link>
                    </div>
                </li>
            @endfor
        </ul>

        <div class="flex justify-center md:justify-start">
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">
                Показать ещё
            </x-link>
        </div>
    </section>
</x-app-layout>
