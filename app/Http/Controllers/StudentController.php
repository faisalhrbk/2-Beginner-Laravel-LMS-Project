<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
    function registerPost(Request $request)
    {
        $cred = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer|min:10|max:100',
            'address' => 'required|string',
            'class' => 'required',
            'password' => 'required|confirmed',

        ]);
        $cred['password'] = bcrypt($cred['password']);
        if (!Student::create($cred)) {
            return redirect()->back()->with('error', 'failed to register! try again');
        };
        return redirect()->route('student.login')->with('success', 'registration successfully! now you can login');
    }
    function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
    function editProfile()
    {
        $student = Auth::guard('student')->user();
        return view('student.edit-profile', compact('student'));
    }
    function editProfilePost(Request $request)
    {

        $cred = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:students,email' . Auth::guard('student')->id(),
            'age' => 'required|integer|min:10|max:100',
            'address' => 'required|string',
            'class' => 'required',

        ]);
        $student = Auth::guard('student')->user();
        if (!$student->update($cred)) {
            return redirect()->back()->with('error', 'update fail');
        }
        return redirect()->route('student.dashboard')->with('success', 'Credentials update Successfully!');
    }
}
