<div style="text-align: center">
<h1>Teacher's Register Page</h1>
<a href="/">HOME</a>
<hr>

<form action="{{ route('teacher.register.post') }}" method="POST">
    <h1></h1>
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <br>
    <input type="email" placeholder="enter your email" name="email">
    <br>
    <input type="text" placeholder="enter your address" name="address">
    <br>
    <input type="password" placeholder="create  your password" name="password">
    <br>
    <input type="password" name="password_confirmation" placeholder="confirm password">
    <br>
    <br>
    <button type="submit">Register</button>
</form>
<br>
<p>Already Have an Account <a href="{{ route('teacher.login') }}">Login Here</a></p>
</div>