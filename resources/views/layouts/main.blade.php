<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes/head')

    <title>@yield('title') - InterLara</title>

    @vite('resources/js/app.js')
</head>

<body class="font-roboto">
    @include('includes/header')

    @if (isset(session('server_data')['msg']))
        <x-alert-box :variant="session('server_data')['msg']['type']">
            {{ session('server_data')['msg']['content'] }}
        </x-alert-box>
    @endif

    <main>
        @yield('content')
    </main>

    @include('includes/footer')
</body>

</html>
