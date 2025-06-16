<x-app-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <div class="flex gap-10">
        <x-layout.admin-menu />
        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
