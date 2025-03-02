@extends('layout.main')

@section('title', 'Аутентификация')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Вход в аккаунт</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Введите email">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" placeholder="Введите пароль">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-red">Войти в аккаунт</button>
                </div>
            </form>
        </div>
    </div>

@endsection