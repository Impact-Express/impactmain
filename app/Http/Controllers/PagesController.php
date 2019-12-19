<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }
    public function businessLogin() {
        return view('login');
    }
    public function contactUs() {
        return view('contact');
    }
}
