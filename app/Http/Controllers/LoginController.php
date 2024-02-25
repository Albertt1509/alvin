<?php

namespace App\Http\Controllers;
use App\Modals\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function show (){
        return view ('admin.dashboard.dashboard');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt( $credentials)) {
            // Authentication 
           return redirect('/dashboard');
        }
        return redirect()->back()->withInput()->withErrors(['login_failed' => 'username & password salah']);

    }
        public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
