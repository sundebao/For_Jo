<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
      // return 'Home/index';
      return view('home/index');
    }

}
