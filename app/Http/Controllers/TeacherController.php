<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function loginPost()
    {
        //here ill add checks
        return redirect()->route('teacher.dashboard');
    }
    function register()
    {
        return view('teacher.register');
    }
    function registerPost()
    {
        //here ill register

        return redirect()->route('teacher.login');
    }
    function logout()
    {
        //here ill logout him
        return redirect()->route('teacher.dashboard');
    }
    function editProfile()
    {
        return view('teacher.edit-profile');
    }
    function editProfilePost()
    {
        // here ill edit profile
        return redirect()->back();
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
