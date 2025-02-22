<x-app-layout>
    <x-slot:title>
        Достижения
    </x-slot>

    <x-layout.breadcrumb>Достижения</x-layout.breadcrumb>
    <x-h1 class="mb-8">Достижения</x-h1>
    <section>

        <ul class="mb-10 flex flex-wrap justify-between gap-7">
            @for ($i = 0; $i < 6; $i++)
                <li class="w-[407px] rounded-[5px] border border-neutral px-5 pb-9 pt-5">
                    <x-img class="mb-5 h-auto rounded"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-4">
                        <div class="mb-3 flex justify-start">
                            <span
                                class="inline-block rounded bg-neutral-lighter px-3 py-2 text-xs font-semibold uppercase text-neutral-darker">Категория</span>
                        </div>
                        <x-h4 class="mb-5 max-w-[320px] sm:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor</x-h4>
                        <x-p class="mb-6 mt-0 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-p>
                        <x-link class="text-[#242627]">Подробнее</x-link>
                    </div>

                </li>
            @endfor
        </ul>
        <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Показать ещё</x-link>
    </section>
</x-app-layout>
