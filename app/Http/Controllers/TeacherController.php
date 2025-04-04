<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    function dashboard()
    {
        return view('teacher.dashboard');
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
            'email' => 'required|email|unique:students,email,' . Auth::guard('student')->id(),
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
    function addCoursePost()
    {
        return redirect()->route('teacher.dashboard')->with('success', 'course added Successfully!');
    }
}
