<x-layouts.auth>
    <x-slot:title>
        Новый пароль - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
        <h1 class="mb-5 text-lg font-semibold">Новый пароль</h1>

        <form class="space-y-3" action="{{ route('password.store') }}" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <x-forms.input
                name="email"
                type="email"
                value="{{ old('email', request()->get('email')) }}"
                autocomplete="email"
                placeholder="E-mail"
                required
                autofocus
            />
            @error('email')
                <x-forms.error>{{ $message }}</x-forms.error>
            @enderror

            <x-forms.input
                name="password"
                type="password"
                autocomplete="current-password"
                placeholder="Пароль"
                required
            />
            @error('password')
                <x-forms.error>{{ $message }}</x-forms.error>
            @enderror

            <x-forms.input
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
                placeholder="Повторите пароль"
                required
            />

            <x-forms.button>Изменить пароль</x-forms.button>
        </form>

        <div class="space-y-3 mt-5">
            <x-forms.link text="Вспомнили пароль?" link="{{ route('login') }}" underline="true">Войти</x-forms.link>
        </div>
    </div>

</x-layouts.auth>
