<x-modal buttontext="Связаться с нами" modaltitle="Связаться с нами">
    <form method="POST" action="/" class="space-y-6">
        @csrf

        <div class="space-y-1">
            <x-input-label for="email">Адрес эл. почты</x-input-label>
            <x-input id="email" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="message">Сообщение</x-input-label>
            <x-textarea id="message" type="text" name="message" :value="old('message')" required
                autofocus />
            <x-input-error :messages="$errors->get('message')"  />
        </div>

        <div class="flex items-center justify-end">
            <x-button type="submit">
                Отправить
            </x-button>
        </div>
    </form>
</x-modal>
