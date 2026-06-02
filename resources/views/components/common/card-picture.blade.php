@props(['imgSrc' => '', 'category' => '', 'heading' => '', 'text' => '', 'url' => ''])

<li class="rounded-xl border p-5">
    @if ($imgSrc && $url)
        <a href="{{$url}}">
            <x-img class="h-auto w-full rounded aspect-video" :src="$imgSrc" />
        </a>
    @endif
    @if ($imgSrc && !$url)
        <x-img class="h-auto w-full rounded aspect-video" :src="$imgSrc" />
    @endif
    <div class="space-y-5 pt-5 md:p-5">
        @if ($category)<x-badge>{{ $category }}</x-badge>@endif
        
        <x-h4>{{ $heading }}</x-h4>
        <x-p>{{ $text }}</x-p>
        @if ($url)<x-link :href="$url" class="mt-2 block text-xs font-semibold">Подробнее</x-link>@endif
    </div>
</li>
