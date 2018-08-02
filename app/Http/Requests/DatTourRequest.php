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
        if ($this->check_request == "on") {
            return [
                'thoigianbatdau' => 'required|date',
                'adult_number' => 'required|integer|min:1',
                'child_number' => 'required|integer|min:0',
                'request' => 'required',
            ];
        }else{
            return [
                'thoigianbatdau' => 'required|date',
                'adult_number' => 'required|integer|min:1',
                'child_number' => 'required|integer|min:0'
            ];
        }
    }

    public function messages()
    {
        return [
            'thoigianbatdau.required' => 'Thời gian bắt đầu không được để trống.',
            'thoigianbatdau.date' => 'Vui lòng kiểm tra lại thời gian.',
            'adult_number.required' => 'Số người lớn đăng ký không được để trống.',
            'adult_number.integer' => 'Số người lớn đăng ký phải là số tự nhiên.',
            'adult_number.min' => 'Cần có ít nhất 1 người lớn đi tour.',
            'child_number.required' => 'Số trẻ nhỏ đăng ký không được để trống.',
            'child_number.integer' => 'Số trẻ nhỏ đăng ký phải là số tự nhiên.',
            'child_number.min' => 'Số trẻ em không thể là số âm.',
            'request.required' => 'Yêu cầu không được để trống.'
        ];
    }
}
