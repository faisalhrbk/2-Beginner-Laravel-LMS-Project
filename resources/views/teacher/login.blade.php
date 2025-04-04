<div style="text-align: center">
<h1>Teacher Login Page</h1>
<a href="/">HOME</a>
<hr>

<form action="{{ route('teacher.login.post') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your Email">
    <input type="password" name="password" placeholder="Enter your Password">
    <button type="submit">Login</button>
</form>
<br>
<p>New Here ! <a href="{{ route('teacher.register') }}">Register Here</a></p>
</div>