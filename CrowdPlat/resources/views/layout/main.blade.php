<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('assets/css/layout/main-layout.css') }}">
        @yield('css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-danger" href="{{ route('home') }}">CrowdPlat</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Статьи</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Тесты</a></li>
                        <!-- если пользователь с системе, то отправляем его на его профиль -->
                        <li class="nav-item"><a class="nav-link" href="">Ваш профиль</a></li>
                        <!-- иначе даем выбор -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('login.or.create') }}">Ваш профиль</a></li>
                    </ul>
                </div>
            </div>
        </nav> 

        <div class="page-wrapper">
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <p>&copy; {{ \Carbon\Carbon::now()->year }} Все права защищены</p>
            </div>
        </footer>
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>