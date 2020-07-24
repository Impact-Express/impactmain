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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page, Request $request, $id)
    {
        $slug = $request->path();
        // dd($slug);

        switch ($slug) {
            case 'services/express':
                return view('customer.services.express', compact('page'));
                break;
            case 'services/economy':
                return view('customer.services.economy', compact('page'));
                break;
            case 'services/domestic':
                return view('customer.services.domestic', compact('page'));
                break;
            case 'services/imports':
                return view('customer.services.imports', compact('page'));
                break;
            case 'services/ietrax':
                return view('customer.destinations.ietrax', compact('page'));
                break;
        }
    }
}