<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaNguoiDungRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->session()->flash('edit_user', true);
        if ($this->checkpassword == "on") {
            return [
                'name' => 'required|max:100|min:4',
                'phone' => 'required|max:11|min:10',
                'password'=>'required|min:6|max:30',
                'passwordAgain' =>'same:password'
            ];   
        }else {
            return [
                'name' => 'required|max:100|min:4',
                'phone' => 'required|max:11|min:10'
            ];
        }    
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ tên không được để trống.',
            'name.min' => 'Họ tên tối thiểu 4 ký tự.',
            'name.max' => 'Họ tên quá dài.',
            'phone.required' => 'Số điện thoại không được để trống.',
            'phone.max' => 'Số điện thoại tối đa là 11 chữ số.',
            'phone.min' => 'Số điện thoại tối thiểu là 10 chữ số.',
            'password.required' => 'Mật khẩu mới không được để trống',
            'password.min' => 'Mật khẩu mới tối thiểu 6 kí tự',
            'password.max' => 'Mật khẩu mới tối đa 30 kí tự',
            'passwordAgain.same' => 'Xác nhận mật khẩu không chính xác'
        ];
    }
}
