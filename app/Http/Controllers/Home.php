<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }
    public function team()
    {
        return view('team');
    }
    public function contact()
    {
        return view('contact');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function thankyou()
    {
        return view('thankyou');
    }
    public function shop()
    {
        return view('shop');
    }
    public function loginview()
    {
        return view('login');
    }
    public function registerview()
    {
        return view('register');
    }
    public function forgotpass()
    {
        return view('forgotpass');
    }
}
