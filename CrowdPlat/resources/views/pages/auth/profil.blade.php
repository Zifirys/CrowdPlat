@extends('layout.main')

@section('title', 'Профиль пользователя')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3 d-flex justify-content-between align-items-center">
            <h2 class="mb-4">Профиль пользователя</h2>
            <button class="btn btn-red">Выйти из аккаунта</button>
        </div>

        <div class="col-12">
            <div class="profile-card p-4">
                <div>
                    <p class="mb-1"><strong>Ник:</strong> IvanPetrov</p>
                    <p class="mb-1"><strong>Имя:</strong> Иван</p>
                    <p class="mb-1"><strong>Фамилия:</strong> Петров</p>
                    <p class="mb-1"><strong>Email:</strong> zifirys@mail.ru</p>

{{--                    <p>Пожалуйста, подтвердите свой email. Если вы не получили письмо, <a href="{{ route('verification.send') }}" onclick="event.preventDefault(); document.getElementById('resend-form').submit();">нажмите здесь</a> для повторной отправки.</p>--}}

{{--                    <form id="resend-form" action="{{ route('verification.send') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}

                </div>
                <div>
                    <p class="mb-1"><strong>Кол-во написанных статей:</strong> 23</p>
                    <p class="mb-1"><strong>Кол-во пройденных тестов:</strong> 1</p>
                </div>
                <div>
                    <p class="mb-1"><strong>Дата регистрации:</strong> 12.02.2021</p>
                    <p class="mb-1"><strong>Дата последних изменений:</strong> 12.02.2021</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Ваши статьи</h4>
            <ul class="list-group">
                <li class="list-group-item">Как стать веб-разработчиком?</li>
                <li class="list-group-item">Лучшие фреймворки 2025 года</li>
                <li class="list-group-item">Работа с API в JavaScript</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Любимые статьи</h4>
            <ul class="list-group">
                <li class="list-group-item">Как стать веб-разработчиком?</li>
                <li class="list-group-item">Лучшие фреймворки 2025 года</li>
                <li class="list-group-item">Работа с API в JavaScript</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Результаты тестов</h4>
            <ul class="list-group">
                <li class="list-group-item">Тест по HTML - 90%</li>
                <li class="list-group-item">Тест по CSS - 85%</li>
                <li class="list-group-item">Тест по JavaScript - 92%</li>
            </ul>
        </div>
    </div>
</div>
@endsection
