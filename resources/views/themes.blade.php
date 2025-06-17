<x-app-layout container="">
    <x-slot:title>
        Тематики
    </x-slot>

    <section class="container mb-16">
        <x-h1>Тематики</x-h1>
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
        <x-img class="mb-16 max-h-80 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <x-lead>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim </x-lead>
    </section>

    <section class="bg-neutral-lighter">
        <div class="container py-14">
            <x-h2>Тематики {{ date('Y') }}</x-h2>
            <ul class="my-8 grid grid-cols-1 gap-8 sm:grid-cols-2 xl:grid-cols-4">
                @foreach (['1', '2', '3', '4', '5', '6', '7', '8'] as $theme)
                    <li class="rounded bg-background">
                        <div class="space-y-5 border-b p-4 md:p-10">
                            <x-h4>Lorem ipsum dolor sit amet {{ $theme }}</x-h4>
                            <x-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor</x-p>
                        </div>
                        <div class="px-4 py-4 md:px-10">
                            <x-link href="/{{ $theme }}" class="text-xs font-semibold">Подробнее</x-link>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="container mt-16">


        <div x-data="{
            activeAccordion: '',
            setActiveAccordion(id) {
                this.activeAccordion = (this.activeAccordion == id) ? '' : id
            }
        }"
            class="relative mx-auto w-full divide-y overflow-hidden rounded-md bg-neutral-lighter px-16 py-6">
            @foreach (['2022', '2021', '2020', '2019', '2018'] as $year)
                <div x-data="{ id: $id('accordion') }" class="group cursor-pointer">
                    <button @click="setActiveAccordion(id)"
                        class="flex w-full select-none items-center justify-between py-7 text-3xl font-semibold">
                        <span>{{ $year }}</span>
                        <x-icon.accordion-big-expand class="inline" ::class="{ 'hidden': activeAccordion == id }" />
                        <x-icon.accordion-big-collapse class="inline" ::class="{ 'hidden': activeAccordion != id }" />
                    </button>
                    <div x-show="activeAccordion==id" x-collapse x-cloak>
                        <x-p class="pb-6 text-xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br><br>
                        </x-p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container mt-16 flex gap-14">
        <div class="w-5/12 py-4">
            <x-h2>О нашем институте</x-h2>
            <x-p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </x-p>
            <div>
                <x-button :href="route('about')">Подробнее</x-button>
            </div>
        </div>
        <x-img class="w-7/12 rounded"
            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
    </section>
</x-app-layout>
