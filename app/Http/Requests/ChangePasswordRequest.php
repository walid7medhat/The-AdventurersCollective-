<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ChangePasswordRequest extends FormRequest
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
    public function rules(Request $request)
    { 
                return [
                    'password'=>'required|string|confirmed|min:8',
                    'old_password'=>'required',
                ];
            
    }

    

    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
}
