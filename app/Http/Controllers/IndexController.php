<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about',["pageTitle"=>"about-page"]);
    }
    public function contact() {
        return view('contact',["pageTitle"=>"contact-page"]);
    }
}
