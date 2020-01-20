<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function send (Request $request)
    {
        $data = array(
            'contact-name' => $request->contactName,
            'email-address' => $request->emailAddress,
            'telephone-number' => $request->telephoneNumber,
        );
        Mail::to('cameron@impactexpress.co.uk')->send(new ConsultationSent($data));
        return back()->with('success', 'Thank you for contacting us');
    }
    public function index ()
    {
       return view('customer.services.services');
    }
    
    public function express ()
    {
       return view('customer.services.express');
    }
    
    public function economy ()
    {
        return view('customer.services.economy');
    }

    public function overnight ()
    {
        return view('customer.services.overnight');
    }
    
    public function imports ()
    {
        return view('customer.services.imports');
    }

    public function dangerousGoods ()
    {
        return view('customer.services.dangerousGoods');
    }

    public function dangerousGoodsDryIce ()
    {
        return view('customer.services.dangerousGoodsDryIce');
    }

    public function ecommerce ()
    {
        return view('customer.services.ecommerce');
    }

    public function fufilment ()
    {
        return view('customer.services.fufilment');
    }

    public function mobileServices ()
    {
        return view('customer.services.mobileServices');
    }
}
