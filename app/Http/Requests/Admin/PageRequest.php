<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class PageRequest extends FormRequest
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
                    'title_ar'=>'required|string',
                    'title_en'=>'nullable|string',
                    'image'=>'required|image',
                    'page_ar'=>'required'


                ];
            }else{
                return [
                    'title_ar'=>'required',
                    'image'=>'nullable|image',
                    'page_ar'=>'required'
                ];
            }
    }

    
    public function messages()
    {  
         return [
            'title_ar.required'=>__('site.title_ar required'),
            'image.required'=>__('site.image required'),
            'image.image'=>__('site.must be image.'),
            'page_ar.required'=>__('site.page_ar').__('site.required'),
            'title_ar.max'=>__('site.title_ar').__('site.max')."20".__('site.charcter'),
            'title_en.max'=>__('site.title_en').__('site.max')."20".__('site.charcter'),

        ];
    }
    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
 


}
