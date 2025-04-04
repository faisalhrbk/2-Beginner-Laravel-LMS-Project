<div style="text-align: center">
<h1>Here you can edit your profile</h1>
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
<form action="{{ route('student.edit.post') }}" method="POST">
    @csrf
    <input type="text" value="{{$student->name}}" name="name" placeholder="enter your full name">
    <br>
    <input type="email" value="{{$student->email}}" placeholder="enter your email" name="email">
    <br>
    <input type="string" value="{{$student->age}}" placeholder="enter your age" name="age">
    <br>
    <input type="text" value="{{$student->address}}" placeholder="enter your address" name="address">
    <br>
    <input type="string" value="{{$student->class}}" placeholder="enter your class" name="class">
    <br>
    <p>sorry rn you can't update password</p>
    {{-- <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" placeholder="confirm password"> --}}
    <br>
    <button type="submit">Update Details</button>
</form>
<br>
<p><a href="{{route('student.dashboard')}}">Back to Dashboard</a></p>
</div>
