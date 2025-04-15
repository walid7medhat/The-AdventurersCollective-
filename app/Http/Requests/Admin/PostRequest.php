<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostRequest extends FormRequest
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
            'title'=>'required|string|max:100',
            'description'=>'required|string|max:1000',
            // 'price'=>'required',
           'category_id'=>'required|exists:categories,id',
           'area_id'=>'required|exists:areas,id',
            'images'=>'array|min:1|max:1',
            'images.*'=>'required|image',
            // 'videos'=>'required|array|max:1',
            // 'video_cover_image'=>'required|image',
            // 'link_video'=>'required',
            // 'title2'=>'required|string|max:100',
            'description2'=>'required|string',
            // 'detail_title.*'=>'required|string|max:255',
            // 'detail_type.*'=>'required|string|max:255',
            // 'detail_description.*'=>'required|string|max:255',
            // 'detail_image.*'=>'required|image',
            
            'image'=>request()->method=='post'?'required|mimes:png,jpg,jped,svg,avif':'nullable|mimes:png,jpg,jped,svg,avif',
            'link_video'=>'nullable|url',
            'images'=>request()->method=='post'?'required|array|min:1':'nullable|array|min:1',
            'images.*'=>'nullable|image',

        ];
    }else{
        return [
            'title'=>'required|string|max:100',
            'description'=>'required|string|max:1000',
            'category_id'=>'required|exists:categories,id',
           'area_id'=>'required|exists:areas,id',
            // 'price'=>'required',
        //    'images'=>'nullable|array|max:1',
        //     'images.*'=>'nullable|image',
            'description2'=>'required|string',

            // 'videos'=>'nullable',
            'image'=>'nullable|mimes:png,jpg,jped,svg,avif',
            'link_video'=>'nullable|url',
            'images'=>'nullable|array|min:1',
            'images.*'=>'nullable|mimes:png,jpg,jped,svg,avif',

        ];
    }
    }
    
    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
 }

}
