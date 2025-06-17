<aside {{ $attributes }}>
    <nav>
        <ul>
            @foreach ($navLinks as $label => $navLink)
                <li><x-link :href="$navLink" @class(['block hover:bg-neutral-lighter rounded p-2'])>{{ $label }}</x-link>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
