<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaoTourRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tentour'=>'required',
            'sokhachtoida'=>'required|integer|min:0',
            'hinhanh'=>'required',
            'giatour'=>'required|integer|min:0',
            'place_1'=>'required',
            'ngay1'=>'required',
        ];      
    }

    public function messages()
    {
       return [
            'tentour.required'=>'Nhập tên tour',
            'sokhachtoida.required'=>'Nhập số khách tối đa',
            'sokhachtoida.integer'=>'Số khách tối đa phải là 1 số',
            'giatour.required'=>'Nhập gía tour',
            'giatour.integer'=>'Nhập 1 số',
            'sokhachtoida.min'=>'Nhập 1 số lớn hơn 0',
            'hinhanh.required'=>'Chọn hình ảnh',
            'giatour.min'=>'Nhập 1 số lớn hơn 0',
            'place_1.required'=>'Chọn địa điểm',
            'ngay1.required'=>'Nhập lộ trình',
        ]; 
    }
}
