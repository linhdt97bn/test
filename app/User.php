<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'address', 
        'avatar', 
        'gender', 
        'birthday', 
        'phone', 
        'role', 
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function rate()
    {
        return $this->hasMany('App\Rate');
    }

    public function tour()
    {
        return $this -> hasMany('App\Tour', 'users_id', 'id');
    }

    public function bill()
    {
        return $this -> hasMany('App\Bill', 'users_id', 'id');
    }
}
