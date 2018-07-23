<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class TourController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $cttour = Tour::find($id);
        if ($cttour) {
            $tourlq = Tour::where('place_id', $cttour->place_id)->inRandomOrder()->get();
        } 
        $tourmoi = Tour::orderBy('created_at', 'desc')->take(6)->get();
        
        return view('client.page_client.chitiettour', compact('cttour', 'tourlq', 'tourmoi'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
