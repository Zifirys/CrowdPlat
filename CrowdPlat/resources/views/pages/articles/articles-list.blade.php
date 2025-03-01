@extends('layout.main')

@section('title', 'Все статьи')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/articles.css') }}">
@endsection

@section('content')

        <div class="container mt-5">
            <h2 class="text-center mb-3">Все статьи</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="card article-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Заголовок</h5>
                            <p class="card-text">Описание</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/articles/read') }}" class="btn btn-red">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card article-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Заголовок</h5>
                            <p class="card-text">Описание</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/articles/read') }}" class="btn btn-red">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card article-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Заголовок</h5>
                            <p class="card-text">Описание</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/articles/read') }}" class="btn btn-red">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-center">
            Пагинация
        </div>
    </div>

@endsection