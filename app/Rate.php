<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rate';
    protected $fillable = ['users_id', 'tour_id', 'point'];

    public function users()
    {
        $this -> belongsTo('App\User');
    }

    public function tour()
    {
        $this -> belongsTo('App\Tour');
    }
}
