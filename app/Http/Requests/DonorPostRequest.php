<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonorPostRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|unique:donors',
            'email' => 'required|unique:donors|email',
            'address' => 'required',
            'blood_group' => 'required',
        ];
         switch($this->method())
        {
            case 'PUT':
            case 'PATCH':
                $rules['email'] = 'required|unique:donors,email,' . $this->id;
                $rules['phone'] = 'required|unique:donors,phone,' . $this->id;
                break;
        }
        return $rules;
    }

}
