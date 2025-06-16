<x-admin-layout>
    <x-slot:title>
        {{ $newsArticle->title ?? 'Новая новостная статья' }}
    </x-slot>

    <section class="mx-auto max-w-screen-md">
        <form method="post" class="space-y-6"
            action="{{ $newsArticle->exists ? route('admin.news-article.update', ['news_article' => $newsArticle]) : route('admin.news-article.store') }}">
            @csrf

            @if ($newsArticle->exists)
                @method('patch')
            @endif

            <x-common.status-message />

            <div class="space-y-1">
                <x-input-label for="title">Заголовок</x-input-label>
                <x-input id="title" name="title" type="text" value="{{ $newsArticle->title }}" required />
                <x-input-error :messages="$errors->get('title')" />
            </div>

            <x-img class="max-h-80 w-auto rounded" src="{{ $newsArticle->image_url }}" />

            <div class="space-y-1">
                <x-input-label for="title">URL изображения</x-input-label>
                <x-input id="image_url" name="image_url" type="text" value="{{ $newsArticle->image_url }}" />
                <x-input-error :messages="$errors->get('image_url')" />
            </div>

            <div class="space-y-1">
                <x-input-label for="title">Краткое описание</x-input-label>
                <x-textarea id="description" name="description" type="text"
                    value="{{ $newsArticle->description }}" />
                <x-input-error :messages="$errors->get('description')" />
            </div>

            <div class="space-y-1">
                <x-input-label for="body">Текст статьи</x-input-label>
                <x-tiptap-editor name="body" content="{{ $newsArticle->body }}" />
                <x-input-error :messages="$errors->get('body')" />
            </div>

            @if ($newsArticle->exists)
                <div>
                    <p>Дата создания: {{ $newsArticle->created_at }}</p>
                    <p>Дата обновления: {{ $newsArticle->updated_at }}</p>
                </div>
            @endif

            <div class="flex items-center gap-4">
                <x-button type="submit">Сохранить</x-button>
            </div>
        </form>

        @if ($newsArticle->exists)
            <form method="post" class="space-y-6" x-data=""
                @submit.prevent="if (confirm('Подтвердите удаление')) $el.submit()"
                action="{{ route('admin.news-article.destroy', ['news_article' => $newsArticle]) }}">
                @csrf
                @method('delete')

                <div class="flex items-center gap-4">
                    <x-button variant="danger" type="submit">Удалить</x-button>
                </div>
            </form>
        @endif
    </section>
</x-admin-layout>
