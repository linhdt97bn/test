<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['read_at'];
}
