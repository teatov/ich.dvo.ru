<x-app-layout>
    <x-slot:title>
        Категория
    </x-slot>

    <section class="px-4 md:px-0">
        <div class="mx-auto max-w-7xl"> <!-- Добавлен контейнер с максимальной шириной -->
            <x-layout.breadcrumb>Категория</x-layout.breadcrumb>
            <x-h1 class="mb-4 text-3xl sm:text-4xl md:mb-8 md:text-5xl">Категория</x-h1>
            <hr class="mb-6 md:mb-8">

            <!-- Фильтр -->
            <div class="mb-8 mt-4 flex justify-end">
                <div class="relative w-full md:w-64">
                    <select
                        class="appearance-none bg-white hover:border-neutral-dark w-full rounded border py-2 pl-4 pr-10 text-sm transition-all md:text-base">
                        <option>Выбрать год</option>
                        <option value="2024">2025</option>
                        <option value="2023">2024</option>
                        <option value="2022">2023</option>
                        <option value="2021">2022</option>
                        <option value="2020">2021</option>
                        <option value="2021">2020</option>
                        <option value="2020">2019</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg width="14" height="7" viewBox="0 0 14 7" fill="none"
                            class="transform transition-transform">
                            <path d="M12.6567 0.5L6.99988 6.15685L1.34303 0.5" stroke="#666666" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Сетка карточек -->
            <ul class="mb-10 grid grid-cols-1 gap-5 sm:gap-6 md:grid-cols-2 lg:grid-cols-3 xl:gap-7">
                @for ($i = 0; $i < 6; $i++)
                    <li class="flex flex-col rounded-[5px] border border-neutral transition-all hover:shadow-lg">
                        <div class="p-4 md:p-5">
                            <x-img class="mb-4 h-48 w-full rounded object-cover md:h-56"
                                src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                            <div class="ml-2 md:ml-3">
                                <div class="mb-2 md:mb-3">
                                    <span
                                        class="inline-block rounded bg-neutral-lighter px-2.5 py-1.5 text-xs font-semibold uppercase tracking-wide text-neutral-darker md:px-3 md:py-2">
                                        Категория
                                    </span>
                                </div>
                                <x-h4 class="mb-4 text-lg leading-tight md:mb-5 md:text-xl">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </x-h4>
                                <x-p class="mb-4 text-sm text-[#666] md:mb-6 md:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </x-p>
                                <x-link href="{{ route('category') }}"
                                    class="text-sm font-medium text-[#242627] underline-offset-4 hover:underline md:text-base">
                                    Подробнее
                                </x-link>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>

            <!-- Кнопка "Показать ещё" -->
            <div class="flex justify-center py-6 md:py-8">
                <x-link href="{{ route('about') }}" variant="primary"
                    class="px-8 py-3 text-sm font-semibold md:px-10 md:py-4 md:text-base">
                    Показать ещё
                </x-link>
            </div>
        </div>
    </section>
</x-app-layout>
