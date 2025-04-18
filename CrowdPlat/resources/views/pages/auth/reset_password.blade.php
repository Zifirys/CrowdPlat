@extends('layout.main')

@section('title', 'Сброс пароля')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Сброс пароля</h2>

            <x-status />

            <x-errors />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <input type="hidden" name="email" value="{{ request()->query('email') }}">

                <div class="form-group">
                    <label for="new-password">Новый пароль</label>
                    <input type="password" class="form-control" id="new-password" name="password" placeholder="Введите новый пароль">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Подтвердите пароль</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Повторите новый пароль">
                </div>

                <p class="text-center">При сохранении нового пароля. Ваш старый пароль будет сброшен</p>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-red">Сохранить пароль</button>
                </div>
            </form>
        </div>
    </div>

@endsection
