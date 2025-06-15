<x-app-layout>
    <x-slot:title>
        Сброс пароля
    </x-slot>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div  class="space-y-1">
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email"  type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="password" >Пароль</x-input-label>
            <x-input id="password"  type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')"  />
        </div>

        <div class="space-y-1">
            <x-input-label for="password_confirmation" >Подтвердите пароль</x-input-label>

            <x-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>

        <div class="flex items-center justify-end">
            <x-button>
                Сбросить пароль
            </x-button>
        </div>
    </form>
</x-app-layout>
