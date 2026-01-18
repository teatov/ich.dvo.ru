<header class="sticky left-0 right-0 top-0 z-10 bg-background" x-data="{ headerOpen: false, contactFormOpen: false }">
    <div class="container">
        <div class="flex items-center justify-between border-b py-3 gap-4">
            <x-link href="/" class="block text-sm font-bold tracking-wider whitespace-nowrap">ИНСТИТУТ ХИМИИ<br />ДВО РАН</x-link>
            <nav class="hidden xl:block">
                <ul class="flex gap-x-4 text-sm">
                    @foreach ($navLinks as $label => $navLink)
                        @if (is_array($navLink) && !array_is_list($navLink))
                            <x-dropdown>
                                <x-slot:trigger class="flex-col">{!! $label !!}</x-slot:trigger>
                                <x-slot:wrapper class="mt-4">
                                    <x-slot:content class="flex flex-col divide-y">
                                        @foreach ($navLink as $subLabel => $subNavLink)
                                            <li><x-link :href="$subNavLink"
                                                    class="mx-5 my-3 block">{{ $subLabel }}</x-link></li>
                                        @endforeach
                                    </x-slot:content>
                                </x-slot:wrapper>
                            </x-dropdown>
                        @elseif (is_array($navLink) && array_is_list($navLink))
                            <x-dropdown>
                                <x-slot:trigger class="flex-col">{{ $label }}</x-slot:trigger>
                                <x-slot:wrapper class="container left-0 right-0 mt-[1.4rem]">
                                    <x-slot:content class="columns-4 space-y-6 px-24 py-16">
                                        @foreach ($navLink[0] as $subLabel => $subNavLink)
                                            <li class="text-center"><x-link
                                                    :href="$subNavLink">{{ $subLabel }}</x-link></li>
                                        @endforeach
                                    </x-slot:content>
                                </x-slot:wrapper>
                            </x-dropdown>
                        @else
                            <li><x-link :href="$navLink">{{ $label }}</x-link></li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <x-common.contact-modal />
            <div class="block xl:hidden">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
            </div>
        </div>
    </div>
</header>
