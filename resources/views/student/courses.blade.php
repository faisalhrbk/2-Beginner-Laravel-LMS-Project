
<div style="text-align: center">
    <h1>This is Student Add Courses page</h1>
<a href="/">Home</a>
<br>
<a href="{{route('student.dashboard')}}">Go To Dashboard</a>
<hr>
  @if (session('success'))
            <p>{{ session('success') }}</p>
            <hr>
        @endif
        @if (session('error'))
            <p>{{ session('error') }}</p>
            <hr>
        @endif

<h3>Here are List of Available  Courses! You can Enroll as much as you want </h3>
<h3>apply filters</h3>
<br>
 
<hr>
<a href="{{ route('student.logout') }}">Logout!</a>
</div>
