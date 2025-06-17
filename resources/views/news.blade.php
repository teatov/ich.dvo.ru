<x-app-layout>
    <x-slot:title>
        Новости
    </x-slot>

    @php
        $firstArticle = $newsArticles[0];
        $moreArticles = $newsArticles->slice(1);
    @endphp

    <section>
        <x-h1>Новости</x-h1>
        <x-common.editable tag="p" class="mx-auto my-4 max-w-screen-md text-center text-xl text-neutral-darker"
            textareaClass="text-center" key="news-lead" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
        <div class="flex bg-neutral-lighter px-16 py-12">
            <div class="flex w-1/2 flex-col justify-center">
                <x-h3>{{ $firstArticle->title }}</x-h3>
                <x-p>{{ $firstArticle->description }}</x-p>
                <x-link :href="route('news-article.show', ['slug' => $firstArticle->slug])"
                    class="mt-4 block text-xs font-semibold">Подробнее</x-link>
            </div>
            <x-img class="h-auto w-1/2 rounded" :src="$firstArticle->image_url" />
        </div>
        <x-common.card-picture-grid class="my-8" :cards="$moreArticles->cardSerialize()" />
    </section>
</x-app-layout>
