<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Service;
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
    public function service(){
        $data = Service::all();
        return view('front.service',compact('data'));
    }
    public function event(){
        $data = Event::all();
        return view('front.event',compact('data'));
    }

}
