@extends('layout.main')

@section('title', 'Прохождение теста')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/tests.css') }}">
@endsection

@section('content')

    <div class="container mt-4">
        <div class="test-container p-4">
            <h2 class="text-center">Тестирование</h2>
            
            <div class="test-card p-3 mt-3">
                <h4 class="question" style="border: none;">1. Какой цвет вам больше нравится?</h4>
                <div class="question-container d-flex flex-column">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="answer1">
                        <label class="form-check-label" for="answer1">Красный</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="answer2">
                        <label class="form-check-label" for="answer2">Черный</label>
                    </div>
                </div>
            </div>

            <div class="test-card p-3 mt-3">
                <h4 class="question" style="border: none;">2. Выберите ваши любимые виды спорта:</h4>
                <div class="question-container d-flex flex-column">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sport1">
                        <label class="form-check-label" for="sport1">Футбол</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sport2">
                        <label class="form-check-label" for="sport2">Баскетбол</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sport3">
                        <label class="form-check-label" for="sport3">Теннис</label>
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-end">
                <button class="btn btn-red mt-4">Узнать ответ</button>
            </div>
        </div>
    </div>

@endsection