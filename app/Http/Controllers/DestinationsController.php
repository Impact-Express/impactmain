<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class DestinationsController extends Controller
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.destinations.destinations');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        dd($slug);

        switch ($slug) {
            case 'destinations/USA':
                return view('customer.destinations.USA', compact('page'));
                break;
            case 'destinations/canada':
                return view('customer.destinations.CANADA', compact('page'));
                break;
            case 'destinations/france':
                return view('customer.destinations.FRANCE', compact('page'));
                break;
            case 'destinations/germany':
                return view('customer.destinations.CANADA', compact('page'));
                break;
            case 'destinations/italy':
                return view('customer.destinations.CANADA', compact('page'));
                break;
            case 'destinations/spain':
                return view('customer.destinations.CANADA', compact('page'));
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
