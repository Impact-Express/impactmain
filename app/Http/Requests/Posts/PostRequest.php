<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        return $rules = [
            'title'         => 'required',
            'slug'          => 'required|unique:posts',
            'body'          => 'required',
            'category_id'   => 'required',
            'published_at'  => 'date_format:Y-m-d H:i:s',
            'image'         => 'mimes:jpg,jpeg,bmp,png'
        ];
    }
}
