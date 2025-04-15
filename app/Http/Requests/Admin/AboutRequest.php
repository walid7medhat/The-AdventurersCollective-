<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class AboutRequest extends FormRequest
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
                    // 'image_vision'=>'nullable|image',
                    // 'image_message'=>'nullable|image',
                    // 'image_description'=>'nullable|image',
                    // 'video'=>'nullable|image',
                    'message'=>'required|string',
                    'objective'=>'required|string',
                    'vision'=>'required|string',
                    'description'=>'required|string',
                    'expedition'=>'required|string',
                    // 'team'=>'required|string',
                    // 'safety'=>'required|string',
                  
                ];
            
    }

  
    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
 


}
