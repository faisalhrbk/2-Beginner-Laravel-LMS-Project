<h1>Student Login Page</h1>

<form action="{{ route('student.login.post') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your Email">
    <input type="password" name="password" placeholder="Enter your Password">
    <button type="submit">Login</button>
</form>
<br>
<p>New Here ! <a href="{{ route('student.register') }}">Register Here</a></p>
