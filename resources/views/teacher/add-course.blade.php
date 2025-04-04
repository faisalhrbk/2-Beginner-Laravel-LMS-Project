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
    <form action="{{ route('teacher.add.course.post') }}" method="POST">
        @csrf
        <label for="title">Course Title:
            <input type="text" name="title" placeholder="Enter Course Title">
        </label>
        <br>
        <br>
        <label for="category"> Course Category
            <select name="category" id="">
                <option value="" disabled selected>Select Category</option>
                <option value="computer">Computer</option>
                <option value="biology">Biology</option>
                <option value="arts">Arts</option>
                <option value="engineering">Engineering</option>
            </select>
        </label>
        <br>
        <br>
        <label for="price"> Course Price
            <input type="number" name="price" placeholder="enter course price" min="10" max="1000">
        </label>
        <br>
        <br>
        Status:
        <label>
            <input type="radio" name="status" value="active" checked> Active
        </label>
        <label>
            <input type="radio" name="status" value="inactive"> Inactive
        </label>
        <br>
        <br>
        <label for="description">Course description
            <input type="text" name="description" placeholder="enter course description">
        </label>
        <br>
        <br>
        <button type="submit">Add Course</button>

    </form>
    <hr>
    <a href="{{ route('teacher.logout') }}">Logout!</a>

</div>
