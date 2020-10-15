<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="loginbody">
    <nav class="nav">
        <div class="logo">
            <img src="images/logo.png" class="logoimage">
            <!-- Just Du It! -->
        </div>
        @guest
            <div class="menus">
                <a href="/login" class="menu">Login</a>
                <a href="/register" class="menu">Register</a>
            </div>
        @else
            <div class="searchbar">
                <img src="images/search.png" class="searchicon">
                <input type="text" placeholder="search" class="searchinput">
            </div>
            <form action="/logoutUser" method="POST">
                @csrf
                <input type="submit" value="Logout" class="menu">
            </form>
            <!-- Disini Drop down logout (action="/logoutUser" method="post") dapatin nama user loginnya pakai "{{ Auth::user()->name }}" -->
        @endguest
    </nav>
    @yield('content')   
</body>
</html>