<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
        
        $id = $this->request->get('id');
        $title = $this->request->get('title');
        
        return [
            'name'      => 'required|max:255|unique:news,name,'.$id,
            'title'     => 'required|max:10000|unique:news,title'.$title,
            'content'   => 'required|max:10000|unique:news',
            'file'      => 'mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'tên không được để rỗng ',
            'name.unique'       => 'tên bài báo đã tồn tại',
            'title.required'    => 'tiêu đề không được để rỗng',
            'title.unique'      => 'tiêu đề trên đã tồn tại',
            'content.required'  => 'nội dung không được để rỗng',
            'content.unique'    => 'nội dung đã tồn tại',
            'file.mimes'        => 'định dạng hình ảnh không đúng ',
        ];
    }
}
