<header class="sticky left-0 right-0 top-0 z-10 bg-background" x-data="{ headerOpen: false }">
    <div class="container">
        <div class="flex items-center justify-between border-b py-3">
            <x-link href="/" class="block text-sm font-bold tracking-wider">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-link>
            <nav class="hidden xl:block">
                <ul class="flex gap-x-4">
                    @foreach ($navLinks as $label => $navLink)
                        @if (is_array($navLink) && !array_is_list($navLink))
                            <x-dropdown>
                                <x-slot:trigger>{{ $label }}</x-slot:trigger>
                                <x-slot:wrapper class="mt-[1.4rem]">
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
            <x-button href="/" class="hidden xl:block">Связаться с нами</x-button>
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

        <nav x-show="headerOpen" x-collapse style="display: none;">
            <ul class="space-y-4 overflow-hidden border-b py-4">
                @foreach ($navLinks as $label => $navLink)
                    @if (is_array($navLink))
                        <x-collapsible>
                            <x-slot:trigger>{{ $label }}<x-icon.chevron /></x-slot:trigger>
                            <x-slot:content class="space-y-4 pl-4 pt-4">
                                @if (array_is_list($navLink))
                                    @foreach ($navLink[0] as $subLabel => $subNavLink)
                                        <li><x-link href="{{ $subNavLink }}">{{ $subLabel }}</x-link></li>
                                    @endforeach
                                @else
                                    @foreach ($navLink as $subLabel => $subNavLink)
                                        <li><x-link href="{{ $subNavLink }}">{{ $subLabel }}</x-link></li>
                                    @endforeach
                                @endif
                            </x-slot:content>
                        </x-collapsible>
                    @else
                        <li><x-link href="{{ $navLink }}">{{ $label }}</x-link></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</header>
