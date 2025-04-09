@extends('layout.main')

@section('title', 'Все статьи')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/articles.css') }}">
@endsection

@section('content')

    <div class="container mt-5">

        @if($articles->isNotEmpty())
            <h2 class="text-center mb-3">Все статьи</h2>

            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-4 d-flex mb-4">
                        <div class="card article-card flex-fill d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $article->title }}</h5>
                                <p class="card-text flex-grow-1">{{ $article->little_content }}</p>
                                <div class="mt-auto d-flex justify-content-end">
                                    <a href="{{ route('article.read', ['id' => $article->id]) }}" class="btn btn-red">Читать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $articles->links('pagination::bootstrap-4') }}
            </div>
        @else
            <h2 class="text-center mb-3">Статей пока нету. Будьте первым!</h2>

{{--            <a href="" class="btn btn-red">создать</a>--}}
        @endif
    </div>

@endsection
