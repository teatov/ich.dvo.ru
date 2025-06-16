<x-app-layout>
    <x-slot:title>
        Вход
    </x-slot>

    <form method="POST" action="{{ route('login') }}" class="mx-auto max-w-screen-sm space-y-6">
        @csrf

        <div class="space-y-1">
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="space-y-1">
            <x-input-label for="password" >Пароль</x-input-label>

            <x-input id="password" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div>
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded shadow-sm" name="remember">
                <span class="text-gray-600 ms-2 text-sm">Запомнить меня</span>
            </label>
        </div>

        <div class="flex items-center justify-end gap-4">
            @if (Route::has('password.request'))
                <x-link href="{{ route('password.request') }}">
                    Забыли пароль?
                </x-link>
            @endif

            <x-button type="submit">
                Войти
            </x-button>
        </div>
    </form>
</x-app-layout>
