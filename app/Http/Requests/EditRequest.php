<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditRequest extends FormRequest
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
        return [
            $rules = [
                'title'         => 'required',
                'body'          => 'required',
                'category_id'   => 'required',
                'published_at'  => 'date_format:Y-m-d H:i:s',
                'image'         => 'mimes:jpg,jpeg,bmp,png'
            ]
        ];
    }
}
