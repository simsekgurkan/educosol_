<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()
                ->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect(route('login'))->with('error','Doesnt work');
    }
    public function logout(){

        Auth::logout();
        return redirect(route('login'));
    }
}

