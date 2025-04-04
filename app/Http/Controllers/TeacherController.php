<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class TeacherController extends Controller
{
    function dashboard()
    {
        // $teacher_id = Auth::guard('teacher')->user()->id;
        // $courses = Course::where('teacher_id', $teacher_id)->get();
        //todo simple method its called laravel magic
        $teacher = Auth::guard('teacher')->user();
        $courses = $teacher->courses;


        return view('teacher.dashboard', compact('courses'));
    }


    function login()
    {
        return view('teacher.login');
    }


    function loginPost(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if (!Auth::guard('teacher')->attempt($cred)) {
            return redirect()->back()->with('error', 'invalid credentials');
        }
        return redirect()->route('teacher.dashboard')->with('success', 'login Successfully!');
    }


    function register()
    {
        return view('teacher.register');
    }


    function registerPost(Request $request)
    {
        $cred = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
            'password' => 'required|confirmed',

        ]);
        $cred['password'] = bcrypt($cred['password']);
        if (!Teacher::create($cred)) {
            return redirect()->back()->with('error', 'failed to register! try again');
        };
        return redirect()->route('teacher.login')->with('success', 'registration successfully! now you can login');
    }


    function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login');
    }


    function editProfile()
    {
        $teacher = Auth::guard('teacher')->user();

        return view('teacher.edit-profile', compact('teacher'));
    }


    function editProfilePost(Request $request)
    {

        $cred = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:teachers,email,' . Auth::guard('teacher')->id(),
            'address' => 'required|string',
        ]);

        $teacher = Auth::guard('teacher')->user();
        if (!$teacher->update($cred)) {
            return redirect()->back()->with('error', 'update fail');
        }
        return redirect()->route('teacher.dashboard')->with('success', 'Credentials update Successfully!');
    }


    //todo teacher course
    function addCourse()
    {
        return view('teacher.add-course');
    }
    function addCoursePost(Request $request)
    {

        $course = $request->validate([
            'title' => 'required|string',
            'category' => 'required|in:computer,biology,arts,engineering',
            'price' => 'required|integer',
            'status' => 'required|in:active,inactive',
            'description' => 'required|string'
        ]);
        $course['teacher_id'] = Auth::guard('teacher')->id();
        Course::create($course);
        if (!Course::create($course)) {
            return redirect()->back()->with('error', 'invalid fields while adding course');
        };
        return redirect()->route('teacher.dashboard')->with('success', 'course added Successfully!');
    }
}
