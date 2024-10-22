<?php

namespace App\Http\Controllers;

use App\Mail\ContactSent;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        return view('customer.index');
    }
    public function businessLogin() {
        return view('customer.login');
    }
    public function contactUs() {
        return view('customer.contact');
    }
    public function send(Request $request)
    {
        $data = array(
            'contact-name' => $request->contactFullName,
            'email-address' => $request->contactEmailAddr,
            'contact-message' => $request->contactMessage
        );
//        dd($data);
    Mail::to('cameron@impactexpress.co.uk')->send(new ContactSent($data));
    return back()->with('success', 'Thank you for contacting us');
    }
}
