<header class="max-w-screen-1.5xl container mx-auto px-4 md:px-15">
    <div class="flex items-center justify-between border-b py-3">
        <x-ui.link href="/" class="block font-bold tracking-wider">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-ui.link>
        <nav>
            <ul class="flex gap-x-4">
                @foreach ($navLinks as $label => $navLink)
                    @if (is_array($navLink) && !array_is_list($navLink))
                        <x-ui.dropdown wrapperClasses="mt-6">
                            <x-slot:trigger>{{ $label }}</x-slot:trigger>
                            <x-slot:content class="flex flex-col divide-y">
                                @foreach ($navLink as $subLabel => $subNavLink)
                                    <li><x-ui.link href="{{ $subNavLink }}"
                                            class="mx-5 my-3 block">{{ $subLabel }}</x-ui.link></li>
                                @endforeach
                            </x-slot:content>
                        </x-ui.dropdown>
                    @elseif (is_array($navLink) && array_is_list($navLink))
                        <x-ui.dropdown
                            wrapperClasses="mt-6 left-0 right-0 max-w-screen-1.5xl container mx-auto px-4 lg:px-15">
                            <x-slot:trigger>{{ $label }}</x-slot:trigger>
                            <x-slot:content class="columns-4 space-y-6 px-24 py-16">
                                @foreach ($navLink[0] as $subLabel => $subNavLink)
                                    <li class="text-center"><x-ui.link
                                            href="{{ $subNavLink }}">{{ $subLabel }}</x-ui.link></li>
                                @endforeach
                            </x-slot:content>
                        </x-ui.dropdown>
                    @else
                        <li><x-ui.link href="{{ $navLink }}">{{ $label }}</x-ui.link></li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <x-ui.button href="/">Связаться с нами</x-ui.button>
    </div>
</header>
