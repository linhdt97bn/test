<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

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

    public function place()
    {
        return $this -> belongsTo('App\Place');
    }
}
