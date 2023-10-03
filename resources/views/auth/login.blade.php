<x-layouts.auth>
    <x-slot:title>
        {{ $title }} - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
        <h1 class="mb-5 text-lg font-semibold">{{ $title }}</h1>

        <form class="space-y-3" action="{{ $route }}" method="POST">
            @csrf

            <x-forms.input
                name="email"
                type="email"
                value="{{ old('email') }}"
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

            <x-forms.button>Войти</x-forms.button>
        </form>

        @if($links)
            <div class="space-y-3 mt-5">
                <x-forms.link link="{{ route('password.request') }}">Забыли пароль?</x-forms.link>
                <x-forms.link link="{{ route('register') }}">Регистрация</x-forms.link>
            </div>
        @endif
    </div>

</x-layouts.auth>
