<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rate';

    public function users()
    {
        $this -> belongsTo('App\User');
    }

    public function tour()
    {
        $this -> belongsTo('App\Tour');
    }
}
