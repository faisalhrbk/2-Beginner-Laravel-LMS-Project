
<div style="text-align: center">
<h1>Student Login Page</h1>
<a href="/">HOME</a>
<hr>
  @if (session('success'))
            <p>{{ session('success') }}</p>
            <hr>
        @endif
        @if (session('error'))
            <p>{{ session('error') }}</p>
            <hr>
        @endif

<form action="{{ route('student.login.post') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your Email">
    <input type="password" name="password" placeholder="Enter your Password">
    <button type="submit">Login</button>
</form>
<br>
<p>New Here ! <a href="{{ route('student.register') }}">Register Here</a></p>
</div>