<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function inicio()
    {
        return view('welcome');
    }

  
}
