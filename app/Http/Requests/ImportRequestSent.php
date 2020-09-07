<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequestSent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'requestorCompanyName'              => 'required',
            'requestorAddr1'                    => 'required',
            'requestorCity'                     => 'required',
            'requestorContactName'              => 'required',
            'requestorTelNumber'                => 'required',
            'requestorEmailAddr'                => 'required',

            'collectionCompanyName'             => 'required',
            'collectionAddr1'                   => 'required',
            'collectionCountry'                 => 'required',
            'collectionCity'                    => 'required',
            'collectionZip'                     => 'required',
            'collectionContactName'             => 'required',
            'collectionTelNumber'               => 'required',
            'collectionEmailAddr'               => 'required',

            'deliveryCompanyName'               => 'required',
            'deliveryAddr1'                     => 'required',
            'deliveryCountry'                   => 'required',
            'deliveryZip'                       => 'required',
            'deliveryCity'                      => 'required',
            'deliveryContactName'               => 'required',
            'deliveryTelNumber'                 => 'required',

            'collectionDate'                    => 'required',
            'goodsDesc'                         => 'required',
            'currency'                          => 'required',
            'goodsValue'                        => 'required',

        ];
        // dd($rules);
        return $rules;
    }
}
