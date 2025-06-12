<aside {{ $attributes }}>
    <nav>
        <ul>
            @foreach ($navLinks as $label => $navLink)
                <li><x-link href="{{ $navLink }}" @class([
                    'text-primary' => Request::is( substr($navLink, 1)),
                ])>{{ $label }}</x-link>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
