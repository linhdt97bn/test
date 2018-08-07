<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKyRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->session()->flash('register', true);
        return [
            'name' => 'required|max:100|min:4',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|max:30|min:6',
            'passwordAgain' => 'same:password',
            'phone' => 'required|max:11|min:10',
            'role' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('i18n.validate.name_required'),
            'name.min' => trans('i18n.validate.name_min'),
            'name.max' => trans('i18n.validate.name_max'),
            'email.required' => trans('i18n.validate.email_required'),
            'email.max' => trans('i18n.validate.email_max'),
            'email.email' => trans('i18n.validate.email_format'),
            'email.unique' => trans('i18n.validate.email_unique'),
            'password.required' => trans('i18n.validate.password_required'),
            'password.max' => trans('i18n.validate.password_max'),
            'password.min' => trans('i18n.validate.password_min'),
            'passwordAgain.same' => trans('i18n.validate.password_again_same'),
            'phone.required' => trans('i18n.validate.phone_required'),
            'phone.max' => trans('i18n.validate.phone_max'),
            'phone.min' => trans('i18n.validate.phone_min'),
            'role.required' => trans('i18n.validate.role_required'),
        ];
    }
}
