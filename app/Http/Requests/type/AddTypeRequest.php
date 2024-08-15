<?php

namespace App\Http\Requests\type;

use Illuminate\Foundation\Http\FormRequest;

class AddTypeRequest extends FormRequest
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
            'name'  => 'required|unique:typeNews|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'trường này là bắt buộc',
            'name.unique'       => 'Loại báo đã tồn tại',
        ];
    }
}
