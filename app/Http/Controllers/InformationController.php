<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class InformationController extends Controller
{
    
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
            case 'information/coronavirus':
                return view('customer.information.coronavirus', compact('page'));
                break;
            case 'information/monthly-fuel-surcharge':
                return view('customer.information.fuel-surcharge', compact('page'));
                break;
            case 'information/service-level-agreement-and-surcharges':
                return view('customer.information.sla-surcharges', compact('page'));
                break;
            case 'information/remote-area-surcharges':
                return view('customer.information.remote-area-surcharges', compact('page'));
                break;
            case 'information/denied-parties':
                return view('customer.information.denied-parties', compact('page'));
                break;
            case 'information/dangerous-goods':
                return view('customer.information.dangerous-goods', compact('page'));
                break;
            case 'information/prohibited-items':
                return view('customer.information.prohibited-items', compact('page'));
                break;
            case 'information/packaging-guide':
                return view('customer.information.packaging-guide', compact('page'));
                break;
            case 'information/opening-hours':
                return view('customer.information.opening-hours', compact('page'));
                break;
            case 'information/gdpr-policy':
                return view('customer.information.gdpr-policy', compact('page'));
                break;
            case 'information/careers':
                return view('customer.information.careers', compact('page'));
                break;
            case 'information/impact-express-rate-increase-2020':
                return view('customer.information.rate-increases', compact('page'));
                break;
            case 'information/general-sanctions-warranty-and-indemnity-letter':
                return view('customer.information.indemnity-letter', compact('page'));
                break;
        }
    }
}
