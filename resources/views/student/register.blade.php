<h1>Student's Register Page</h1>

<form action="{{route('student.register.post')}}" method="POST">
    <h1></h1>
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <input type="email" placeholder="enter your email" name="email">
    <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" >
    <button type="submit">Register</button>
</form>
<br>
<p>Already Have an Account <a href="{{route('student.login')}}">Login Here</a></p>