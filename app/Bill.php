<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

    public function scopeGetIncome($query)
    {
        return $query->where('status', 3)->orWhere('status', 4)->get();
    }

    public function scopeGetLogBill($query)
    {
        return $query->where('users_id', Auth::user()->id)->paginate(10);
    }
}
