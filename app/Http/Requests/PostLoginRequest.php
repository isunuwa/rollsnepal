<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostLoginRequest extends FormRequest
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
            'input-email' => 'required',
            'input-password' => 'required'
        ];
    }

    /**
     * Display the validation message that apply to the request
     *
     * @return array
     */
    public function messages() {
        return [
            'input-email.required'    => 'Email address is required',
            'input-password.required' => 'Password is required'
        ];
    }
}
