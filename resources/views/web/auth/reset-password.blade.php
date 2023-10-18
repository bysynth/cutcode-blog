<x-layouts.auth>
    <x-slot:title>
        Новый пароль - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">

        <h1 class="mb-5 text-lg font-semibold">Новый пароль</h1>

        <x-forms.form action="{{ route('password.store') }}">

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <x-forms.input
                value="{{ request()->get('email') }}"
                name="email"
                placeholder="E-mail"
                autocomplete="email"
                required
                autofocus
            />

            <x-forms.input
                type="password"
                name="password"
                placeholder="Пароль"
                autocomplete="current-password"
                required
            />

            <x-forms.input
                type="password"
                name="password_confirmation"
                placeholder="Повторите пароль"
                autocomplete="new-password"
                required
            />

            <x-forms.button>Изменить пароль</x-forms.button>

        </x-forms.form>

        <div class="space-y-3 mt-5">
            <x-forms.link text="Вспомнили пароль?" link="{{ route('login') }}" underline="true">Войти</x-forms.link>
        </div>
    </div>

</x-layouts.auth>
