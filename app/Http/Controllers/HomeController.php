<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login'); 
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        return view('index');
    }
}