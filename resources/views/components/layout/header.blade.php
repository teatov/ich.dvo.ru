<header class="max-w-screen-1.5xl container sticky left-0 right-0 top-0 mx-auto bg-background px-4 lg:px-15"
    x-data="{ headerOpen: false }">
    <div class="flex items-center justify-between border-b py-3">
        <x-link href="/" class="block text-sm font-bold tracking-wider">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-link>

        <nav class="hidden xl:block">
            <ul class="flex gap-x-4">
                @foreach ($navLinks as $label => $navLink)
                    @if (is_array($navLink) && !array_is_list($navLink))
                        <x-dropdown wrapperClasses="mt-6">
                            <x-slot:trigger>{{ $label }}</x-slot:trigger>
                            <x-slot:content class="flex flex-col divide-y">
                                @foreach ($navLink as $subLabel => $subNavLink)
                                    <li><x-link href="{{ $subNavLink }}"
                                            class="mx-5 my-3 block">{{ $subLabel }}</x-link></li>
                                @endforeach
                            </x-slot:content>
                        </x-dropdown>
                    @elseif (is_array($navLink) && array_is_list($navLink))
                        <x-dropdown
                            wrapperClasses="mt-6 left-0 right-0 max-w-screen-1.5xl container mx-auto px-4 lg:px-15">
                            <x-slot:trigger>{{ $label }}</x-slot:trigger>
                            <x-slot:content class="columns-4 space-y-6 px-24 py-16">
                                @foreach ($navLink[0] as $subLabel => $subNavLink)
                                    <li class="text-center"><x-link
                                            href="{{ $subNavLink }}">{{ $subLabel }}</x-link></li>
                                @endforeach
                            </x-slot:content>
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
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !headerOpen, 'inline-flex': headerOpen }" class="hidden"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <nav x-show="headerOpen" class="grid xl:hidden" style="display: none;"
        x-transition:enter="transition-[grid-template-rows] ease-out duration-200"
        x-transition:enter-start="grid-rows-[0fr]" x-transition:enter-end="grid-rows-[1fr]"
        x-transition:leave="transition-[grid-template-rows] ease-in duration-75"
        x-transition:leave-start="grid-rows-[1fr]" x-transition:leave-end="grid-rows-[0fr]">
        <ul class="space-y-4 overflow-hidden border-b py-4">
            @foreach ($navLinks as $label => $navLink)
                @if (is_array($navLink))
                    <x-collapsible>
                        <x-slot:trigger>{{ $label }}</x-slot:trigger>
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
</header>
