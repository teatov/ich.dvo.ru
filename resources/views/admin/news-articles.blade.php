<x-admin-layout>
    <x-slot:title>
        Новости
    </x-slot>

    <section class="mx-auto max-w-screen-md">
        <div class="mb-6">
            <x-button href="{{ route('admin.news-article-create') }}">Создать новую новостную статью</x-button>
        </div>
        <ul class="space-y-4">
            @foreach ($newsArticles as $newsArticle)
                <li>
                    <x-link href="{{ route('admin.news-article-edit', ['id' => $newsArticle->id]) }}"
                        class="flex gap-4 rounded border p-4">
                        <x-img class="h-16 w-20 rounded" src="{{ $newsArticle->image_url }}" />
                        <div class="grow">
                            <p>{{ $newsArticle->title }}</p>
                            <p class="text-neutral-darker text-sm">{{ $newsArticle->created_at }}</p>
                            <p class="text-neutral-darker">{{ $newsArticle->description }}</p>
                        </div>
                    </x-link>
                </li>
            @endforeach
        </ul>
    </section>
</x-admin-layout>
