<header class="max-w-screen-1.5xl container mx-auto px-15">
    <div class="flex items-center justify-between border-b py-3">
        <x-ui.link href="/" class="block font-bold tracking-wider">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-ui.link>
        <nav>
            <ul class="flex gap-x-4">
                @foreach ($navLinks as $label => $navLink)
                    @if (is_array($navLink))
                        <x-ui.dropdown wrapperClasses="mt-6" contentClasses="flex flex-col divide-y">
                            <x-slot name="trigger">{{ $label }}</x-slot>
                            <x-slot name="content">
                                @foreach ($navLink as $subLabel => $subNavLink)
                                    <li><x-ui.link href="{{ $subNavLink }}"
                                            class="block px-5 py-3">{{ $subLabel }}</x-ui.link></li>
                                @endforeach
                            </x-slot>
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
