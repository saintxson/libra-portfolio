<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Жанры</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Библиотека</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('genre.index')}}">{{__('Жанры')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('book.index')}}">{{__('Книги')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('author.index')}}">{{__('Авторы')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Регистрация') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Авторизация') }}</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('admin.index')}}">Административная панель</a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>
