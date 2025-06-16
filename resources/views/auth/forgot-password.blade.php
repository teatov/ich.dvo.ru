<x-app-layout>
    <x-slot:title>
        Восстановление доступа
    </x-slot>


    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <x-common.form-input name="email" label="Адрес эл. почты" type="email" required autofocus />

        <div class="flex items-center justify-end">
            <x-button type="submit">
                Отправить письмо для сброса пароля
            </x-button>
        </div>
    </form>
</x-app-layout>
