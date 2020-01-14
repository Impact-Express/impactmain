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
    public function send()
    {
        $data = array(
            'contact-name' => $request->contactName,
            'email-address' => $request->emailAddress,
            'comments' => $request->comments
        );
//        dd($data);
    Mail::to('cameron@impactexpress.co.uk')->send(new QuoteSent($data));
    return back()->with('success', 'Thank you for contacting us');
    }
}
