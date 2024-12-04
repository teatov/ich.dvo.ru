<x-app-layout>
    <x-slot:title>
        История
    </x-slot>

    <section class="mb-28">
        <x-layout.breadcrumb>История</x-layout.breadcrumb>
        <x-h1>Наша история</x-h1>
        <x-lead class='mb-0'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
    </section>

    <section class="relative flex flex-col items-center text-neutral-darker mb-16">
        <!-- Вертикальная линия -->
        <div class="relative w-full pb-16">
            <div class="-mt-12 bg-[#fff] absolute left-1/2 transform -translate-x-1/2 -top-3 w-7 h-7 rounded-full border-[10px] border-primary z-10"></div>
            <div style="height: calc(100% + 56px)" class="-mt-14 absolute left-1/2 transform -translate-x-1/2 border-l-2 border-[#666666]"></div>

            <!-- Этапы -->
            <div class="flex flex-col space-y-16">
                <!-- Первый этап -->

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2  pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2  pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="flex items-center max-w-[820px] mx-auto max-h-72">
                    <div class="w-1/2  pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="text-2xl font-semibold mb-6 text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="bg-[#fff] relative w-4 h-4 bg-blue-500 rounded-full border border-[#40ADFF] z-10 content-center">
                        <div class="bg-primary w-1 h-1 mx-auto rounded-full"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                        src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[820px] pt-16 text-left">
            <div class="bg-[#F5F5F5] font-semibold text-[10px] p-[10px] rounded-[5px] inline-block mb-6 uppercase">Об институте</div>
            <p class="mb-8 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Подробнее</x-link>
        </div>
    </section>
    <section class="bg-neutral-lighter py-[175px] mb-16">
        <div class="text-center">
            <h2 class="text-5xl font-semibold mb-4">Наша команда – залог успеха</h2>
            <p class="text-[#606567] max-w-[500px] mx-auto mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <x-button href="/">Познакомиться</x-button>
        </div>
    </section>
    <section class="flex items-center justify-between">
        <div class="w-2/5 max-w-[425px]">
            <div class="">
                <h2 class="text-5xl leading-[58px] font-bold mb-5">Присоединяйся к нашей команде</h2>
                <p class="mb-8 text-lg leading-[25px] text-[#606567]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    <x-button href="/">Наши вакансии</x-button>
            </div>
        </div>
        <div class="w-3/5">
            <img class="max-h-[424px] w-full float-end rounded-[5px] object-cover" src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
    </section>
</x-app-layout>
