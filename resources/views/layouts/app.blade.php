<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS App</title>
</head>

<body style="text-align: center">
    <nav>
        <h1>welcome to LMS Project</h1>
        <hr>
        @if (session('success'))
            <p>{{ session('success') }}</p>
            <hr>
        @endif
        @if (session('error'))
            <p>{{ session('error') }}</p>
            <hr>
        @endif
        <a href="{{ route('teacher.login') }}">Start as Teacher</a>
        <br>
        <a href="{{ route('student.login') }}">Start as Student</a>

    </nav>

    <p style="margin-top:30vh; italic;">
        <hr>THIS IS PROJECT IS BUILT IN VANILLA HTML TO UNDERSTAND BASIC CORE
        CONCEPTS OF LARAVEL INCLUDING:
    <ul style="text-align:start">
        <li>CRUD OPERATIONS</li>
        <li>RELATIONSHIPS</li>
        <li> AUTHENTICATION USING AUTH CLASS</li>
    </ul>
    </p>
</body>

</html>
