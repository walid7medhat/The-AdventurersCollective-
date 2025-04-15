<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class UserRequest extends FormRequest
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
        if($request->method() == "POST"){
                return [
                    'name'=>'required',
                    'email'=>'required|unique:users,email',
                    'phone'=>'required|unique:users,phone|max:13|min:10',
                    'password'=>'required|confirmed|min:8',
                ];
            }else{
                return [
                    'name'=>'required',
                    'email'=>'required|email|unique:users,email,'.$request['user_id'],
                    'phone'=>'required|unique:users,phone,'.$request['user_id'],
                    'password'=>'nullable|confirmed|min:8',
                ];
            }
    }

    
  
    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
 


}
