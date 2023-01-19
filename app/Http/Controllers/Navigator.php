<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigator extends Controller
{
    public function home()
    {
        return view('Template.index');
    }
    public function about()
    {
        return view('Template.about');
    }
    public function blog()
    {
        return view('Template.blog');
    }
    public function contact()
    {
        return view('Template.contact');
    }
    public function service()
    {
        return view('Template.service');
    }
    public function testimonial()
    {
        return view('Template.testimonial');
    }
    public function team()
    {
        return view('Template.team');
    }
    public function blogDetail()
    {
        return view('Template.detail');
    }
}
