<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class AreaRequest extends FormRequest
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
                    'name'=>'required|string|max:255|unique:areas,name,'.$this->area,
                    'title'=>'required|string|max:255',
                    'description'=>'required|string|max:255',
                    'title2'=>'required|string|max:255',
                    'description2'=>'required|string|max:1000',
                    'image'=>request()->method=='post'?'required|area_images':'nullable|image',
                    // 'link_video'=>'nullable|url',
                    // 'images'=>request()->method=='post'?'required|array|min:1':'nullable|array|min:1',
                    // 'images.*'=>'nullable|image',
                ];
    }

 

    protected function failedValidation(Validator $validator) {
            throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
    }
 


}
