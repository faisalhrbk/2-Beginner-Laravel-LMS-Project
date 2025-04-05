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
    <h2 >Apply Filters</h2>
    <form action="{{ route('student.courses') }}" method="GET">
    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="">Select Category</option>
        <option value="computer" {{ request('category') == 'computer' ? 'selected' : '' }}>Computer</option>
        <option value="biology" {{ request('category') == 'biology' ? 'selected' : '' }}>Biology</option>
        <option value="arts" {{ request('category') == 'arts' ? 'selected' : '' }}>Arts</option>
        <option value="engineering" {{ request('category') == 'engineering' ? 'selected' : '' }}>Engineering</option>
    </select>

    <label for="price_min">Min Price:</label>
    <input type="number" name="price_min" min="0" value="{{ request('price_min') }}" placeholder="Min Price">

    <label for="price_max">Max Price:</label>
    <input type="number" name="price_max" min="0" value="{{ request('price_max') }}" placeholder="Max Price">

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="">Select Status</option>
        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>

    <button type="submit">Filter</button>
</form>

    @forelse ($courses as $course)
        <h4>teacher Name: <strong>{{ $course->teacher->name }}</strong></h4>
        <p><strong>📘 Title:</strong> {{ $course->title }}</p>
        <p><strong>Category:</strong> {{ $course->category }}</p>
        <p><strong>Price:</strong> Rs {{ $course->price }}</p>
        <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>
        <p><strong>Description:</strong> {{ $course->description }}</p>
        <form action="{{ route('student.course.enroll', $course->id) }}" method="POST">
            @csrf
            <button type="submit" style="padding: 4px; background-color:yellow; cursor:pointer">Enroll in Course</button>
        </form>

    @empty
        <p>No courses found.</p>
    @endforelse
    <br>

    <hr>
    <a href="{{ route('student.logout') }}">Logout!</a>
</div>
