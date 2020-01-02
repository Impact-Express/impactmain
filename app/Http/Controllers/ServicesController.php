<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index ()
    {
       return view('services.services');
    }
    
    public function express ()
    {
       return view('services.express');
    }
    
    public function economy ()
    {
        return view('services.economy');
    }

    public function overnight ()
    {
        return view('services.overnight');
    }
    
    public function imports ()
    {
        return view('services.imports');
    }

    public function dangerousGoods ()
    {
        return view('services.dangerousGoods');
    }

    public function dangerousGoodsDryIce ()
    {
        return view('services.dangerousGoodsDryIce');
    }

    public function ecommerce ()
    {
        return view('services.ecommerce');
    }

    public function fufilment ()
    {
        return view('services.fufilment');
    }

    public function mobileServices ()
    {
        return view('services.mobileServices');
    }
}
