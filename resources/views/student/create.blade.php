<h1>Student's Page</h1>

<form action="{{route('student.create')}}" method="POST">
    <h1></h1>
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <input type="email" placeholder="enter your email" name="email">
    <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" >
    <button type="submit">Register</button>
</form>
<br>
<p>New Here! <a href=""></a></p>