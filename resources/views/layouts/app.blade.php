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
        <a href="{{ route('teacher.login') }}">Start as Teacher</a>
        <br>
        <a href="{{ route('student.login') }}">Start as Student</a>

    </nav>
</body>

</html>
