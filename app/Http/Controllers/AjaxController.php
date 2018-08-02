<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Comment;
use App\User;
use App\Bill;
use Auth;

class AjaxController extends Controller
{

    public function postBinhLuan(Request $request)
    {
        $comment = new Comment();
        $comment->tour_id = $request->tour_id;
        $comment->parent_id = $request->parent_id;
        $comment->content = $request->noidung;
        $comment->users_id = Auth::user()->id;
        $comment->save();

        $user = User::find(Auth::user()->id);
    
        echo json_encode(array("comment"=>$comment, "user"=>$user, "tour_id"=>$request->tour_id, "user_id"=>$request->users_id));
    }

    public function getTimKiem(Request $request)
    {
        $tk = $request->search;
        $tourtimkiem = Tour::search($tk)->get();
        return json_encode( ["ketqua" => $tourtimkiem, "soluong" => $tourtimkiem->count()] );
    }

    public function postSuaDonHang(Request $request)
    {
        $flag =false;
        $bill = Bill::find($request->id);
        if($bill){
            if($bill->users_id == Auth::user()->id && $bill->status == 0){

                if($request->adult_number + $request->child_number > $bill->tour->customer_max){
                    $flag = true;
                }elseif( strtotime($request->thoigianbatdau) < time() ) {
                    $flag = true;
                }

                if($flag == false){
                    $bill->time_start = $request->thoigianbatdau;
                    $bill->adult_number = $request->adult_number;
                    $bill->child_number = $request->child_number;
                    $bill->save();
                }        
            }
        }
        return json_encode(["flag" => $flag]);
    }
}
