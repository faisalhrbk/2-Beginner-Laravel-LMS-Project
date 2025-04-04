
<div style="text-align: center">
    <h1>This is Student Dashboard page</h1>
<a href="/">Home</a>
<hr>
  @if (session('success'))
            <p>{{ session('success') }}</p>
            <hr>
        @endif
        @if (session('error'))
            <p>{{ session('error') }}</p>
            <hr>
        @endif

<h3>here can you enroll in courses update your profile </h3>
 <a href="{{ route('student.edit') }}">Update Profile</a>
<br>
<p>Enroll in a Course <a href="#">enroll Now</a></p>
<a href="{{ route('student.logout') }}">Logout!</a>

</div>
