<?php

return [
	'validate' => [
        'name_required' => 'Name must not be empty.',
        'name_min' => 'Name must have a minimum value is 4.',
        'name_max' => 'Name must be less than or equal 100.',
        'email_required' => 'Email must not be empty.',
        'email_max' => 'Email must be less than or equal 100.',
        'email_format' => 'Email must be formatted as an e-mail address.',
        'email_unique' => 'Someone has used this email.',
        'password_required' => 'Name must not be empty.',
        'password_max' => 'Name must be less than or equal 30.',
        'password_min' => 'Name must have a minimum value is 6.',
        'password_again_same' => 'Password again is not right.',
        'phone_required' => 'Phone must not be empty.',
        'phone_max' => 'Name must be less than or equal 11.',
        'phone_min' => 'Phone must have a minimum value is 10.',
        'role_required' => 'Role must not be empty.',
    ],

    'button' => [
    	'login' => 'Login',
    	'register' => 'Register',
    	'logout' => 'Logout',
    	'home' => 'Home',
    	'add' => 'Add',
    	'edit' => 'Edit',
    	'delete' => 'Delete',
    	'place' => 'Place',
    	'contact' => 'Contact',
    	'rule' => 'Rule',
    	'edit_profile' => 'Edit Profile',
    	'page_manage' => 'Page Manage',
    	'tour_manage' => 'Tour Manage',
    	'bill_log' => 'Bill',
        'book_tour' => 'Book Tour',
        'x' => 'X',

    ],

    'label' => [
    	'name' => 'Name',
    	'email' => 'Email',
    	'address' => 'Address',
    	'password' => 'Password',
    	'password_again' => 'Password Again',
    	'phone' => 'phone',
    	'hdv_register' => 'Register HDV',
    	'customer_register' => 'Register Customer',
        'remember' => 'Remember Me',
        'tour_name' => 'Tour Name',
        'tour_price' => 'Tour Price',
        'total_price' => 'Total Price: ',
        'child_number' => 'Child Number (age < 15)',
        'adult_number' => 'Adult Number',
        'time_start' => 'Time Start',
        'other_request' => 'Other Request',
        'zero' => '0',
        'vnd' => 'VND',
        'change_password' => 'Change Password',
        'new_password' => 'New Password',
        'gender' => 'Gender',
        'male' => 'Male',
        'female' => 'Female',
        'avatar' => 'Avatar',
        'birthday' => 'Birthday',


    ],


    'language' =>'Language:',
];