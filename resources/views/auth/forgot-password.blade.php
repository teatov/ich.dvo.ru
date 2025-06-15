<x-app-layout>
    <x-slot:title>
        Восстановление доступа
    </x-slot>


    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div class="space-y-1">
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <div class="flex items-center justify-end">
            <x-button>
                Отправить письмо для сброса пароля
            </x-button>
        </div>
    </form>
</x-app-layout>
