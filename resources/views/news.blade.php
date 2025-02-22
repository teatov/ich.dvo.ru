<x-app-layout>
    <x-slot:title>
        Новости
    </x-slot>

    <section class="mb-16">
        <x-layout.breadcrumb>Новости</x-layout.breadcrumb>
        <x-h1>Новости</x-h1>
        <x-lead class="mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <div class="flex justify-between bg-neutral-lighter pt-12 pb-12 px-16 text-3xl items-center mb-10">
            <div class="max-w-[450px]">
              <x-h3 class="mb-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h3>
              <x-p class="text-base mb-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua.
              </x-p>
              <x-link class="text-[#232627] text-xs">Подробнее</x-link>
            </div>
            <div class="">
              <img
                class="rounded max-w-[420px] h-auto"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              />
            </div>
          </div>
          <ul class="flex flex-wrap justify-between gap-7 mb-10">
            @for ($i = 0; $i < 9; $i++)
                <li class="px-5 pt-5 pb-9 border border-neutral w-[407px] rounded-[5px]">
                    <x-img class="h-auto rounded mb-5"
                        src="https://images.unsplash.com/photo-1562411053-c9ac630a5934?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="ml-4">
                        <div class="flex justify-start mb-3">
                            <span class="font-semibold inline-block rounded bg-neutral-lighter px-3 py-2 text-xs uppercase text-neutral-darker">Категория</span>
                        </div>
                        <x-h4 class="sm:text-xl mb-5 max-w-[320px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</x-h4>
                        <x-p class="text-base mb-6 mt-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</x-p>
                        <x-link class="text-[#242627]">Подробнее</x-link>
                    </div>

                </li>
            @endfor
        </ul>
        <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Показать ещё</x-link>
    </section>
</x-app-layout>
