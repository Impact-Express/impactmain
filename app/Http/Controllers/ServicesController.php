<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportRequestSent as ImportRequestSentRequest;
use App\Mail\ConsultationSent;
use App\Mail\ImportRequestSent;
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
            case 'services/uk-overnight':
                return view('customer.services.uk-overnight', compact('page'));
                break;
            case 'services/worldwide-imports':
                return view('customer.services.imports', compact('page'));
                break;
            case 'services/ietrax':
                return view('customer.services.ietrax', compact('page'));
                break;
            case 'services/dangerous-goods':
                return view('customer.services.dangerous-goods', compact('page'));
                break;
            case 'services/e-commerce':
                return view('customer.services.e-commerce', compact('page'));
                break;
            case 'services/fulfilment-services':
                return view('customer.services.fulfilment', compact('page'));
                break;
            case 'services/mobile-phone-services':
                return view('customer.services.mobile-phone-services', compact('page'));
                break;
        }
    }
    public function dryIce (Page $page)
    {
        return view('customer.services.dry-ice', compact('page'));
    }


    public function importRequests (Page $page)
    {

        return view('customer.services.import-request', compact('page'));
    
    }
    public function sendImportRequest (ImportRequestSentRequest $request)
    {
        $data = array(
            'requestorCompanyName' => $request->requestorCompanyName,
            'requestorAddr1' => $request->requestorAddr1,
            'requestorAddr2' => $request->requestorAddr2,
            'requestorAddr3' => $request->requestorAddr3,
            'requestorCity' => $request->requestorCity,
            'requestorContactName' => $request->requestorContactName,
            'requestorTelNumber' => $request->requestorTelNumber,
            'requestorEmailAddr' => $request->requestorEmailAddr,

            'collectionCompanyName' => $request->collectionCompanyName,
            'collectionAddr1' => $request->collectionAddr1,
            'collectionAddr2' => $request->collectionAddr2,
            'collectionAddr3' => $request->collectionAddr3,
            'collectionCountry' => $request->collectionCountry,
            'collectionCity' => $request->collectionCity,
            'collectionZip' => $request->collectionZip,
            'collectionContactName' => $request->collectionContactName,
            'collectionTelNumber' => $request->collectionTelNumber,
            'collectionEmailAddr' => $request->collectionEmailAddr,
            'collectionAdditionalNotes' => $request->collectionAdditionalNotes,

            'deliveryCompanyName' => $request->collectionCompanyName,
            'deliveryAddr1' => $request->deliveryAddr1,
            'deliveryAddr2' => $request->deliveryAddr2,
            'deliveryAddr3' => $request->deliveryAddr3,
            'deliveryCountry' => $request->deliveryCountry,
            'deliveryZip' => $request->deliveryZip,
            'deliveryCity' => $request->deliveryCity,
            'deliveryContactName' => $request->deliveryContactName,
            'deliveryTelNumber' => $request->deliveryTelNumber,

            'billingRef' => $request->billingRef,
            'collectionDate' => $request->collectionDate,
            'goodsDesc' => $request->goodsDesc,
            'currency' => $request->currency,
            'goodsValue' => $request->goodsValue,

            'shipmentPieces' => $request->shipmentPieces


        );
        // dd($request->all());
        Mail::to('cameron@impactexpress.co.uk')->send(new ImportRequestSent($data));
        return back()->with('success', 'Thank you for contacting us');
    }
}