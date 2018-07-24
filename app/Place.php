<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';

    public function tour()
    {
        return $this->hasMany('App\Tour','place_id','id');
    }
}
