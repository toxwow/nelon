<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function cafe()
    {
        return view('user.cafe');
    }

    public function term()
    {
        return view('user.term');
    }

    public function price()
    {
        return view('user.price');
    }

    public function save()
    {
        return view('user.save');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
