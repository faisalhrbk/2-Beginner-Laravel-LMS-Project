<h1>Student Login Page</h1>

<form action="{{route('student.login.post')}}" method="POST">
    <input type="email" name="email" placeholder="Enter your Email">
    <input type="password" name="password" placeholder="Enter your Password">
    <button type="submit">Login</button>
</form>