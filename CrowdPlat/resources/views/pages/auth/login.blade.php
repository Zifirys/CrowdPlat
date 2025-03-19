@extends('layout.main')

@section('title', 'Аутентификация')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Вход в аккаунт</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.login') }}">
                @csrf
                <div class="form-group">
                    <label>Никнейм</label>
                    <input type="text" class="form-control" placeholder="Введите свой ник" name="nickname" value="{{ old('nickname') }}" />
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" placeholder="Введите email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" placeholder="Введите пароль" name="password" value="{{ old('password') }}" />
                </div>
                <div class="form-group d-flex align-items-center">
                    <input type="checkbox" id="remember" name="remember" value="true" class="styled-checkbox">
                    <label for="remember" class="ml-2 mt-2">Запомнить меня</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-red">Войти в аккаунт</button>
                </div>
            </form>
        </div>
    </div>

@endsection