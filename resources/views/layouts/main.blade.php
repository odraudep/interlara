<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('includes/head')

  <title>@yield('title') - InterLara</title>
</head>

<body>
  @include('includes/header')

  <main>
    @yield('content')
  </main>

  @include('includes/footer')
</body>

</html>
