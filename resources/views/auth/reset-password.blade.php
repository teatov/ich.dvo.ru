<x-app-layout>
    <x-slot:title>
        Сброс пароля
    </x-slot>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-common.form-input name="email" label="Адрес эл. почты" type="email" required autofocus
            autocomplete="username" />

        <x-common.form-input name="password" label="Пароль" type="password" required autocomplete="new-password" />

        <x-common.form-input name="password_confirmation" label="Подтвердите пароль" type="password" required
            autocomplete="new-password" />

        <div class="flex items-center justify-end">
            <x-button type="submit">
                Сбросить пароль
            </x-button>
        </div>
    </form>
</x-app-layout>
