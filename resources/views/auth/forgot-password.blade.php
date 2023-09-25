<x-layouts.auth>
    <x-slot:title>
        Восстановить пароль - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
        <x-flash.auth :status="session('status')"/>

        <h1 class="mb-5 text-lg font-semibold">Восстановить пароль</h1>

        <form class="space-y-3" action="{{ route('password.email') }}" method="POST">
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

            <x-forms.button>Отправить</x-forms.button>
        </form>

        <div class="space-y-3 mt-5">
            <x-forms.link link="{{ route('login') }}">Я вспомнил пароль</x-forms.link>
        </div>
    </div>

</x-layouts.auth>
