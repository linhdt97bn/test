<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaoTourRequest;
use App\Http\Requests\SuaTourRequest;
use App\Tour;
use App\User;
use App\Bill;
use App\Comment;
use App\Rate;
use App\Place;
use App\Roadmap;
use App\RoadmapPlace;
use Auth;

class TourController extends Controller
{
    
    public function index()
    {
        $tour = Tour::where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachtour', compact('tour'));
    }

    public function create()
    {
        $diadiem = Place::where('parent_id', '<>', 0)->get();
        return view('hdv.page_hdv.themtour',compact('diadiem'));
    }

    public function store(TaoTourRequest $request)
    {       
        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $hinhanh= str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh= str_random(4)."_".$name;
            }
            
            $file->move("upload",$hinhanh);
            $request->merge(['image_tour' => $hinhanh]);
        }else {
            return redirect()->back()->with('loi','Hình ảnh không đưọc để trống');
        }   
        $request->merge([
            'users_id' => Auth::user()->id,
            'tour_name' => $request->tentour,
            'customer_max' => $request->sokhachtoida,
            'price' => $request->giatour
        ]);
        $tour = Tour::create($request->all());
        
        if($request->songaydi >= 1){
            $request->merge([
                'tour_id' => $tour->id,
                'description' => $request->ngay1
            ]);
            $roadmap = Roadmap::create($request->all());

            $place_1 = explode(',,', trim($request->place_1, ',,'));  
            for ($i=0; $i < sizeof($place_1); $i++) { 
                $place = Place::where('place_name', $place_1[$i])->first();
                $request->merge([
                    'place_id' => $place->id,
                    'roadmap_id' => $roadmap->id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            } 
        }
        if($request->songaydi >= 2){
            $request->merge([
                'tour_id' => $tour->id,
                'description' => $request->ngay2
            ]);
            $roadmap = Roadmap::create($request->all());

            $place_2 = explode(',,', trim($request->place_2, ',,'));  
            for ($i=0; $i < sizeof($place_2); $i++) { 
                $place = Place::where('place_name', $place_2[$i])->first();
                $request->merge([
                    'place_id' => $place->id,
                    'roadmap_id' => $roadmap->id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            } 
        }
        if($request->songaydi >= 3){
            $request->merge([
                'tour_id' => $tour->id,
                'description' => $request->ngay3
            ]);
            $roadmap = Roadmap::create($request->all());

            $place_3 = explode(',,', trim($request->place_3, ',,'));  
            for ($i=0; $i < sizeof($place_3); $i++) { 
                $place = Place::where('place_name', $place_3[$i])->first();
                $request->merge([
                    'place_id' => $place->id,
                    'roadmap_id' => $roadmap->id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            } 
        }
        if($request->songaydi >= 4){
            $request->merge([
                'tour_id' => $tour->id,
                'description' => $request->ngay4
            ]);
            $roadmap = Roadmap::create($request->all());

            $place_4 = explode(',,', trim($request->place_4, ',,'));  
            for ($i=0; $i < sizeof($place_4); $i++) { 
                $place = Place::where('place_name', $place_4[$i])->first();
                $request->merge([
                    'place_id' => $place->id,
                    'roadmap_id' => $roadmap->id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            } 
        }
        if($request->songaydi >= 5){
            $request->merge([
                'tour_id' => $tour->id,
                'description' => $request->ngay5
            ]);
            $roadmap = Roadmap::create($request->all());

            $place_5 = explode(',,', trim($request->place_5, ',,'));  
            for ($i=0; $i < sizeof($place_5); $i++) { 
                $place = Place::where('place_name', $place_5[$i])->first();
                $request->merge([
                    'place_id' => $place->id,
                    'roadmap_id' => $roadmap->id
                ]);
                RoadmapPlace::create($request->only('place_id', 'roadmap_id'));
            } 
        }

        return redirect()->back()->with('thanhcong','Thêm tour thành công');
    }

    public function show($id)
    {
        $cttour = Tour::find($id);
        $tourmoi = Tour::orderBy('created_at', 'desc')->take(6)->get();
        if($cttour){
            $tour_lien_quan = Tour::where('users_id', $cttour->users_id)->get();
        }  
        
        return view('client.page_client.chitiettour', compact('cttour', 'tourmoi', 'tour_lien_quan'));
    }

    public function edit($id)
    {
        $edit_tour = Tour::find($id);
        $diadiem = Place::where('parent_id', '<>', 0)->get();
        return view('hdv.page_hdv.themtour',compact('diadiem', 'edit_tour'));
    }

    public function update(SuaTourRequest $request, Tour $tour)
    {
        if($request->hasFile('hinhanh')){
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg"){
                return redirect()->back()->with('loi','Định dạng ảnh phải là jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $hinhanh = str_random(4)."_".$name;
            while(file_exists("upload".$hinhanh)){
                $hinhanh = str_random(4)."_".$name;
            }         
            $file->move("upload",$hinhanh); 
            $request->merge(['image_tour' => $hinhanh]);
        }

        $request->merge([
            'tour_name' => $request->tentour,
            'price' => $request->giatour,
            'customer_max' => $request->sokhachtoida
        ]);

        $tour->update($request->all());
        return redirect('hdv/tour')->with('thongbao','Sửa tour thành công');
    }

    public function anhienTour($id)
    {
        $tour = Tour::find($id);
        if($tour->status == 1){
            $tour->update(['status' => 0]);
            return redirect()->back()->with('thongbao','Ẩn tour thành công');
        }
        else{
            $tour->update(['status' => 1]);
            return redirect()->back()->with('thongbao','Hiện tour thành công');
        }    
    }
}
