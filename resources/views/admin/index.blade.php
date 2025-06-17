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

                        <button type="submit"
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

            <x-button variant="danger" type="submit">
                Выйти из учётной записи
            </x-button>
        </form>

        <form method="post" action="{{ route('admin.index') }}" class="space-y-6">
            @csrf
            <x-h4>Изменить информацию профиля</x-h4>

            <x-common.form-input name="name" label="Имя пользователя" :value="$user->name" required
                autocomplete="name" />

            <x-common.form-input name="email" label="Адрес эл. почты" :value="$user->email" type="email"
                required autocomplete="username" />

            <div class="flex items-center gap-4">
                <x-button type="submit">Сохранить</x-button>

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

            <x-common.form-input name="current_password" label="Текущий пароль" type="password"
                autocomplete="current-password" />

            <x-common.form-input name="password" label="Новый пароль" type="password"
                autocomplete="new-password" />

            <x-common.form-input name="password_confirmation" label="Подтвердите новый пароль" type="password"
                autocomplete="new-password" />

            <div class="flex items-center gap-4">
                <x-button type="submit">Сохранить</x-button>

                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-gray-600 text-sm">Сохранено</p>
                @endif
            </div>
        </form>
    </section>
</x-admin-layout>
