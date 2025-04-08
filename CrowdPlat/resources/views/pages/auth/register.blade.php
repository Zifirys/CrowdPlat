@extends('layout.main')

@section('title', 'Регистрация')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <h2 class="text-center">Регистрация</h2>

        <x-errors />

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="first_name" placeholder="Введите имя" value="{{ old('first_name') }}" />
            </div>
            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" class="form-control" name="last_name" placeholder="Введите фамилию" value="{{ old('last_name') }}" />
            </div>
            <div class="form-group">
                <label class="required">Никнейм</label>
                <input type="text" class="form-control" name="nickname" placeholder="Введите свой ник" value="{{ old('nickname') }}" required />
            </div>
            <div class="form-group">
                <label class="required">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Введите email" value="{{ old('email') }}" required />
            </div>
            <div class="form-group">
                <label class="required">Email повторно</label>
                <input type="email" class="form-control" name="email_confirmation" value="{{ old('email_confirmation') }}" placeholder="Введите email" required />
            </div>
            <div class="form-group">
                <label class="required">Пароль</label>
                <input type="password" class="form-control" name="password" placeholder="Введите пароль" value="{{ old('password') }}" required />
            </div>
            <div class="form-group">
                <label class="required">Пароль повторно</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Введите пароль" value="{{ old('password_confirmation') }}" required />
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-red">Зарегистрироваться</button>
            </div>
        </form>
    </div>

@endsection
