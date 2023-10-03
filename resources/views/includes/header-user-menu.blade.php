<x-dropdown class="text-sm text-gray-500">
    <x-slot name="trigger">
        <button
            type="button"
            aria-controls="header-user-menu__list"
            class="flex items-center gap-1 rounded bg-white px-4 py-2"
        >
            {{ auth()->user()->name }}
            @svg('arrow-down')
        </button>
    </x-slot>

    <x-slot name="content">
        <ul id="header-user-menu__list">
            <li>
                <a
                    href="/dashboard"
                    class="block w-full px-4 py-2 transition-colors hover:bg-gray-100"
                >
                    Dashboard
                </a>
            </li>

            <li>
                <div class="block px-4 py-2 text-xs text-gray-400">
                    Manage Account
                </div>

                <ul>
                    <li>
                        <a
                            href="/user/profile"
                            class="block w-full px-4 py-2 transition-colors hover:bg-gray-100"
                        >
                            Profile
                        </a>
                    </li>

                    <li class="border-t border-gray-200">
                        <form
                            action="/logout"
                            method="POST"
                        >
                            @csrf
                            <a
                                href="/logout"
                                class="block w-full px-4 py-2 transition-colors hover:bg-gray-100"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </x-slot>
</x-dropdown>
