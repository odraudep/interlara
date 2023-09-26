@php
    $menu_map = [
        [
            'label' => 'Home',
            'path' => '/',
            'name' => 'base.home',
        ],
        [
            'label' => 'Blog',
            'path' => '/blog',
            'name' => 'posts.index',
        ],
        [
            'label' => 'Events',
            'path' => '/events',
            'name' => 'events.index',
        ],
        [
            'label' => 'Contact',
            'path' => '/contact',
            'name' => 'base.contact',
        ],
    ];
@endphp

<header
    id="main-navbar"
    class="bg-gray-300"
>
    <nav class="container flex items-center">
        <a
            href="/"
            class="outline-none focus:opacity-60"
        >
            <div class="text-4xl font-light text-teal-900">
                Inter<span class="text-3xl font-medium text-primary">Lara</span>
            </div>
        </a>

        <ul class="header__menu">
            @foreach ($menu_map as $item)
                <li><a
                        href="{{ $item['path'] }}"
                        @if (Route::current()->getName() == $item['name']) aria-current="page" @endif
                    >{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>

        <ul class="flex items-center gap-6">
            <li>
                <button
                    class="grid place-items-center border-2 border-current bg-white p-3 text-white outline-none transition-colors hover:border-primary focus:border-primary"
                    aria-label="Search"
                >
                    @svg('search', ['width' => 24, 'height' => 24, 'style' => 'color: var(--clr-primary)'])
                </button>
            </li>

            <ul class="flex gap-4">
                <li>
                    <a
                        href='/login'
                        class="text-black outline-none hover:opacity-80 focus:underline focus:opacity-80"
                    >Log In</a>
                </li>
                <li>
                    <a
                        href='/signup'
                        class="text-black outline-none hover:opacity-80 focus:underline focus:opacity-80"
                    >Sign Up</a>
                </li>
            </ul>
        </ul>
    </nav>
</header>
