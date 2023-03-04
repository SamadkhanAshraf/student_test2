<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function create()
    {
       // return 'hi';
        return view('admin.create');
    }
    public function admin()
    {
        return view('admin.admin');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function signup()
    {
        return view('admin.signup');
    }
    public function dashboard()
    {
        return view('home.dashboard');
    }
    public function about()
    {
        return view('home.about');
    }
    public function setPasswordAttribute($value)
    {
             $this->attributes['password'] = bcrypt($value);
    }
    
    public function show()
    {
        return view('auth.register');
    }


    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
