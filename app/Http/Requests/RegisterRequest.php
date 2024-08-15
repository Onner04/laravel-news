<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'              => 'required',
            'email'             => 'required|email|unique:users',
            'password'          => 'required|min:6',
            'password_confirm'  => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'vui lòng nhập tên của bạn',
            'email.required'            => 'vui lòng nhập email của bạn',
            'email.unique'              => 'email đã đặng ký!',
            'email.email'               => 'vui lòng nhập email hợp lý',
            'password.required'         => 'vui lòng nhập mật khẩu của bạn',
            'password.min'              => 'mật khẩu phải có ít nhất 6 ký tự !',
            'password_confirm.same'     => 'mật khẩu xác nhận không đúng',
            'password_confirm.required' => 'vui lòng nhập mật khẩu',
        ];
    }
}
