<x-app-layout>
    <x-slot:title>
        Регистрация
    </x-slot>

    <form method="POST" action="{{ route('register') }}" class="mx-auto max-w-screen-sm space-y-6">
        @csrf

        <div class="space-y-1">
            <x-input-label for="name" >Имя пользователя</x-input-label>
            <x-input id="name" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="password" >Пароль</x-input-label>

            <x-input id="password" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="password_confirmation" >Подтвердите пароль</x-input-label>

            <x-input id="password_confirmation" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>

        <div class="flex items-center justify-end gap-4">
            <x-link href="{{ route('login') }}">
                Уже зарегистрированы?
            </x-link>

            <x-button>
                Зарегистрироваться
            </x-button>
        </div>
    </form>
</x-app-layout>
