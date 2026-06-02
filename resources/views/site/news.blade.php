<x-app-layout>
    <x-slot:title>
        Новости
    </x-slot>

    <x-h1>Новости</x-h1>

    <x-common.card-picture-grid :cards="$items" />

</x-app-layout>
