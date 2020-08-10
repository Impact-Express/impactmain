<?php

namespace App\Http\Controllers;

use App\Mail\ParcelDetailsSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.send-my-parcel');
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
                'sender-company-name' => $request->senderCompanyName,
                'sender-address-1' => $request->senderAddr1,
                'sender-address-2' => $request->senderAddr2,
                'sender-town' => $request->senderTown,
                'sender-zipcode' => $request->senderZipPostalCode,
                'sender-country' => $request->senderCountry,
                'sender-contact-name' => $request->senderContactName,
                'sender-email-address' => $request->senderEmailAddr,
                'sender-telephone-number' => $request->senderTelNumber,
                'sender-eori-number' => $request->senderEORINumber,

                'reciever-company-name' => $request->recieverCompanyName,
                'reciever-address-1' => $request->recieverAddr1,
                'reciever-address-2' => $request->recieverAddr2,
                'reciever-town' => $request->recieverTown,
                'reciever-zipcode' => $request->recieverZipPostalCode,
                'reciever-country' => $request->recieverCountry,
                'reciever-contact-name' => $request->recieverContactName,
                'reciever-telephone-number' => $request->recieverTelNumber,

                'shipment-description' => $request->shipmentContents,
                'shipment-value' => $request->shipmentValue,
                'shipment-export-reason' => $request->shipmentExportReason,
                
            );
        Mail::to('cameron@impactexpress.co.uk')->send(new ParcelDetailsSent($data));
        return back()->with('success', 'Thank you, a member of our team will be in touch soon');
    }
}
