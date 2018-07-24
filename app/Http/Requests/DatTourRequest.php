<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatTourRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->session()->flash('errorDatTour', true);
        return [
            'thoigianbatdau' => 'required|date',
            'sokhachdangky' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'thoigianbatdau.required' => 'Thời gian bắt đầu không được để trống.',
            'thoigianbatdau.date' => 'Vui lòng kiểm tra lại thời gian.',
            'sokhachdangky.required' => 'Số khách đăng ký không được để trống.',
            'sokhachdangky.integer' => 'Số khách đăng ký phải là số tự nhiên'
        ];
    }
}
