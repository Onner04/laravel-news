<?php

namespace App\Http\Requests\type;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
        $id_type_news = $this->request->get('id_type_news');

        return [
            'name'  => 'required|unique:typeNews,name'.$id_type_news,
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'trường này là bắt buộc',
            'name.unique'       => 'tên loại báo đã tồn tại'
        ];
    }
}
