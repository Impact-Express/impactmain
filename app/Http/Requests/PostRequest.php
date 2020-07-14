<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $slug = $this->request->get("slug");
        $rules = [
            'title'         => 'required',
            'slug'          => ['required', Rule::unique('posts')],
            'body'          => 'required',
            'category_id'   => 'required',
            'published_at'  => 'date_format:Y-m-d H:i:s',
            'image'         => 'mimes:jpg,jpeg,bmp,png'
        ];

        switch($this->method()){
            case 'PUT':
            case 'PATCH':
                $rules['slug'] = ['required', Rule::unique('posts')->ignore($slug. 'slug')];
            break;
            }
            dd($rules);
        return $rules;

    }
}
