<x-app-layout>
    <x-slot:title>
        Вход
    </x-slot>

    <form method="POST" action="{{ route('login') }}" class="mx-auto max-w-screen-sm space-y-6">
        @csrf

        <x-common.form-input name="email" label="Адрес эл. почты" type="email" required autofocus
            autocomplete="username" />

        <x-common.form-input name="password" label="Пароль" type="password" required autocomplete="current-password" />

        <x-common.form-input name="remember" label="Запомнить меня" type="checkbox"  />

        <div class="flex items-center justify-end gap-4">
            @if (Route::has('password.request'))
                <x-link :href="route('password.request')">
                    Забыли пароль?
                </x-link>
            @endif

            <x-button type="submit">
                Войти
            </x-button>
        </div>
    </form>
</x-app-layout>
