<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class AddNewsRequest extends FormRequest
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
            'name'      => 'required|unique:news|max:255',
            'title'     => 'required|unique:news|max:10000',
            'content'   => 'required|unique:news|max:10000',
            'file'      => 'required|mimes:jpg,jpeg,png',
            'files'     => 'required',
        ];
    }
    public function messages()
    {
        return  [
            'name.required'         => 'tên không được để rỗng',
            'name.unique'           => 'tên bài báo đã tồn tại',
            'title.required'        => 'tên không được để rỗng',
            'title.unique'          => 'tên tiêu đề đã tông tại',
            'content.required'      => 'nội dung không được để rỗng',
            'content.unique'        => 'nội dung đã tồn tại',
            'file.mimes'            => 'định dạng hình ảnh không đúng',
            'file.required'         => 'vui lòng chọn hình ảnh bài báo',
        ];
    }
}
