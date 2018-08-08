<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaoTourRequest;
use App\Http\Requests\SuaTourRequest;
use App\Repositories\RepositoryInterface;
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

    protected $tourRepository;

    public function __construct(RepositoryInterface $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }
    
    public function index()
    {
        $tour = $this->tourRepository->where('users_id', Auth::user()->id)->get();
        return view('hdv.page_hdv.danhsachtour', compact('tour'));
    }

    public function create()
    {
        $diadiem = Place::where('parent_id', '<>', 0)->get();
        return view('hdv.page_hdv.themtour', compact('diadiem'));
    }

    public function store(TaoTourRequest $request)
    {       
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg") {
                return redirect()->back()->with('loi', 'Định dạng ảnh phải là jpg, png, jpeg');
            }

            $name = $file->getClientOriginalName();
            $hinhanh = str_random(4) . "_" . $name;
            while (file_exists("upload" . $hinhanh)) {
                $hinhanh = str_random(4) . "_" . $name;
            }
            
            $file->move("upload", $hinhanh);
            $request->merge(['image_tour' => $hinhanh]);
        } else {
            return redirect()->back()->with('loi', 'Hình ảnh không đưọc để trống');
        }   
        $request->merge([
            'users_id' => Auth::user()->id,
            'tour_name' => $request->tentour,
            'customer_max' => $request->sokhachtoida,
            'price' => $request->giatour
        ]);
        $tour = $this->tourRepository->create($request->all());
        
        if ($request->songaydi >= 1) {
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
        if ($request->songaydi >= 2) {
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
        if ($request->songaydi >= 3) {
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
        if ($request->songaydi >= 4) {
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
        if ($request->songaydi >= 5) {
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

        return redirect()->back()->with('success_add_tour', trans('i18n.session.success_add_tour'));
    }

    public function show($id)
    {
        $cttour = $this->tourRepository->find($id);
        $tourmoi = $this->tourRepository->getNewTour();
        if ($cttour) {
            $tour_lien_quan = $this->tourRepository->where('users_id', $cttour->users_id)->get();
        }  
        
        return view('client.page_client.chitiettour', compact('cttour', 'tourmoi', 'tour_lien_quan'));
    }

    public function edit($id)
    {
        $edit_tour = $this->tourRepository->find($id);
        $diadiem = Place::where('parent_id', '<>', 0)->get();
        return view('hdv.page_hdv.themtour', compact('diadiem', 'edit_tour'));
    }

    public function update(SuaTourRequest $request, $id)
    {
        $tour = $this->tourRepository->find($id);
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != "png" && $duoi != "jpeg") {
                return redirect()->back()->with('error_image', trans('i18n.session.error_image'));
            }
            $name = $file->getClientOriginalName();
            $hinhanh = str_random(4) . "_" . $name;
            while(file_exists("upload" . $hinhanh)){
                $hinhanh = str_random(4) . "_" . $name;
            }         
            $file->move("upload", $hinhanh); 
            $request->merge(['image_tour' => $hinhanh]);
        }

        $request->merge([
            'tour_name' => $request->tentour,
            'price' => $request->giatour,
            'customer_max' => $request->sokhachtoida
        ]);

        $tour->update($request->all());
        return redirect()->back()->with('success_edit_tour', trans('i18n.session.success_edit_tour'));
    }

    public function hideShowTour($id)
    {
        $tour = $this->tourRepository->find($id);
        if ($tour->status == 1) {
            $tour->update(['status' => 0]);
            return redirect()->back()->with('success_hide_tour', trans('i18n.session.success_hide_tour'));
        } else {
            $tour->update(['status' => 1]);
            return redirect()->back()->with('success_show_tour', trans('i18n.session.success_show_tour'));
        }    
    }
}
