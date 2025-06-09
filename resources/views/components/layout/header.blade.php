<header class="sticky left-0 right-0 top-0 z-10 bg-background" x-data="{ headerOpen: false, contactFormOpen: false }">
    <div class="container">
        <div class="flex items-center justify-between border-b py-3">
            <x-link href="/" class="block text-sm font-bold tracking-wider">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-link>
            <nav class="hidden xl:block">
                <ul class="flex gap-x-4">
                    @foreach ($navLinks as $label => $navLink)
                        @if (is_array($navLink) && !array_is_list($navLink))
                            <x-dropdown>
                                <x-slot:trigger>{!! $label !!}</x-slot:trigger>
                                <x-slot:wrapper class="mt-4">
                                    <x-slot:content class="flex flex-col divide-y">
                                        @foreach ($navLink as $subLabel => $subNavLink)
                                            <li><x-link href="{{ $subNavLink }}"
                                                    class="mx-5 my-3 block">{{ $subLabel }}</x-link></li>
                                        @endforeach
                                    </x-slot:content>
                                </x-slot:wrapper>
                            </x-dropdown>
                        @elseif (is_array($navLink) && array_is_list($navLink))
                            <x-dropdown>
                                <x-slot:trigger>{{ $label }}</x-slot:trigger>
                                <x-slot:wrapper class="container left-0 right-0 mt-[1.4rem]">
                                    <x-slot:content class="columns-4 space-y-6 px-24 py-16">
                                        @foreach ($navLink[0] as $subLabel => $subNavLink)
                                            <li class="text-center"><x-link
                                                    href="{{ $subNavLink }}">{{ $subLabel }}</x-link></li>
                                        @endforeach
                                    </x-slot:content>
                                </x-slot:wrapper>
                            </x-dropdown>
                        @else
                            <li><x-link href="{{ $navLink }}">{{ $label }}</x-link></li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <x-button @click="contactFormOpen = true" class="hidden xl:block">Связаться с нами</x-button>
            <div class="flex items-center xl:hidden">
                <button @click="headerOpen = ! headerOpen" class="flex items-center justify-center p-3">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': headerOpen, 'inline-flex': !headerOpen }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !headerOpen, 'inline-flex': headerOpen }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Contact Form Modal (AlpineJS) -->
        <div x-show="contactFormOpen" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" @click="contactFormOpen = false"></div>

                <!-- This element is to trick the browser into centering the modal content. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <!-- Modal panel -->
                <div class="inline-block align-bottom bg-background rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full ">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-center justify-center">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 ">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Связаться с нами
                                </h3>
                                <div class="mt-2">
                                    <form id="contactForm">
                                        <div class="mb-4">
                                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Имя:</label>
                                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        </div>
                                        <div class="mb-6">
                                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Сообщение:</label>
                                            <textarea id="message" name="message" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                            Отправить
                        </button>
                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="contactFormOpen = false">
                            Отмена
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form Modal -->
    </div>
</header>
