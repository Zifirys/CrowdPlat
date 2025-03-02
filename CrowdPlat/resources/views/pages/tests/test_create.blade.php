@extends('layout.main')

@section('title', 'Создание теста')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/tests.css') }}">
@endsection

@section('content')

    <div class="container test-container">
        <h2>Создание теста</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <!-- Заголовок -->
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            
            <!-- Описание -->
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            
            <!-- Изображение -->
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" class="form-control-file" name="image" required>
            </div>
            
            <h3>Вопросы</h3>
            <div id="questions-container">

            </div>
            
            <div class="d-flex justify-content-between mt-3">
                <button type="button" class="btn-red add-question" id="add-question">Добавить вопрос</button>
                <button type="submit" class="btn-red submit-btn">Создать тест</button>
            </div>
        </form>
    </div>

    
    <script>
        // для вопросов и ответов
        document.addEventListener("DOMContentLoaded", function () {
            let questionIndex = 0;

            document.getElementById("add-question").addEventListener("click", function () {
                let container = document.getElementById("questions-container");
                let newQuestion = document.createElement("div");
                newQuestion.classList.add("question", "position-relative", "pt-5", "p-3", "rounded");
                newQuestion.setAttribute("data-index", questionIndex);
                newQuestion.innerHTML = `
                    <i class="bi bi-x-lg text-danger remove-question position-absolute remove-btn" role="button"></i>
                    <div class="d-flex justify-content-between align-items-center position-relative mb-3 question-container">
                        <label class="me-2">Вопрос</label>
                        <input type="text" class="form-control flex-grow-1" name="questions[\${questionIndex}][text]" required>
                    </div>
                    <div class="answers">
                        <div class="form-group d-flex align-items-center answer">
                            <label class="me-2">Ответ</label>
                            <div class="position-relative w-100">
                                <input type="text" class="form-control flex-grow-1" name="questions[\${questionIndex}][answers][]" required>
                                <i class="bi bi-x-lg text-danger remove-answer position-absolute answer-remove-btn" role="button"></i>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary add-answer mt-2">Добавить ответ</button>
                `;
                container.appendChild(newQuestion);
                questionIndex++;
            });

            document.addEventListener("click", function (event) {
                if (event.target.classList.contains("add-answer")) {
                    let answersContainer = event.target.previousElementSibling;
                    let question = event.target.closest(".question");
                    let questionId = question.getAttribute("data-index");
                    let input = document.createElement("div");
                    input.classList.add("form-group", "d-flex", "align-items-center", "answer", "mt-2");
                    input.innerHTML = `
                        <label class="me-2">Ответ</label>
                        <div class="position-relative w-100">
                            <input type="text" class="form-control flex-grow-1" name="questions[\${questionIndex}][answers][]" required>
                            <i class="bi bi-x-lg text-danger remove-answer position-absolute answer-remove-btn" role="button"></i>
                        </div>
                    `;
                    answersContainer.appendChild(input);
                }

                if (event.target.classList.contains("remove-answer")) {
                    event.target.closest(".answer").remove();
                }

                if (event.target.classList.contains("remove-question")) {
                    event.target.closest(".question").remove();
                }
            });
        });
    </script>


@endsection
