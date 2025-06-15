<x-admin-layout>
    <x-slot:title>
        Админ-панель
    </x-slot>

    <section class="mx-auto max-w-screen-sm">
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

        <form method="post" action="/admin" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <x-h4>Изменить информацию профиля</x-h4>

            <div>
                <x-input-label for="name">Имя пользователя</x-input-label>
                <x-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email">Адрес эл. почты</x-input-label>
                <x-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="flex items-center gap-4">
                <x-button>Сохранить</x-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-gray-600 text-sm">Сохранено</p>
                @endif
            </div>
        </form>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <x-h4>Изменить пароль</x-h4>

            <div>
                <x-input-label for="update_password_current_password">Текущий пароль</x-input-label>
                <x-input id="update_password_current_password" name="current_password" type="password"
                    class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="update_password_password">Новый пароль</x-input-label>
                <x-input id="update_password_password" name="password" type="password" class="mt-1 block w-full"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="update_password_password_confirmation">Подтвердите новый пароль</x-input-label>
                <x-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
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
