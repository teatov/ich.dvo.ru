<x-app-layout>
    <x-slot:title>
        Сотрудники
    </x-slot>
    <section class="mb-16 px-4 md:px-0">
        <x-layout.breadcrumb>Дата</x-layout.breadcrumb>
        <x-h1>Название мероприятия</x-h1>
    </section>

    <section class="mb-64 flex flex-col gap-x-24 gap-y-8 md:flex-row" x-data="{ eventModalOpen: false }">
        <!-- Блок с изображением и информацией -->
        <div class="w-full max-w-full rounded-md bg-neutral-lighter md:w-[380px] md:max-w-[380px]">
            <div class="">
                <x-img class="mb-10 h-auto w-full rounded-md md:h-[360px]"
                    src="https://www.e-xecutive.ru/uploads/article/image/1995884/thumb_conference.jpg"></x-img>
            </div>

            <div class="pb-8 pl-8">
                <x-h4>Название мероприятия</x-h4>
                <x-p>Адрес мероприятия
                    <br>
                    8-800-123-45-45
                </x-p>
                <x-p>Lorem ipsum dolor sit amet</x-p>
                <!-- Кнопка для открытия модального окна -->
                <x-button @click="eventModalOpen = true">Зарегистрироваться</x-button>
            </div>
        </div>

        <!-- Блок с текстом и списком -->
        <div class="max-w-full md:max-w-2xl">
            <p class="mb-10 text-lg font-semibold md:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do
                eiusmod tempor incididunt
                ut labore et dolore magna aliqua</p>
            <x-p class="mb-5 text-[#666]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. </x-p>
            <x-p class="mb-10 text-[#666]">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                eu fugiat
                nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </x-p>

            <ul class="flex flex-col gap-y-4">
                @for ($i = 0; $i < 4; $i++)
                    <li class="flex items-center gap-x-3">
                        <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.625" cy="12.125" r="12" fill="#40ADFF" />
                        </svg>
                        <p class="text-base text-[#666666] md:text-xl">Lorem ipsum dolor sit amet, consectetur
                            adipiscing</p>
                    </li>
                @endfor
            </ul>
        </div>


        <div x-show="eventModalOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex min-h-screen items-end justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="bg-gray-500 fixed inset-0 bg-opacity-75 transition-opacity" aria-hidden="true"
                    @click="eventModalOpen = false"></div>

                <!-- This element is to trick the browser into centering the modal content. -->
                <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>

                <!-- Modal panel -->
                <div
                    class="inline-block transform overflow-hidden rounded-lg bg-background pb-16 text-left align-bottom shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-4xl sm:align-middle">
                    <div class="bg-white px-4 pb-4 pt-5 text-center sm:p-6 sm:pb-4">
                        <div class="mb-16 justify-center sm:flex sm:items-center">
                            <div class="mt-3 w-full max-w-2xl text-center sm:ml-4 sm:mt-0">
                                <x-layout.breadcrumb>Запись на мероприятие</x-layout.breadcrumb>
                                <x-h3 class="text-gray-900 text-lg font-medium leading-6 max-w-md mx-auto" id="modal-title">
                                    Запишитесь на мероприятия
                                    института ИX ДВО РАН
                                </x-h3>
                                <div class="mt-2 w-full">
                                    <form id="contactForm" class="space-y-6">
                                        <!-- 1 строка: Имя и Фамилия -->
                                        <div class="flex w-full gap-4">
                                            <div class="w-1/2"> <!-- Возвращаем фиксированную ширину -->
                                                <input type="text" id="firstName" name="firstName"
                                                    class="text-gray-700 focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight shadow focus:outline-none"
                                                    placeholder="Имя">
                                            </div>
                                            <div class="w-1/2"> <!-- Возвращаем фиксированную ширину -->
                                                <input type="text" id="lastName" name="lastName"
                                                    class="focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight text-[#666] shadow focus:outline-none"
                                                    placeholder="Фамилия">
                                            </div>
                                        </div>

                                        <!-- 2 строка: Номер телефона и Email -->
                                        <div class="flex w-full gap-4">
                                            <div class="w-1/2">
                                                <input type="tel" id="phone" name="phone"
                                                    class="focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight text-[#666] shadow focus:outline-none"
                                                    placeholder="Номер телефона">
                                            </div>
                                            <div class="w-1/2">
                                                <input type="email" id="email" name="email"
                                                    class="focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight text-[#666] shadow focus:outline-none"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <!-- 3 строка: Компания и Выпадающий список -->
                                        <div class="flex w-full gap-4">
                                            <div class="w-1/2">
                                                <input type="text" id="company" name="company"
                                                    class="focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight text-[#666] shadow focus:outline-none"
                                                    placeholder="Компания">
                                            </div>
                                            <div class="w-1/2">
                                                <select id="event" name="event"
                                                    class="focus:shadow-outline w-full appearance-none rounded border px-4 py-3 text-base leading-tight shadow focus:outline-none">
                                                    <option class="text-[#666]" value="">Выберите мероприятие
                                                    </option>
                                                    <option value="event1">1 мероприятие</option>
                                                    <option value="event2">2 мероприятие</option>
                                                    <option value="event3">3 мероприятие</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <x-button class="mx-auto w-full max-w-xs">Зарегистрироваться</x-button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
