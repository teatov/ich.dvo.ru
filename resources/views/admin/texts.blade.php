<x-admin-layout>
    <x-slot:title>
        Тексты
    </x-slot>

    <section class="mx-auto max-w-screen-md">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b font-semibold">
                    <th class="h-10 whitespace-nowrap px-2 text-left align-middle">
                        Ключ</th>
                    <th class="h-10 whitespace-nowrap px-2 text-left align-middle">Текст</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($textLines as $textLine)
                    <tr class="border-b">
                        <td class="text-nowrap p-2 font-mono">{{ $textLine->id }}</td>
                        <td class="p-2">
                            {{ $textLine->text }}</td>
                    </tr>
                @endforeach
        </table>
        </tbody>
    </section>
</x-admin-layout>
