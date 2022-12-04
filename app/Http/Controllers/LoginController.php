<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function login (){
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect('/home');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }


    public function masterlogin (){
        if (Auth::check()) {
            return view('login_master');
        } else {
            return view('home');
        }
    }

    public function actionmaster(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect('/register');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/masterlogin');
        }
    }

    public function master (){
        if (Auth::check()) {
            return view('master');
        } else {
            return view('home');
        }
    }

    
}
