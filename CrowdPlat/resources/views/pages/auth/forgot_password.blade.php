@extends('layout.main')

@section('title', 'Забыли пароль')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Сброс пароля</h2>

            <x-status />

            <x-errors />

            <form action="{{ route('') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Введите email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="nickname">Никнейм</label>
                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Введите никнейм" value="{{ old('nickname') }}">
                </div>

                <p class="text-center">При отправке мы вышлем на указанный email ссылку для сброса пароля.</p>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-red">Отправить ссылку</button>
                </div>
            </form>
        </div>
    </div>

@endsection
