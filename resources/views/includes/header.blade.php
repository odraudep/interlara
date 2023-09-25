@php
  $menu_map = [
      [
          'label' => 'Home',
          'path' => '/',
          'name' => 'home',
      ],
      [
          'label' => 'Blog',
          'path' => '/blog',
          'name' => 'blog',
      ],
      [
          'label' => 'Events',
          'path' => '/events',
          'name' => 'blog',
      ],
      [
          'label' => 'Contact',
          'path' => '/contact',
          'name' => 'blog',
      ],
  ];
@endphp

<header id="main-navbar">
  <nav class="container flex items-center">
    <a href="/">
      <div class="text-4xl font-light text-teal-900">
        Inter<span class="text-3xl font-medium text-red-500">Lara</span>
      </div>
    </a>

    <ul class="header__menu">
      @foreach ($menu_map as $item)
        <li><a href="{{ $item['path'] }}">{{ $item['label'] }}</a></li>
      @endforeach
    </ul>

    <ul>
      <button>Search</button>
      <button>Login</button>
    </ul>
  </nav>
</header>
