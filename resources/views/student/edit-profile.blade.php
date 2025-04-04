<h1>Here you can edit your profile</h1>
<p>ill send value later</p>
<form action="{{ route('student.edit.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter your full name">
    <input type="email" placeholder="enter your email" name="email">
    <input type="number" placeholder="enter your age" name="age">
    <input type="text" placeholder="enter your address" name="address">
    <input type="number" placeholder="enter your class" name="class">
    <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation">
    <button type="submit">Update Details</button>
</form>
<br>
<p><a href="{{route('student.dashboard')}}">Back to Dashboard</a></p>
