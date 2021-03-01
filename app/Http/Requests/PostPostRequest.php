<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostPostRequest extends FormRequest
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
            'post_title'        => 'required|max:255',
            'post_category'     => 'required',
            'post_location'     => 'required',
            'post_description'  => 'required'
        ];
    }
}
