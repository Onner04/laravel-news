<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'email' => 'required|email|exists:users',
                'password' => 'required',
        ];
    }
    public function messages()
    {
        return
        [
            'email.required'    => 'vui lòng nhập email của bạn',
            'email.exists'      => 'email không chính xác',
            'email.email'       => 'vui lòng nhập email hợp lệ',
            'password.required' => 'vui lòng nhập mật khẩu của bạn',
        ];
    }
}
