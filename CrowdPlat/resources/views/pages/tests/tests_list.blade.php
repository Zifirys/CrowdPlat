@extends('layout.main')

@section('title', 'Все тесты')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/tests.css') }}">
@endsection

@section('content')

    <div class="container">
        <h1 class="text-center">Список тестов</h1>
        <p class="text-center text-muted">Выберите тест для прохождения</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card test-card">
                    <img src="" class="card-img-top" alt="название">
                    <div class="card-body">
                        <h5 class="card-title text-center">Заголовок</h5>
                        <p class="card-text">Описание</p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-red ">Пройти тест</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card test-card">
                    <img src="" class="card-img-top" alt="название">
                    <div class="card-body">
                        <h5 class="card-title text-center">Заголовок</h5>
                        <p class="card-text">Описание</p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-red ">Пройти тест</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card test-card">
                    <img src="" class="card-img-top" alt="название">
                    <div class="card-body">
                        <h5 class="card-title text-center">Заголовок</h5>
                        <p class="card-text">Описание</p>
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-red ">Пройти тест</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection