<x-modal buttontext="Связаться с нами" modaltitle="Связаться с нами">
    <form method="POST" action="/" class="space-y-6">
        @csrf

        <x-common.form-input name="email" label="Адрес эл. почты" type="email" required autofocus />

        <x-common.form-input name="message" label="Сообщение" type="textarea" required />

        <div class="flex items-center justify-end">
            <x-button type="submit">
                Отправить
            </x-button>
        </div>
    </form>
</x-modal>
