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

    <h2>Here are Courses that You have Add!</h2>
 

        @forelse ($courses as $course)
            <ul style="padding: 15px; list-style: none; max-width: 500px;">
                <li><strong>📘 Title:</strong> {{ $course->title }}</li>
                <li><strong>Category:</strong> {{ $course->category }}</li>
                <li><strong>Price:</strong> Rs {{ $course->price }}</li>
                <li><strong>Status:</strong> {{ ucfirst($course->status) }}</li>
                <li><strong>Description:</strong> {{ $course->description }}</li>

                <button>
                    <a href="{{ route('teacher.course.edit', $course->id) }}" >Edit Course</a>
                </button>
                <form action="{{ route('teacher.course.delete', $course->id) }}" method="POST" style="display:inline; ">
                    @csrf
                    @method('DELETE')
                    <button style="background:red" type="submit" onclick="return confirm('Are you sure you want to delete this course?')">
                        Delete Course
                    </button>
                </form>

            @empty
                <p>No courses found.</p>
        @endforelse


    <hr>
    <a href="{{ route('teacher.logout') }}">Logout!</a>

</div>
