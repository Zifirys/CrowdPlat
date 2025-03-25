<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Подтверждение Email</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 20px;
                    text-align: center;
                }
                .container {
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    max-width: 500px;
                    margin: auto;
                }
                .button {
                    display: inline-block;
                    padding: 10px 20px;
                    margin-top: 20px;
                    font-size: 16px;
                    color: #ffffff;
                    background-color: #007bff;
                    text-decoration: none;
                    border-radius: 5px;
                }
                .button:hover {
                    background-color: #0056b3;
                }
                p {
                    color: #333;
                }
            </style>
    </head>
    <body>
        <div class="container">
            <h2>Здравствуйте, {{ $user->nickname }}!</h2>
            <p>Вы зарегистрировались на нашем сайте. Пожалуйста, подтвердите ваш email, чтобы активировать аккаунт.</p>

            <a href="{{ $verificationUrl }}" class="button">Подтвердить Email</a>

            <p>Если кнопка не работает, скопируйте и вставьте следующую ссылку в браузер:</p>
            <p><a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a></p>

            <p>Если вы не регистрировались на нашем сайте, просто проигнорируйте это письмо.</p>
        </div>
    </body>
</html>
