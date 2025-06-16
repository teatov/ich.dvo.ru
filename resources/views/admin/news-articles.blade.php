<x-admin-layout>
    <x-slot:title>
        Новости
    </x-slot>

    <section class="mx-auto max-w-screen-md">
        <ul>
            @foreach ($newsArticles as $newsArticle)
                <li>
                    <x-link href="{{ route('admin.news-article-edit', ['id' => $newsArticle->id]) }}" class="block">
                        <div>{{ $newsArticle->title }}</div>
                        <div>{{ $newsArticle->created_at }}</div>
                    </x-link>
                </li>
            @endforeach
        </ul>
    </section>
</x-admin-layout>
