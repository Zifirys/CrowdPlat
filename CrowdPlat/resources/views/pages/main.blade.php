@extends('layout.main')

@section('title', 'Главная')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/main-page.css') }}">
@endsection

@section('content')

    <section id="articles" class="container mt-5">
        <h2 class="mb-3">Популярные статьи</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Статья 1</h5>
                        <p class="card-text">Краткое описание статьи...</p>
                        <a href="#" class="btn btn-red">Читать</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Статья 2</h5>
                        <p class="card-text">Краткое описание статьи...</p>
                        <a href="#" class="btn btn-red">Читать</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Статья 3</h5>
                        <p class="card-text">Краткое описание статьи...</p>
                        <a href="#" class="btn btn-red">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tests" class="container mt-5">
        <h2>Интересные тесты</h2>
        <p>Проходи тесты и проверяй свои знания!</p>
        <a href="" class="btn btn-red">Пройти тест</a>
    </section>

    <section id="register" class="container mt-5">
        <h2>Регистрация</h2>
        <p>Создай аккаунт и стань участником нашего сообщества!</p>
        <a href="#" class="btn btn-red">Зарегистрироваться</a>
    </section>

    <section id="rating" class="container mt-5">
        <h2>Рейтинг пользователей</h2>
        <ul class="list-group">
            <li class="list-group-item">1. Пользователь 1 - 1000 очков</li>
            <li class="list-group-item">2. Пользователь 2 - 950 очков</li>
            <li class="list-group-item">3. Пользователь 3 - 900 очков</li>
        </ul>
    </section>

@endsection