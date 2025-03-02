@extends('layout.main')

@section('title', 'Забыли пароль')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Сброс пароля</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Введите email">
                </div>
                <p class="text-center">При отправле вашего email, и мы вышлем вам ссылку для сброса пароля.</p>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-red">Отправить ссылку</button>
                </div>
            </form>
        </div>
    </div>

@endsection