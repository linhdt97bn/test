<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoadmapPlace extends Model
{
    protected $table = 'roadmap_place';
    protected $fillable = ['roadmap_id', 'place_id'];

    public function roadmap()
    {
    	return $this->belongsTo('App\Roadmap');
    }

    public function place()
    {
    	return $this->belongsTo('App\Place');
    }

    public function scopeTourPlace($query, $idp)
    {
        return $query->select('roadmap_id')->where('place_id', $idp)->get()->toArray();
    }  
}
