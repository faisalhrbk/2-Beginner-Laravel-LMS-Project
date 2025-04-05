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
    <p>Enroll in a Course <a href="{{ route('student.courses') }}">enroll Now</a></p>
    <h1>Courses you are Enrolled In</h1>
    @forelse ($courses as $course)
        <p><strong>{{ $loop->iteration }}:</strong></p>
        <p>course TITLE: {{ $course->title }}</p>
        <p>course Category: {{ $course->category }}</p>
        <p>course Status: {{ $course->status }}</p>
        <p>course Description: {{ $course->description }}</p>
        <form action="{{ route('student.remove.course.post', $course->id) }}" method="POST">
            @csrf
            <button type="submit" style="padding: 4px; background-color:rgb(255, 102, 0); cursor:pointer">Remove From
                Course</button>
        </form>
    @empty
        <h2>you are not enrolled in any course yet</h2>
    @endforelse
    <hr>
    <a href="{{ route('student.logout') }}">Logout!</a>
</div>
