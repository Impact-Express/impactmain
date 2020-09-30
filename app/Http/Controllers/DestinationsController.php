<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationSent;
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
        // dd($slug);


        switch ($slug) {
            case 'destinations/USA':
                $bannerImage = url('/storage/destinations/USA-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.USA', compact('page', 'bannerImage'));
                break;
            case 'destinations/canada':
                $bannerImage = url('/storage/destinations/Canada-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.CANADA', compact('page', 'bannerImage'));
                break;
            case 'destinations/france':
                $bannerImage = url('/storage/destinations/France-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.FRANCE', compact('page', 'bannerImage'));
                break;
            case 'destinations/germany':
                $bannerImage = url('/storage/destinations/Germany-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.GERMANY', compact('page', 'bannerImage'));
                break;
            case 'destinations/italy':
                $bannerImage = url('/storage/destinations/Italy-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.ITALY', compact('page', 'bannerImage'));
                break;
            case 'destinations/australia':
                $bannerImage = url('/storage/destinations/Australia-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.AUSTRALIA', compact('page', 'bannerImage'));
                break;
            case 'destinations/sweden':
                $bannerImage = url('/storage/destinations/Sweden---Country-Banner-v2---Impact-Express.jpg');
                return view('customer.destinations.SWEDEN', compact('page', 'bannerImage'));
                break;
            case 'destinations/hong-kong':
                $bannerImage = url('/storage/destinations/Hong-Kong-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.HONG-KONG', compact('page', 'bannerImage'));
                break;
            case 'destinations/japan':
                $bannerImage = url('storage/destinations/Japan---Country-Banner-v2---Impact-Express.jpg');
                return view('customer.destinations.JAPAN', compact('page', 'bannerImage'));
                break;
            case 'destinations/new-zealand':
                $bannerImage = url('/storage/destinations/New-Zealand-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.NEW-ZEALAND', compact('page', 'bannerImage'));
                break;
            case 'destinations/UAE':
                $bannerImage = url('/storage/destinations/UAE-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.UAE', compact('page', 'bannerImage'));
                break;
            case 'destinations/south-korea':
                $bannerImage = url('/storage/destinations/SK---Country-Banner-v2---Impact-Express.jpg');
                return view('customer.destinations.SOUTH-KOREA', compact('page', 'bannerImage'));
                break;
            case 'destinations/brazil':
                $bannerImage = url('/storage/destinations/Brazil-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.BRAZIL', compact('page', 'bannerImage'));
                break;
            case 'destinations/pakistan':
                $bannerImage = url('/storage/destinations/Pakistan---Country-Banner-v2---Impact-Express.jpg');
                return view('customer.destinations.PAKISTAN', compact('page', 'bannerImage'));
                break;
            case 'destinations/thailand':
                $bannerImage = url('/storage/destinations/Thailand-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.THAILAND', compact('page', 'bannerImage'));
                break;
            case 'destinations/china':
                $bannerImage = url('/storage/destinations/China-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.CHINA', compact('page', 'bannerImage'));
                break;
            case 'destinations/portugal':
                $bannerImage = url('/storage/destinations/UAE-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.PORTUGAL', compact('page', 'bannerImage'));
                break;
            case 'destinations/india':
                $bannerImage = url('/storage/destinations/South-Korea-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.INDIA', compact('page', 'bannerImage'));
                break;
            case 'destinations/mexico':
                $bannerImage = url('/storage/destinations/China-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.MEXICO', compact('page', 'bannerImage'));
                break;
            case 'destinations/south-africa':
                $bannerImage = url('/storage/destinations/China-Country-Banner-v2-Impact-Express.jpg');
                return view('customer.destinations.SOUTH-AFRICA', compact('page', 'bannerImage'));
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
