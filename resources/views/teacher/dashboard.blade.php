<div style="text-align: center">
    <h1>This is Teacher Dashboard page</h1>
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

    <h3>here you can add courses & update your profile</h3>
    <a href="{{ route('teacher.edit') }}">Update Profile</a>
    <br>
    <p>Add Course for Students: <a href="{{ route('teacher.course.add') }}">Add</a></p>

    <h1>Here are Courses that You have Add!</h1>

    @forelse ($courses as $course)
     
            <p><strong>📘 Title:</strong> {{ $course->title }}</p>
            <p><strong>Category:</strong> {{ $course->category }}</p>
            <p><strong>Price:</strong> Rs {{ $course->price }}</p>
            <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>
            <p><strong>Description:</strong> {{ $course->description }}</p>

            <button>
                <a href="{{ route('teacher.course.edit', $course->id) }}">Edit Course</a>
            </button>
            <form action="{{ route('teacher.course.delete', $course->id) }}" method="POST" style="display:inline; ">
                @csrf
                @method('DELETE')
                <button style="background:red" type="submit"
                    onclick="return confirm('Are you sure you want to delete this course?')">
                    Delete Course
                </button>
            </form>
    

        @empty
            <p>No courses found.</p>
    @endforelse

    <hr>
    <a href="{{ route('teacher.logout') }}">Logout!</a>
