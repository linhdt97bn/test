<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    protected $fillable = [
        'users_id',
        'tour_id',
        'adult_number',
        'child_number',
        'time_start',
        'total_price',
        'status',
        'request',
        'response'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
