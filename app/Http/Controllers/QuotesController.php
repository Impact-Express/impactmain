<?php

namespace App\Http\Controllers;

use App\Mail\QuoteSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.business-quote');
    }

    /**
     *     Send an Email to the Recipient
     *    
     *     @param Request $request
     *     @return void
     *     @throws ValidationException
    */
    public function send(Request $request)
    {
        $data = array(
                'company-name' => $request->companyName,
                'contact-name' => $request->contactName,
                'contact-surname' => $request->contactSurname,
                'email-address' => $request->emailAddress,
                'telephone-number' => $request->telephoneNumber,
                'delivery-destinations' => $request->deliveryDestinations,
                'parcels-sent-per-month' => $request->parcelsPerMonth,
                'comments' => $request->comments
            );
//        dd($data);
        Mail::to('cameron@impactexpress.co.uk')->send(new QuoteSent($data));
        return back()->with('success', 'Thank you for contacting us');
    }
}
