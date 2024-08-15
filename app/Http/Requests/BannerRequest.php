<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:10000',
            'link'  => 'required|max:10000',
            'file'  => 'mimes:jpg,jpeg,png',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required'     => 'tên không được để trống',
            'link.required'     => 'link không được để trống',
            'file.mimes'        => 'định dạng hình ảnh không đúng',
        ];
    }
}
