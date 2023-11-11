<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;


class FrontController extends Controller
{

    public function __construct(){
        view()->share('services',Service::all());
    }
    public function home(){
        $data = User::all();
        return view('front.index', compact('data'));
    }

    public function about(){
        return view('front.about');
    }

    public function services(){
        $services = Service::all();
        return view('front.services',compact('services'));
    }


    public function staff(){
        $data = User::all();
        return view('front.staff',compact('data'));
    }

    public function events(){
        $data = Event::all();
        return view('front.event',compact('data'));
    }

    public function eventsingle($slug){
        $event = Event::whereSlug($slug)->first() ?? abort(403,'Etkinlik yok');
        $data['event'] = $event;
        return view('front.event-single',$data);
    }

    public function contact(){
        return view('front.contact');
    }

}
