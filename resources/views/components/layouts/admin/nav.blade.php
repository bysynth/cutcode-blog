<nav class="bg-white border-b border-gray-200 px-4 py-2.5 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100"
            >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
            <a href="{{ route('home') }}" class="flex items-center justify-between mr-4">
                <img
                    src="{{ Vite::image('nav/logo-dark.svg') }}"
                    class="mr-3 h-8"
                    alt="Cutcode Blog"
                />
            </a>
        </div>

        <div class="flex items-center lg:order-2">
            <button
                type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
            >
                @unless(auth('admin')->user()->avatar)
                    <img alt="{{ auth('admin')->user()->name }}"
                         class="w-8 h-8 rounded-full"
                         src="{{ Vite::image('nav/logo.svg') }}"
                    >
                @else
                    <img alt="{{ auth('admin')->user()->name }}"
                         class="w-8 h-8 rounded-full"
                         src="{{ Storage::url(auth('admin')->user()->avatar) }}"
                    >
                @endunless
            </button>
            <!-- Dropdown menu -->
            <div
                class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                id="dropdown"
            >
                <div class="py-3 px-4">
                          <span class="block text-sm font-semibold text-gray-900">
                              {{ auth('admin')->user()->name }}
                          </span>
                    <span class="block text-sm text-gray-900 truncate">
                            {{ auth('admin')->user()->email }}
                        </span>
                </div>
                <ul
                    class="py-1 text-gray-700"
                    aria-labelledby="dropdown"
                >
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">
                            Профиль
                        </a>
                    </li>
                </ul>
                <ul
                    class="py-1 text-gray-700"
                    aria-labelledby="dropdown"
                >
                    <li>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="block w-full py-2 px-4 text-sm text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                Выход
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
