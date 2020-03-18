<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Page;

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
    
    public function getRouteKeyName ()
    {
        return 'slug';
    }
    public function index ()
    {
        return view ('customer.services.services');
    }

    public function show (Page $page)
    {
        return view('customer.services.service', compact('page'));
    }
}
