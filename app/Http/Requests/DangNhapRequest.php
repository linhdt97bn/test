<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->session()->flash('loiDangNhap', true);
        return [
            'email'=> 'required|email',
            'password'=> 'required|max:30|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=> 'Email không được để trống.',
            'email.email'=> 'Định dạng email không đúng.',
            'password.required'=> 'Mật khẩu không được để trống.',
            'password.min'=> 'Mật khẩu tối thiểu 6 ký tự.',
            'password.max'=> 'Mật khẩu tối đa 30 ký tự.'
        ];
    }
}
