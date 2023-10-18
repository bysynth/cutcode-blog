<x-layouts.auth>
    <x-slot:title>
        Регистрация - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
        <h1 class="mb-5 text-lg font-semibold">Регистрация</h1>

        <x-forms.form action="{{ route('register') }}">

            <x-forms.input
                name="email"
                placeholder="E-mail"
                autocomplete="email"
                required
                autofocus
            />

            <x-forms.input
                name="name"
                placeholder="Имя"
                required
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

            <x-forms.button>Зарегистрироваться</x-forms.button>

        </x-forms.form>

        <div class="space-y-3 mt-5">
            <x-forms.link text="Есть аккаунт?" link="{{ route('login') }}" underline="true">Войти</x-forms.link>
        </div>
    </div>

</x-layouts.auth>
