<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Tour extends Model
{
    protected $table = 'tour';
    protected $fillable = [
        'tour_name',
        'users_id',
        'customer_max',
        'price',
        'image_tour',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this -> hasMany('App\Comment');
    }

    public function rate()
    {
        return $this -> hasMany('App\Rate');
    }

    public function bill()
    {
        return $this -> hasMany('App\Bill');
    }

    public function roadmap()
    {
        return $this -> hasMany('App\Roadmap');
    }

    public function scopeSearch($query, $string)
    {
        return $query->where([['tour_name', 'like', '%' . $string . '%'], ['status', 1]])
            ->orwhere([['price', $string], ['status', 1]]);
    }

    public function scopeGetBillHDV($query)
    {
        return $query->where('users_id', Auth::user()->id)->get();
    }
}
