<div style="text-align: center">
    <h1>This is Student Add Courses page</h1>
    <a href="/">Home</a>
    <br>
    <a href="{{ route('student.dashboard') }}">Go To Dashboard</a>
    <hr>
    @if (session('success'))
        <p>{{ session('success') }}</p>
        <hr>
    @endif
    @if (session('error'))
        <p>{{ session('error') }}</p>
        <hr>
    @endif

    <h3>Here are List of Available Courses! You can Enroll in Courses as much as you want </h3>
    <h4>apply filters</h4>
    @forelse ($courses as $course)
        <h4>teacher Name: <strong>{{ $course->teacher->name }}</strong></h4>
        <p><strong>📘 Title:</strong> {{ $course->title }}</p>
        <p><strong>Category:</strong> {{ $course->category }}</p>
        <p><strong>Price:</strong> Rs {{ $course->price }}</p>
        <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>
        <p><strong>Description:</strong> {{ $course->description }}</p>
        <button><a href="{{ route('student.enroll.course', $course->id) }}">Enroll in Course</a></button>
    @empty
        <p>No courses found.</p>
    @endforelse
    <br>

    <hr>
    <a href="{{ route('student.logout') }}">Logout!</a>
</div>
