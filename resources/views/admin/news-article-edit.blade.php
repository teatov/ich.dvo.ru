<x-admin-layout>
    <x-slot:title>
        {{ $newsArticle->title }}
    </x-slot>

    <section class="mx-auto max-w-screen-md">
        <form method="post" class="space-y-6">
            @csrf
            @method('patch')

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
                <x-input-label for="body">Текст статьи</x-input-label>
                <x-tiptap-editor name="body" content="{{ $newsArticle->body }}" />
                <x-input-error :messages="$errors->get('body')" />
            </div>

            <div>
                <p>Дата создания: {{ $newsArticle->created_at }}</p>
                <p>Дата обновления: {{ $newsArticle->updated_at }}</p>
            </div>

            <div class="flex items-center gap-4">
                <x-button type="submit">Сохранить</x-button>
            </div>

            @if (session('status') === 'saved')
                <p class="text-gray-600 text-sm">Сохранено</p>
            @endif
        </form>
    </section>
</x-admin-layout>
