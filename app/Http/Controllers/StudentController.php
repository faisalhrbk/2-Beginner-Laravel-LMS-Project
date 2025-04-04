<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class StudentController extends Controller
{
    function dashboard()
    {
        //  here ill add checks
        return view('student.dashboard');
    }
    function login()
    {
        return view('student.login');
    }
    function loginPost(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if (!Auth::guard('student')->attempt($cred)) {
            return redirect()->back()->with('error', 'invalid credentials');
        }
        return redirect()->route('student.dashboard');
    }
    function register()
    {
        return view('student.register');
    }
    function registerPost()
    {
        //here ill register

        return redirect()->route('student.login');
    }
    function logout()
    {
        //here ill logout him
        return redirect()->route('student.dashboard');
    }
    function editProfile()
    {
        return view('student.edit-profile');
    }
    function editProfilePost()
    {
        // here ill edit profile
        return redirect()->back();
    }
}
