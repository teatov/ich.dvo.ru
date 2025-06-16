<x-app-layout>
    <x-slot:title>
        Регистрация
    </x-slot>

    <form method="POST" action="{{ route('register') }}" class="mx-auto max-w-screen-sm space-y-6">
        @csrf

        <x-common.form-input name="name" label="Имя пользователя" required autofocus autocomplete="name" />

        <x-common.form-input name="email" label="Адрес эл. почты" type="email" required autocomplete="username" />

        <x-common.form-input name="password" label="Пароль" type="password" required autocomplete="new-password" />

        <x-common.form-input name="password_confirmation" label="Подтвердите пароль" type="password" required
            autocomplete="new-password" />

        <div class="flex items-center justify-end gap-4">
            <x-link href="{{ route('login') }}">
                Уже зарегистрированы?
            </x-link>

            <x-button type="submit">
                Зарегистрироваться
            </x-button>
        </div>
    </form>
</x-app-layout>
