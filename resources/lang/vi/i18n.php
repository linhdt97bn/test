<?php

return [
	'validate' => [
        'name_required' => 'Họ tên không được để trống.',
        'name_min' => 'Họ tên tối thiểu 4 ký tự.',
        'name_max' => 'Họ tên quá dài.',
        'email_required' => 'Email không được để trống.',
        'email_max' => 'Email quá dài.',
        'email_format' => 'Định dạng email không đúng.',
        'email_unique' => 'Email này đã có người sử dụng.',
        'password_required' => 'Mật khẩu không được để trống.',
        'password_max' => 'Mật khẩu tối đa 30 ký tự.',
        'password_min' => 'Mật khẩu tối thiểu 6 ký tự.',
        'password_again_same' => 'Mật khẩu xác nhận không chính xác.',
        'phone_required' => 'Số điện thoại không được để trống.',
        'phone_max' => 'Số điện thoại tối đa là 11 chữ số.',
        'phone_min' => 'Số điện thoại tối thiểu là 10 chữ số.',
        'role_required' => 'Vui lòng chọn loại người dùng.',
    ],

    'button' => [
    	'login' => 'Đăng nhập',
    	'register' => 'Đăng ký',
    	'logout' => 'Đăng xuất',
    	'home' => 'Trang chủ',
    	'add' => 'Thêm',
    	'edit' => 'Sửa',
    	'delete' => 'Xóa',
    	'place' => 'Địa điểm',
    	'contact' => 'Liên hệ',
    	'rule' => 'Quy định',
    	'edit_profile' => 'Sửa thông tin cá nhân',
    	'page_manage' => 'Trang quản lý',
    	'tour_manage' => 'Quản lý tour',
    	'bill_log' => 'Lịch sử đặt tour',

    ],

    'label' => [
    	'name' => 'Họ tên',
    	'email' => 'Email',
    	'address' => 'Địa chỉ',
    	'password' => 'Mật khẩu',
    	'password_again' => 'Nhập lại mật khẩu',
    	'phone' => 'Số điện thoại',
    	'hdv_register' => 'Đăng ký hướng dẫn viên',
    	'customer_register' => 'Đăng ký khách du lịch',
    ],


];