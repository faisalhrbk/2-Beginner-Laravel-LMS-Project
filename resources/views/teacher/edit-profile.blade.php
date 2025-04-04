<div style="text-align: center">
<h1>Here you can edit your profile</h1>
<a href="/">HOME</a>
<hr>
<p>ill send value later</p>
<form action="{{ route('teacher.edit.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <br>
    <input type="email" placeholder="enter your email" name="email">
    <br>
    <input type="number" placeholder="enter your age" name="age">
    <br>
    <input type="text" placeholder="enter your address" name="address">
    <br>
    <p>sorry rn you can't update password</p>
    {{-- <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" placeholder="confirm password"> --}}
    <br>
    <button type="submit">Update Details</button>
</form>
<br>
<p><a href="{{route('teacher.dashboard')}}">Back to Dashboard</a></p>
</div>