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
        $this->session()->flash('loiSuaNguoiDung', true);
        if ($this->checkpassword == "on") {
            return [
                'hoten' => 'required|max:100|min:4',
                'sodienthoai' => 'required|max:11|min:10',
                'password'=>'required|min:6|max:30',
                'passwordAgain' =>'same:password',
                'diachi'=>'required',
                'namsinh'=>'required|integer|min:1900|max:2018',
                'gioitinh'=>'required',
            ];   
        }else{
            return[
                'hoten' => 'required|max:100|min:4',
                'sodienthoai' => 'required|max:11|min:10',
                'diachi'=>'required',
                'namsinh'=>'required|integer|min:1900|max:2018',
                'gioitinh'=>'required',
            ];
        }    
    }

    public function messages()
    {
        return [
            'hoten.required' => 'Họ tên không được để trống.',
            'hoten.min' => 'Họ tên tối thiểu 4 ký tự.',
            'hoten.max' => 'Họ tên quá dài.',
            'sodienthoai.required' => 'Số điện thoại không được để trống.',
            'sodienthoai.max' => 'Số điện thoại tối đa là 11 chữ số.',
            'sodienthoai.min' => 'Số điện thoại tối thiểu là 10 chữ số.',
            'password.required' => 'Mật khẩu mới không được để trống',
            'password.min' => 'Mật khẩu mới tối thiểu 6 kí tự',
            'password.max' => 'Mật khẩu mới tối đa 30 kí tự',
            'passwordAgain.same' => 'Xác nhận mật khẩu không chính xác', 
            'diachi.required'=>'Nhập địa chỉ',
            'namsinh.required'=>'Nhập năm sinh',
            'namsinh.integer'=>'Nhập vào 1 số',
            'namsinh.min'=>'Năm sinh phải >=1900',
            'namsinh.max'=>'Năm sinh phải <= 2018', 
        ];
    }
}
