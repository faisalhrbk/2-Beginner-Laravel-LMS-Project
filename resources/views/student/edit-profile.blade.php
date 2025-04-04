<h1>Here you can edit your profile</h1>
<p>ill send value later</p>
<form action="{{route('student.register.post')}}" method="POST">
    <h1></h1>
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <input type="email" placeholder="enter your email" name="email">
    <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" >
    <button type="submit">Register</button>
</form>