<x-layouts.auth>
    <x-slot:title>
        {{ $title }} - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">

        <x-flash.auth :status="session('status')"/>

        <h1 class="mb-5 text-lg font-semibold">{{ $title }}</h1>

        <x-forms.form :action="$route">

            <x-forms.input
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

            <x-forms.button>Войти</x-forms.button>

        </x-forms.form>

        @if($links)
            <div class="space-y-3 mt-5">
                <x-forms.link link="{{ route('password.request') }}">Забыли пароль?</x-forms.link>
                <x-forms.link link="{{ route('register') }}">Регистрация</x-forms.link>
            </div>
        @endif
    </div>

</x-layouts.auth>
