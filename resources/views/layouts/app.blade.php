<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head-content')
    <title>{{ config('app.name', 'Тестовое задание') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>


<body>
<div id="app">
    <header class="mb-auto">
        <nav class="navbar navbar-expand-md navbar-light border-bottom" style="background-color: white ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav  mb-2 mb-md-0 mr-auto" >
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('app.index') ? 'active' : '' }}" href="{{route('app.index')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('articles.*') ? 'active' : '' }}" href="{{route('articles.index')}}">Каталог статей</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-4 page-container">
        @yield('content')
        <div class="push"></div>
    </main>
</div>
</body>
</html>
