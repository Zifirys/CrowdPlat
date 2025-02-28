@extends('layout.main')

@section('title', 'Все статьи')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/articles/articles-list.css') }}">
@endsection

@section('content')

    <div class="container mt-5">
        <h2 class="text-center text-danger">Все статьи</h2>

        <div class="row">
                <div class="col-md-4">
                    <div class="card article-card">
                        <div class="card-body">
                            <h5 class="card-title">Заголовок</h5>
                            <p class="card-text">Описание</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-red">Читать</a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="mt-4 d-flex justify-content-center">
                Пагинация
        </div>
    </div>

@endsection