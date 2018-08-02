<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';
    protected $fillable = ['parent_id', 'place_name'];

    public function roadmap_place()
    {
        return $this->hasMany('App\RoadmapPlace');
    }
}
