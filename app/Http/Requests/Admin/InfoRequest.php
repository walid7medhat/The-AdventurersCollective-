<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class InfoRequest extends FormRequest
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
              
                'image'=>'nullable|image',
                'name'=>'required',  
                'hint1'=>'nullable|string',
                'hint2'=>'nullable|string',
              
                

        ];
    }

    public function messages()
    {  
         return [
            'logo.required'=>__('site.logo required'),
            'logo.image'=>__('site.must be image.'),
            'logo_footer.image'=>__('site.must be image.'),
            'logo_footer.required'=>__('site.logo_footer required'),
            'icon.image'=>__('site.must be image.'),
            'icon.required'=>__('site.icon required'),

            'name.required'=>__('site.name required'),
            'address.required'=>__('site.address required'),
            'description.required'=>__('site.description required'),

            'email.required'=>__('site.name required'),
            'phone.required'=>__('site.name required'),

        ];
    }
    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
}
