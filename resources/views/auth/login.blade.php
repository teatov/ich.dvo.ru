<x-app-layout>
    <x-slot:title>
        Вход
    </x-slot>

    <form method="POST" action="{{ route('login') }}" class="mx-auto max-w-screen-sm">
        @csrf

        <div>
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" >Пароль</x-input-label>

            <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4 block">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="border-gray-300 text-indigo-600 focus:ring-indigo-500 rounded shadow-sm" name="remember">
                <span class="text-gray-600 ms-2 text-sm">Запомнить меня</span>
            </label>
        </div>

        <div class="mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <a class="text-gray-600 hover:text-gray-900 focus:ring-indigo-500 rounded-md text-sm underline focus:outline-none focus:ring-2 focus:ring-offset-2"
                    href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            @endif

            <x-button class="ms-3">
                Войти
            </x-button>
        </div>
    </form>
</x-app-layout>
