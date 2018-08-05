<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Comment;
use App\User;
use App\Bill;
use App\Roadmap;
use App\Place;
use App\RoadmapPlace;
use Auth;

class AjaxController extends Controller
{

    public function postBinhLuan(Request $request)
    {
        $request->merge([
            'content' => $request->noidung,
            'users_id' => Auth::user()->id
        ]);
        $comment = Comment::create($request->all());
        $user = User::find(Auth::user()->id);
    
        echo json_encode(array("comment" => $comment, "user" => $user, "tour_id" => $request->tour_id, "user_id" => $request->users_id));
    }

    public function getTimKiem(Request $request)
    {
        $tk = $request->search;
        $tourtimkiem = Tour::search($tk)->get();
        return json_encode(["ketqua" => $tourtimkiem, "soluong" => $tourtimkiem->count()]);
    }

    public function postSuaDonHang(Request $request)
    {
        $flag =false;
        $bill = Bill::find($request->id);
        if ($bill) {
            if ($bill->users_id == Auth::user()->id && $bill->status == 0) {
                if ($request->adult_number + $request->child_number > $bill->tour->customer_max) {
                    $flag = true;
                }elseif (strtotime($request->thoigianbatdau) < time()) {
                    $flag = true;
                }

                if ($flag == false) {
                    $request->merge([
                        'time_start' => $request->thoigianbatdau,
                        'total_price' => $bill->tour->price * $request->adult_number + $bill->tour->price * $request->child_number / 2
                    ]);
                    $bill->update($request->all());
                }        
            }
        }
        return json_encode(["flag" => $flag, "total_price" => $bill->total_price]);
    }

    public function postXoaLoTrinh(Request $request)
    {
        $flag =false;
        $roadmap = Roadmap::find($request->id);
        if ($roadmap) {
            if ($roadmap->tour->users_id == Auth::user()->id) {
                if ($roadmap->tour_id != $request->tour_id) {
                    $flag = true;
                }

                if ($flag == false) {
                    $roadmap->delete();
                }        
            }
        }
        return json_encode(["flag" => $flag]);
    }

    public function getLayDuLieu(Request $request)
    {
        $diadiem = Place::where('parent_id', '<>', 0)->get();
        $description = Roadmap::find($request->id);
        $place_select = RoadmapPlace::select('place_id')->where('roadmap_id', $request->id)->get()->toArray();
        $place_select = Place::find($place_select);

        return json_encode([
            'diadiem' => $diadiem, 
            'sodiadiem' => $diadiem->count(), 
            'description' => $description, 
            'place_select' => $place_select
        ]);
    }

    public function postHideComment(Request $request)
    {
        Comment::find($request->id)->update(['status' => 0]);
    }

    public function deleteComment(Request $request)
    {
        Comment::where('parent_id', $request->id)->delete();
        Comment::find($request->id)->delete();
    }
}
