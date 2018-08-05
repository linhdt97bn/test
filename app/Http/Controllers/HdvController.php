<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tour;
use App\Place;
use App\Bill;
use App\Roadmap;
use App\RoadmapPlace;
use Auth;

class HdvController extends Controller
{
    public function trangchu()
    {
    	return view('hdv.page_hdv.trangchu');
    }

    public function getListBill(){
        $bill = Tour::getBillHDV();
        return view('hdv.page_hdv.list_bill', compact('bill'));
    }

    public function postXoaTour($id){
        Bill::find($id)->delete();
        return redirect()->back()->with('thongbao','Xóa thành công');
    }

    public function postThemLoTrinh(Request $request)
    {
        $request->session()->flash('add_roadmap', true);
        $this->validate($request,
            [
                'place' => 'required',
                'ngay' => 'required'
            ],
            [
                'place.required' => 'Địa điểm không được để trống.',
                'ngay.required' => 'Lộ trình ngày đi không được để trống.'
            ]
        );
        $request->merge([ 
            'description' => $request->ngay ,
            'tour_id' => $request->idtour
        ]);
        $roadmap = Roadmap::create($request->only('description', 'tour_id'));

        $place = explode(',,', trim($request->place, ',,')); 

        for ($i = 0; $i < sizeof($place); $i++) { 
            $place_add = Place::where('place_name', $place[$i])->first();

            $request->merge([
                'place_id' => $place_add->id,
                'roadmap_id' => $roadmap->id
            ]);
            RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
        }

        return redirect()->back(); 
    }

    public function postSuaLoTrinh($id, Request $request)
    {
        $request->session()->flash('edit_roadmap', true);
        $this->validate($request,
            [
                'place' => 'required',
                'ngay' => 'required'
            ],
            [
                'place.required' => 'Địa điểm không được để trống.',
                'ngay.required' => 'Lộ trình ngày đi không được để trống.'
            ]
        );
        $request->merge(['description' => $request->ngay]);
        Roadmap::find($id)->update($request->only('description'));
        $place_delete = RoadmapPlace::where('roadmap_id', $id)->get();

        $place = explode(',,', trim($request->place, ',,'));
        $flag_delete = true;
        foreach ($place_delete as $p_d) {
            $flag_delete = true;
            for ($i = 0; $i < sizeof($place); $i++) { 
                if($p_d->place->place_name == $place[$i]) {
                    $flag_delete = false;
                }
            } 
            if($flag_delete == true){
                RoadmapPlace::find($p_d->id)->delete();
            }
        }    

        for ($i = 0; $i < sizeof($place); $i++) { 
            $place_check = Place::where('place_name', $place[$i])->first();

            $roadmap_place = RoadmapPlace::where([['roadmap_id', $id], ['place_id', $place_check->id]])->get();
            if($roadmap_place->count() == 0 ) {
                $request->merge([
                    'place_id' => $place_check->id,
                    'roadmap_id' => $id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            }
        }

        return redirect()->back(); 
    }
}