<x-admin-layout>
    <x-slot:title>
        Админ-панель
    </x-slot>

    <section class="mx-auto max-w-screen-sm space-y-6">
        <x-h3>Профиль</x-h3>
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <form method="post" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <p class="text-gray-800 mt-2 text-sm">
                        Ваш адрес эл. почты не подтверждён.

                        <button
                            class="text-gray-600 hover:text-gray-900 focus:ring-indigo-500 rounded-md text-sm underline focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Отправить письмо с подтверждением.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-green-600 mt-2 text-sm font-medium">
                            Новая ссылка для подтверждения отправлена на вашу эл. почту.
                        </p>
                    @endif
                </div>
            </form>
        @endif

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-button>
                Выйти из учётной записи
            </x-button>
        </form>

        <form method="post" action="/admin" class="space-y-6">
            @csrf
            @method('patch')
            <x-h4>Изменить информацию профиля</x-h4>

            <div class="space-y-1">
                <x-input-label for="name">Имя пользователя</x-input-label>
                <x-input id="name" name="name" type="text" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="space-y-1">
                <x-input-label for="email">Адрес эл. почты</x-input-label>
                <x-input id="email" name="email" type="email" :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="flex items-center gap-4">
                <x-button>Сохранить</x-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-gray-600 text-sm">Сохранено</p>
                @endif
            </div>
        </form>

        <form method="post" action="{{ route('password.update') }}" class="space-y-6">
            @csrf
            @method('put')
            <x-h4>Изменить пароль</x-h4>

            <div class="space-y-1">
                <x-input-label for="update_password_current_password">Текущий пароль</x-input-label>
                <x-input id="update_password_current_password" name="current_password" type="password"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" />
            </div>

            <div class="space-y-1">
                <x-input-label for="update_password_password">Новый пароль</x-input-label>
                <x-input id="update_password_password" name="password" type="password" class="mt-1"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" />
            </div>

            <div class="space-y-1">
                <x-input-label for="update_password_password_confirmation">Подтвердите новый пароль</x-input-label>
                <x-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
            </div>

            <div class="flex items-center gap-4">
                <x-button>Сохранить</x-button>

                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-gray-600 text-sm">Сохранено</p>
                @endif
            </div>
        </form>
    </section>
</x-admin-layout>
