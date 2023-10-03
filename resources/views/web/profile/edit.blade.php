<x-layouts.web>
    <x-slot:title>
        Профиль - {{ config('app.name') }}
    </x-slot:title>

    <x-flash.message :message="session('message')" />

    <div class="md:flex md:items-start md:justify-between md:space-x-4" x-data="{active: 1}">
        <div class="md:w-1/2 md:my-0 my-4 w-full p-2 xs:p-4 md:p-8 2xl:p-12 rounded-[20px] bg-purple">
            <div class="p-4 cursor-pointer rounded-md" :class="{'bg-pink': active === 1}" @click="active = 1"> Редактировать профиль</div>
            <div class="p-4 cursor-pointer rounded-md" :class="{'bg-pink': active === 2}" @click="active = 2"> Изменить пароль</div>
        </div>
        <div class="w-full p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
            <form
                action="{{ route('profile.update') }}"
                method="POST"
                enctype="multipart/form-data"
                class="space-y-3" x-show="active === 1"
            >
                @csrf
                @method('PATCH')

                <div class="flex items-center justify-between">
                    <div>
                        <input id="avatarInput" type="file" name="avatar" class="hidden">
                        <div class="mt-2">
                            @unless($user->avatar)
                                <img
                                    id="avatarPreview"
                                    src="{{ Vite::image('/nav/logo.svg') }}"
                                    alt="{{ $user->name }}"
                                    class="rounded-full h-20 w-20 object-cover"
                                >
                            @else
                                <img
                                    id="avatarPreview"
                                    src="{{ Storage::url($user->avatar) }}"
                                    alt="{{ $user->name }}"
                                    class="rounded-full h-20 w-20 object-cover"
                                >
                            @endunless
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-forms.button id="uploadAvatarButton" class="mt-2 mr-2" type="button">Выбрать аватар</x-forms.button>
                        @if($user->avatar)
                            <x-forms.outline-button id="deleteAvatarButton" class="mt-2" type="button">Удалить</x-forms.outline-button>
                        @endif
                    </div>
                    @error('avatar')
                        <x-forms.error>{{ $message }}</x-forms.error>
                    @enderror
                </div>

                <x-forms.input
                    name="name"
                    :value="old('name', $user->name)"
                    type="text"
                    placeholder="Имя"
                    required
                />
                @error('name')
                    <x-forms.error>{{ $message }}</x-forms.error>
                @enderror

                <x-forms.input
                    name="email"
                    type="email"
                    :value="old('email', $user->email)"
                    placeholder="E-mail"
                    required
                />

                @error('email')
                    <x-forms.error>{{ $message }}</x-forms.error>
                @enderror

                <x-forms.button>Сохранить</x-forms.button>

            </form>

            <form
                action="{{ route('profile.update-password') }}"
                method="POST"
                class="space-y-3" x-show="active === 2"
            >
                @csrf
                @method('PATCH')

                <x-forms.input
                    name="current_password"
                    type="password"
                    autocomplete="current-password"
                    placeholder="Текущий пароль"
                    required
                />
                @error('current_password')
                    <x-forms.error>{{ $message }}</x-forms.error>
                @enderror

                <x-forms.input
                    name="password"
                    type="password"
                    autocomplete="new-password"
                    placeholder="Новый пароль"
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

                <x-forms.button>Сменить пароль</x-forms.button>
            </form>
        </div>
    </div>

</x-layouts.web>
