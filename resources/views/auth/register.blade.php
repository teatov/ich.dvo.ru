<x-app-layout>
    <x-slot:title>
        Регистрация
    </x-slot>

    <form method="POST" action="{{ route('register') }}" class="mx-auto max-w-screen-sm">
        @csrf

        <div>
            <x-input-label for="name" >Имя пользователя</x-input-label>
            <x-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" >Пароль</x-input-label>

            <x-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" >Подтвердите пароль</x-input-label>

            <x-input id="password_confirmation" class="mt-1 block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <a class="text-gray-600 hover:text-gray-900 focus:ring-indigo-500 rounded-md text-sm underline focus:outline-none focus:ring-2 focus:ring-offset-2"
                href="{{ route('login') }}">
                Уже зарегистрированы?
            </a>

            <x-button class="ms-4">
                Зарегистрироваться
            </x-button>
        </div>
    </form>
</x-app-layout>
