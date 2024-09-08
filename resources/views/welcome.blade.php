<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My To-Do List App') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
        }

        .welcome-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .welcome-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .welcome-buttons a {
            text-decoration: none;
            padding: 15px 40px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .welcome-buttons a:hover {
            background-color: #0056b3;
        }

        .description {
            margin-top: 10px;
            font-size: 1.1rem;
            color: #666;
        }

        .header-logo {
            font-weight: bold;
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 30px;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <div class="header-logo">
        {{ config('app.name', 'My To-Do List App') }}
    </div>
    <h1 class="welcome-title">Susun Task mu.</h1>
    <p class="description">-------------------------------------------------------</p>

    <div class="welcome-buttons">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </div>
</div>

<div class="footer">
    &copy; {{ date('Y') }} Alexander Almas Santosa
</div>

</body>
</html>
