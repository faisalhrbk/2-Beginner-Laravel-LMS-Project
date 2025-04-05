<div style="text-align: center">
    <h1>Add Course</h1>
    <a href="/">HOME</a>
    <br>
    <a href="{{ route('teacher.dashboard') }}">Back to Dashboard</a>
    <hr>
    @if (session('success'))
        <p>{{ session('success') }}</p>
        <hr>
    @endif
    @if (session('error'))
        <p>{{ session('error') }}</p>
        <hr>
    @endif
    <form action="{{ route('teacher.course.edit.post', $course->id) }}" method="POST">
        @csrf

        <label for="title">Course Title:
            <input type="text" name="title" value="{{ $course->title }}" placeholder="Enter Course Title">
        </label>
        <br><br>

        <label for="category">Course Category:
            <select name="category">
                <option value="" disabled>Select Category</option>
                <option value="computer" {{ $course->category == 'computer' ? 'selected' : '' }}>Computer</option>
                <option value="biology" {{ $course->category == 'biology' ? 'selected' : '' }}>Biology</option>
                <option value="arts" {{ $course->category == 'arts' ? 'selected' : '' }}>Arts</option>
                <option value="engineering" {{ $course->category == 'engineering' ? 'selected' : '' }}>Engineering
                </option>
            </select>
        </label>
        <br><br>

        <label for="price">Course Price:
            <input type="number" name="price" value="{{ $course->price }}" placeholder="Enter course price"
                min="10" max="1000">
        </label>
        <br><br>

        Status:
        <label>
            <input type="radio" name="status" value="active" {{ $course->status == 'active' ? 'checked' : '' }}>
            Active
        </label>
        <label>
            <input type="radio" name="status" value="inactive" {{ $course->status == 'inactive' ? 'checked' : '' }}>
            Inactive
        </label>
        <br><br>

        <label for="description">Course Description:
            <input type="text" name="description" value="{{ $course->description }}"
                placeholder="Enter course description">
        </label>
        <br><br>

        <button type="submit">Update Course</button>
    </form>

    <hr>
    <a href="{{ route('teacher.logout') }}">Logout!</a>

</div>
