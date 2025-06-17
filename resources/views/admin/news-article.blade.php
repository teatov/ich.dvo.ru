<x-admin-layout>
    <x-slot:title>
        {{ $newsArticle->title ?? 'Новая новостная статья' }}
    </x-slot>

    <section class="mx-auto max-w-screen-lg">
        <form method="post" class="space-y-6"
            action="{{ $newsArticle->exists ? route('admin.news-article.update', ['news_article' => $newsArticle]) : route('admin.news-article.store') }}">
            @csrf

            @if ($newsArticle->exists)
                @method('patch')
            @endif

            <x-common.status-message />

            <x-link :href="route('news-article.show', ['id' => $newsArticle->id])" variant="primary">
                Перейти на страницу новости
            </x-link>

            <x-common.form-input name="title" label="Заголовок" :value="$newsArticle->title" required />

            <x-img class="max-h-80 w-auto rounded" :src="$newsArticle->image_url" />

            <x-common.form-input name="image_url" label="URL изображения" :value="$newsArticle->image_url" />

            <x-common.form-input name="description" label="Краткое описание" :value="$newsArticle->description" type="textarea" />

            <x-common.form-input name="body" label="Текст статьи" :value="$newsArticle->body" type="tiptap-editor" />

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
