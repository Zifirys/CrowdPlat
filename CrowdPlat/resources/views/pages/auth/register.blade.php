@extends('layout.main')

@section('title', 'Регистрация')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <h2 class="text-center">Регистрация</h2>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Имя</label>
                <input type="text" class="form-control" name="first_name" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="">Фамилия</label>
                <input type="text" class="form-control" name="last_name" placeholder="Введите фамилию">
            </div>
            <div class="form-group">
                <label for="username">Имя пользователя</label>
                <input type="text" class="form-control" name="nickname" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="" class="form-control" name="email" placeholder="Введите email">
            </div>
            <div class="form-group">
                <label for="">Email повторно</label>
                <input type="" class="form-control" name="email_confirmation" placeholder="Введите email">
            </div>
            <div class="form-group">
                <label for="">Пароль</label>
                <input type="" class="form-control" name="password" placeholder="Введите пароль">
            </div>
            <div class="form-group">
                <label for="">Пароль повторно</label>
                <input type="" class="form-control" name="password_confirmation" placeholder="Введите пароль">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-red">Зарегистрироваться</button>
            </div>
        </form>
    </div>

@endsection