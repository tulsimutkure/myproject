<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
}
