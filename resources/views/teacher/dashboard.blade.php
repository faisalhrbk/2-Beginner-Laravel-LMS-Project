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
    <p>Add Course for Students: <a href="{{ route('teacher.add.course') }}">Add</a></p>

    <h2>Here are Courses that You have Add!</h2>
    <div>

        <p>course title: </p>
        <p>course Id: </p>
        <p>course Category</p>
        <p>course price :</p>
        <p>status: </p>
        <p>course description: </p>

    </div>
    <hr>
    <a href="{{ route('teacher.logout') }}">Logout!</a>

</div>
