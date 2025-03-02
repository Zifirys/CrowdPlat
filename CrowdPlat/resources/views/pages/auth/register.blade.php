@extends('layout.main')

@section('title', 'Регистрация')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <h2 class="text-center">Регистрация</h2>
        <form>
            <div class="form-group">
                <label for="">Имя</label>
                <input type="text" class="form-control" id="" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="">Фамилия</label>
                <input type="text" class="form-control" id="" placeholder="Введите фамилию">
            </div>
            <div class="form-group">
                <label for="username">Имя пользователя</label>
                <input type="text" class="form-control" id="" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="" class="form-control" id="" placeholder="Введите email">
            </div>
            <div class="form-group">
                <label for="">Email повторно</label>
                <input type="" class="form-control" id="" placeholder="Введите email">
            </div>
            <div class="form-group">
                <label for="">Пароль</label>
                <input type="" class="form-control" id="" placeholder="Введите пароль">
            </div>
            <div class="form-group">
                <label for="">Пароль повторно</label>
                <input type="" class="form-control" id="" placeholder="Введите пароль">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-red">Зарегистрироваться</button>
            </div>
        </form>
    </div>

@endsection