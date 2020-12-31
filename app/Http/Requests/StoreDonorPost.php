<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonorPost extends FormRequest
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
            'name' => 'required|max:200',
            'email' => 'required|max:200|unique:donors,email,' . $this->id,
            'phone' => 'required|max:20',
            'address' => 'required|max:200',
            'blood_group' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'email.unique' => 'You are already registered as donor!',
        ] ;
    }
}
