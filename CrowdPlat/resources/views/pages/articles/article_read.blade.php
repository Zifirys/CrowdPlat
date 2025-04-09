@extends('layout.main')

@section('title', 'Чтение поста')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/articles.css') }}">
@endsection

@section('content')
    <section class="post-read">
        <div class="container">
            <div class="post">
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h1 class="post-title">{{ $article->title }}</h1>
                    <a href="{{ route('article.edit') }}" class="btn btn-red">Редактировать</a>
                </div>

                <p class="post-meta">Автор: Имя | Дата публикации: {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}</p>

                <div class="post-content">
{{--             отступы и переносиы должны засчитываться!--}}
                    <p>{{ $article->content }}</p>
                </div>

                <div class="post-actions d-flex justify-content-between align-items-center mt-3">
                    <div class="like-button" onclick="toggleLike(this)">
                        <i class="bi bi-heart"></i> <span class="like-count">{{ $article->likes_count }}</span>
                    </div>
                    <a href="" class="btn btn-dark">Назад</a>
                </div>
            </div>

            <div class="comment-form mt-5">
                <h4>Вы можете оставить комментарий</h4>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Введите ваш комментарий..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-red ">Отправить</button>
                </form>
            </div>

            <div class="comments mt-4">
                <div class="comment-list">
                    <div class="comment p-3 border rounded mb-3">
                        <p class="comment-author font-weight-bold">Пользователь 1</p>
                        <p class="comment-text">Отличная статья! Спасибо за информацию.</p>
                    </div>
                    <div class="comment p-3 border rounded mb-3">
                        <p class="comment-author font-weight-bold">Пользователь 2</p>
                        <p class="comment-text">Очень полезно, жду новых публикаций.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleLike(element) {
        let icon = element.querySelector("i");
        let countElement = element.querySelector(".like-count");
        let count = parseInt(countElement.innerText);

        if (icon.classList.contains("bi-heart")) {
            icon.classList.remove("bi-heart");
            icon.classList.add("bi-heart-fill");
            element.classList.add("liked");
            count++;
        } else {
            icon.classList.remove("bi-heart-fill");
            icon.classList.add("bi-heart");
            element.classList.remove("liked");
            count--;
        }

        countElement.innerText = count;
    }
    </script>
@endsection
