<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;

class TourRepository extends EloquentRepository
{

    public function getModel()
    {
        return \App\Tour::class;
    }

    public function getNewTour()
    {
        return $this->model->orderBy('created_at', 'desc')->take(6)->get();
    }
}