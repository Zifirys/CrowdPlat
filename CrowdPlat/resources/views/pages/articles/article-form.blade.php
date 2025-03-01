@extends('layout.main')

@section('title', 'Все статьи')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/articles.css') }}">
@endsection

@section('content')

    <section class="post-form">
        <div class="container">
            <h2 class="text-center">Создать/Редактировать статьи</h2>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="content">Содержание</label>
                    <textarea id="content" name="content" class="form-control" rows="6" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-red">Сохранить</button>
                    <a href="" class="btn btn-dark">Отмена</a>
                </div>
            </form>
        </div>
    </section>

@endsection