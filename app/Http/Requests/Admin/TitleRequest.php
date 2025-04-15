<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class TitleRequest extends FormRequest
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
              
               
                'title_ar'=>'nullable|string|max:255',
                'title_en'=>'nullable|string|max:255',

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

            'name_ar.required'=>__('site.name_ar required'),
            'address_ar.required'=>__('site.address_ar required'),
            'description_ar.required'=>__('site.description_ar required'),

            'email.required'=>__('site.name_ar required'),
            'phone.required'=>__('site.name_ar required'),

        ];
    }
    


    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
     }
}
