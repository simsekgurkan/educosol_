<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{
    public function index(){

    }
    public function about(){
        return view('front.about');
    }
    public function staff(){
        $data = User::all();
        return view('front.staff',compact('data'));
    }
}
