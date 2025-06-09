@props(['imgsrc' => '', 'category' => '', 'heading' => '', 'text' => '', 'url' => ''])

<li class="rounded-xl border p-5">
    <x-img class="h-auto rounded" src="{{ $imgsrc }}" />
    <div class="space-y-5 pt-5 md:p-5">
        <x-badge>{{ $category }}</x-badge>
        <x-h4>{{ $heading }}</x-h4>
        <x-p>{{ $text }}</x-p>
        <x-link href={{ $url }} class="mt-2 block text-xs font-semibold">Подробнее</x-link>
    </div>
</li>
