<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('about.index');
    }

    public function contact(){
        return view('contact.index');
    }

    public function team(){
        return view('team.index');
    }

    public function teamDetails(){
        return view('team.show');
    }

    public function blog(){
        return view('blog.index');
    }

    public function blogDetails(){
        return view('blog.show');
    }

    public function course(){
        return view('course.index');
    }

    public function courseDetails(){
        return view('course.show');
    }
}
