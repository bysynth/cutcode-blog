<x-layouts.auth>
    <x-slot:title>
        Восстановить пароль - {{ config('app.name') }}
    </x-slot:title>

    <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">

        <x-flash.auth :status="session('status')"/>

        <h1 class="mb-5 text-lg font-semibold">Восстановить пароль</h1>

        <x-forms.form action="{{ route('password.request') }}">

            <x-forms.input
                name="email"
                placeholder="E-mail"
                autocomplete="email"
                required
                autofocus
            />

            <x-forms.button>Отправить</x-forms.button>

        </x-forms.form>

        <div class="space-y-3 mt-5">
            <x-forms.link link="{{ route('login') }}">Я вспомнил пароль</x-forms.link>
        </div>
    </div>

</x-layouts.auth>
