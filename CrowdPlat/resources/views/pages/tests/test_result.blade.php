@extends('layout.main')

@section('title', 'Результаты теста')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/tests.css') }}">
@endsection

@section('content')

    <div class="container test-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card test-card">
                    <div class="card-header text-center">
                        <h3>Результаты теста</h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="" class="img-fluid mb-4" alt="Результат теста">
                            <h4 class="mb-3 ">Ваш результат: <strong>счет</strong></h4>
                        </div>

                        <p>описание</p>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-red mt-4">Вернуться на главную страницу</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection