<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //funtion
    public function index() {
        return view('pages.home');
    }
}
