<x-app-layout>
    <x-slot:title>
        {{ $newsArticle->title }}
    </x-slot>

    <section class="mx-auto max-w-screen-lg space-y-6">
        @auth
            <x-common.status-message />
            <x-button href="{{ route('admin.news-article.edit', ['news_article' => $newsArticle]) }}">
                Редактировать статью
            </x-button>
        @endauth
        <x-h1>{{ $newsArticle->title }}</x-h1>
        <x-lead>{{ $newsArticle->created_at }}</x-lead>
        <x-img src="{{ $newsArticle->image_url }}" class="rounded" />
        <article class="prose">
            {!! $newsArticle->body !!}
        </article>
    </section>

    <section class="my-16 border-t py-10">
        <x-h2>Другие новости</x-h2>
        <x-common.card-picture-grid class="my-8" :cards="$otherNewsArticles->cardSerialize()" />
    </section>
</x-app-layout>
