<x-app-layout>
    <x-slot:title>
        История
    </x-slot>

    <section class="mb-28">
        <x-layout.breadcrumb>История</x-layout.breadcrumb>
        <x-h1>Наша история</x-h1>
        <x-lead class='mb-0'>Lorem ipsum dolor sit amet, consectetur adipiscing elit</x-lead>
    </section>

    <section class="relative mb-16 flex flex-col items-center text-neutral-darker">
        <!-- Вертикальная линия -->
        <div class="relative w-full pb-16">
            <div
                class="absolute -top-3 left-1/2 z-10 -mt-12 h-7 w-7 -translate-x-1/2 transform rounded-full border-[10px] border-primary bg-[#fff]">
            </div>
            <div style="height: calc(100% + 56px)"
                class="absolute left-1/2 -mt-14 -translate-x-1/2 transform border-l-2 border-[#666666]"></div>

            <!-- Этапы -->
            <div class="flex flex-col space-y-16">
                <!-- Первый этап -->

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Второй этап -->

                <div class="mx-auto flex max-h-72 max-w-[820px] items-center">
                    <div class="w-1/2 pr-20">
                        <div class="mx-auto max-w-[350px]">
                            <h3 class="mb-6 text-2xl font-semibold text-[#000]">№ Этап</h3>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 relative z-10 h-4 w-4 content-center rounded-full border border-[#40ADFF] bg-[#fff]">
                        <div class="mx-auto h-1 w-1 rounded-full bg-primary"></div>
                    </div>
                    <div class="w-1/2 pl-24">
                        <x-img class="max-h-full max-w-80 rounded"
                            src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[820px] pt-16 text-left">
            <div class="mb-6 inline-block rounded-[5px] bg-[#F5F5F5] p-[10px] text-[10px] font-semibold uppercase">Об
                институте</div>
            <p class="mb-8 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. </p>
            <x-link href="{{ route('about') }}" variant="primary" class="text-sm font-semibold">Подробнее</x-link>
        </div>
    </section>
    <section class="mb-16 bg-neutral-lighter py-[175px]">
        <div class="text-center">
            <h2 class="mb-4 text-5xl font-semibold">Наша команда – залог успеха</h2>
            <p class="mx-auto mb-10 max-w-[500px] text-[#606567]">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <x-button href="/">Познакомиться</x-button>
        </div>
    </section>
    <section class="flex items-center justify-between">
        <div class="w-2/5 max-w-[425px]">
            <div class="">
                <h2 class="mb-5 text-5xl font-bold leading-[58px]">Присоединяйся к нашей команде</h2>
                <p class="mb-8 text-lg leading-[25px] text-[#606567]">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
                <x-button href="/">Наши вакансии</x-button>
            </div>
        </div>
        <div class="w-3/5">
            <img class="float-end max-h-[424px] w-full rounded-[5px] object-cover"
                src="https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
    </section>
</x-app-layout>
