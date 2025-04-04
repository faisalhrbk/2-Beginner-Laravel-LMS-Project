<div style="text-align: center">
    <h1>Here you can edit your profile! {{ Auth::guard('teacher')->user()->name }}</h1>
    <a href="/">HOME</a>
    <hr>
    @if (session('success'))
        <p>{{ session('success') }}</p>
        <hr>
    @endif
    @if (session('error'))
        <p>{{ session('error') }}</p>
        <hr>
    @endif
    <form action="{{ route('teacher.edit.post') }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ $teacher->name }} " placeholder="enter your full name">
        <br>
        <input type="email" value="{{ $teacher->email }}" placeholder="enter your email" name="email">
        <br>
        <input type="text" value="{{ $teacher->address }}" placeholder="enter your address" name="address">
        <br>
        <p>sorry rn you can't update password</p>
        {{-- <input type="password" placeholder="create  your password" name="password">
    <input type="password" name="password_confirmation" placeholder="confirm password"> --}}
        <br>
        <button type="submit">Update Details</button>
    </form>
    <br>
    <p><a href="{{ route('teacher.dashboard') }}">Back to Dashboard</a></p>
</div>
