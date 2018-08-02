<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $table = 'roadmap';
    protected $fillable = ['tour_id', 'description'];

    public function tour()
    {
    	return $this->belongsTo('App\Tour');
    }

    public function roadmap_place()
    {
    	return $this->hasMany('App\RoadmapPlace');
    }
}
