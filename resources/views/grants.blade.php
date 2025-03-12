<x-app-layout>
    <x-slot:title>
        Гранты
    </x-slot>

    <section class="px-4 md:px-0">
        <x-layout.breadcrumb>Гранты</x-layout.breadcrumb>
        <x-h1 class="mb-8">Гранты</x-h1>
        <hr>
        <div class="flex flex-col md:flex-row items-center gap-2 justify-end mt-4 mb-8">
            <div class="relative inline-block text-[#666] w-full md:w-auto">
                <select class="appearance-none bg-white border rounded pr-24 py-2 pl-5 w-full md:w-auto">
                    <option>Выбрать год</option>
                    <option value="2024">2025</option>
                    <option value="2023">2024</option>
                    <option value="2022">2023</option>
                    <option value="2021">2022</option>
                    <option value="2020">2021</option>
                    <option value="2021">2020</option>
                    <option value="2020">2019</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6567 0.5L6.99988 6.15685L1.34303 0.5" stroke="#666666"/>
                    </svg>
                </div>
            </div>
            <div class="relative inline-block text-[#666] w-full md:w-auto">
                <select class="appearance-none bg-white border rounded pr-12 py-2 pl-5 w-full md:w-auto">
                    <option>Выбрать категорию</option>
                    <option value="technology">Технологии</option>
                    <option value="science">Наука</option>
                    <option value="art">Искусство</option>
                    <option value="business">Бизнес</option>
                    <option value="sport">Спорт</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                    <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6567 0.5L6.99988 6.15685L1.34303 0.5" stroke="#666666"/>
                    </svg>
                </div>
            </div>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mb-10">
            @for ($i = 0; $i < 9; $i++)
                <li class="px-5 pt-5 pb-9 border border-neutral rounded-[5px]">
                    <x-img class="h-auto rounded mb-5"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-4">
                        <div class="flex justify-start mb-3">
                            <span class="font-semibold inline-block rounded bg-neutral-lighter px-3 py-2 text-xs uppercase text-neutral-darker">Категория</span>
                        </div>
                        <x-h4 class="sm:text-xl mb-5 max-w-[320px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h4>
                        <x-p class="text-base mb-6 mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-p>
                        <x-link href="{{route('category')}}" class="text-[#242627] cursor-pointer">Подробнее</x-link>
                    </div>
                </li>
            @endfor
        </ul>
        <div class="flex justify-center md:justify-start">
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Показать ещё</x-link>
        </div>
    </section>
</x-app-layout>
