<x-app-layout>
    <x-slot:title>
        Восстановление доступа
    </x-slot>


    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" >Адрес эл. почты</x-input-label>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                Отправить письмо для сброса пароля
            </x-button>
        </div>
    </form>
</x-app-layout>
