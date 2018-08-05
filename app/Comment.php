<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'users_id', 
        'tour_id',
        'parent_id', 
        'content',
        'status'
    ]; 

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function tour()
    {
        return $this -> belongsTo('App\Tour');
    }
}
