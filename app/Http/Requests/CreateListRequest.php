<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListRequest extends FormRequest
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
            'name'          => 'required',
            'email'         => 'required|email|unique:listings',
            'website'       => 'unique:listings',
            'phone'         => 'required|unique:listings',
            'address'       => 'required|unique:listings',
            'bio'           =>'required|unique:listings|min:150'
        ];
    }
}
