<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    protected $rules = [
        'title'         => 'required',
        'slug'          => 'required|unique:posts',
        'body'          => 'required',
        'category_id'   => 'required',
        'published_at'  => 'date_format:Y-m-d H:i:s',
        'image'         => 'mimes:jpg,jpeg,bmp,png'
    ];
    protected $request_method;
    protected $id;

    public function __construct()
    {
        $this->request_method = strtoupper($request->method());

        $segments = $request->segments();
        $this->id = end($segments);
    }

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

    }
}
