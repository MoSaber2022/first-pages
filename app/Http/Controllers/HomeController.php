<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function loginpage()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return redirect()->route('dashboard');
    }
    public function Dashboard()
    {
        return view('dashboard');
    }
    public function profile()
    {
        return view('profile');
    }
    public function attendance()
    {
        return view('attendance');
    }
    public function signuppage()
    {
        return view('signuppage');
    }
    public function myhome()
    {
        return view('myhome');
    }
    public function courses()
    {
        return view('courses');
    }
    public function about()
    {
        return view('about');
    }
}
