<footer class="bg-foreground text-neutral-darker">
    <div class="container flex flex-col justify-between gap-y-9 py-14 md:flex-row">
        <nav class="space-y-9 md:min-w-[50%]">
            @foreach ($navLinks as $sectionLabel => $sectionColumns)
                <div>
                    <h6 class="mb-4 text-2xl font-semibold text-background">{{ $sectionLabel }}</h6>
                    <ul class="flex w-full flex-col gap-x-4 space-y-4 sm:flex-row sm:space-y-0">
                        @foreach ($sectionColumns as $column)
                            <div class="w-full space-y-0.5">
                                @foreach ($column as $label => $navLink)
                                    <li><x-link href="{{ $navLink }}">{{ $label }}</x-link>
                                    </li>
                                @endforeach
                            </div>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </nav>
        <div class="flex flex-col items-start justify-between space-y-4 md:items-end">
            <x-button href="/">Связаться с нами</x-button>
            <div class="flex flex-col items-end">
                @auth
                    <x-link href="/admin">Админ-панель</x-link>
                @endauth
                <x-link href="{{ route('privacy') }}">Политика конфиденциальности</x-link>
            </div>
        </div>
    </div>
</footer>
