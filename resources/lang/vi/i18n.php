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
        'place_requỉred' => 'Địa điểm không được để trống.',
        'roadmap_required' => 'Lộ trình ngày đi không được để trống.',

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
        'book_tour' => 'Đặt Tour',
        'x' => 'X',
        'hide' => 'Ẩn',
        'show' => 'Hiện',
        'add_tour' => 'Thêm tour',
        'edit_tour' => 'Sửa tour',



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
        'remember' => 'Ghi nhớ đăng nhập',
        'tour_name' => 'Tên tour',
        'tour_price' => 'Giá tour',
        'total_price' => 'Tổng tiền: ',
        'child_number' => 'Số trẻ nhỏ đi tour ( < 15 tuổi )',
        'adult_number' => 'Số người lớn đi tour',
        'time_start' => 'Thời gian bắt đầu',
        'other_request' => 'Yêu cầu khác',
        'zero' => '0',
        'vnd' => 'VNĐ',
        'change_password' => 'Thay đổi mật khẩu',
        'new_password' => 'Mật khẩu mới',
        'gender' => 'Giới tính',
        'male' => 'Nam',
        'female' => 'Nữ',
        'avatar' => 'Ảnh đại diện',
        'birthday' => 'Ngày sinh',
        'hide_comment' => 'Ẩn bình luận',
        'delete_comment' => 'Xóa bình luận',
        'comment_hidden' => '<<<< Bình luận đã bị ẩn >>>>',
        'delete_reply' => 'Xóa trả lời',
        'reply' => 'Trả lời',
        'leave' => 'Để lại ',
        'comment' => 'Bình luận',
        'submit_comment' => 'Gửi bình luận',
        'add_roadmap' => 'Thêm lộ trình',
        'total_comment' => ':total_comment Bình luận',
        'total_day' => 'Số ngày tham quan: :total_day ngày',
        'total_day_name' => 'Số ngày tham quan',
        'customer_max' => 'Số khách tối đa: :customer_max người',
        'customer_max_name' => 'Số khách tối đa',
        'day' => 'Ngày :day:',
        'booked_tour' => 'Bạn đã đặt tour này',
        'tour_price_vnd' => ':price VNĐ',
        'rate' => 'Đánh giá',
        'comment' => 'Bình luận',
        'hdv' => 'Hướng dẫn viên',
        'hdv_name' => 'Họ tên: :name',
        'view_tour_hdv' => 'Xem các tour khác của hướng dẫn viên',
        'hdv_address' => 'Địa chỉ: :address',
        'list' => 'Danh sách',
        'my_tour' => 'Tour của tôi',
        'image' => 'Hình ảnh',
        'status' => 'Trạng thái',
        'roadmap' => 'Lộ trình',
        'day' => 'Ngày :day:',
        'description' => 'Mô tả',
        


        

    ],

    'session' => [
        'error_phone' => 'Kiểm tra lại số điện thoại!',
        'error_login' => 'Sai tài khoản hoặc mật khẩu!',
        'error_rate' => 'Lỗi đánh giá!',
        'success_rate' => 'Cảm ơn bạn đã đánh giá tour!',
        'error_image' => 'Định dạng ảnh phải là jpg, png, jpeg!',
        'error_birthday' => 'Vui lòng nhập đúng năm sinh!',
        'success_edit_user' => 'Sửa thông tin thành công.',
        'success_edit_tour' => 'Sửa tour thành công.',
        'success_add_tour' => 'Thêm tour thành công.',
        'success_hide_tour' => 'Tour đã được ẩn.',
        'success_show_tour' => 'Tour đã được hiện.'


    ],

    'language' =>'Ngôn ngữ:',


];