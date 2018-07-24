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
        $comment->noidung = $request->noidung;
        $comment->users_id = Auth::user()->id;
        $comment->save();

        $user = User::find(Auth::user()->id);
    
        echo json_encode(array("comment"=>$comment, "user"=>$user, "tour_id"=>$request->tour_id, "user_id"=>$request->users_id));
    }

    public function postTimKiem(Request $request)
    {
        $tk = $request->search;
        $tourtimkiem = Tour::where([['tentour', 'like', '%'.$tk.'%'], ['trangthaitour', 1]])
                ->orWhere([['giatour', $tk], ['trangthaitour', 1]])->get();
        return json_encode( ["ketqua" => $tourtimkiem, "soluong" => $tourtimkiem->count()] );
    }

    public function postSuaDonHang(Request $request)
    {
        $flag =false;
        $bill = Bill::find($request->id);
        if($bill){
            if($bill->users_id == Auth::user()->id && $bill->tinhtrangdon == 0){

                if($request->sokhachdangky > $bill->tour->sokhachtoida){
                    $flag = true;
                }elseif( strtotime($request->thoigianbatdau) < time() ) {
                    $flag = true;
                }

                if($flag == false){
                    $bill->thoigianbatdau = $request->thoigianbatdau;
                    $bill->sokhachdangky = $request->sokhachdangky;
                    $bill->save();
                }        
            }
        }
        return json_encode(["flag" => $flag]);
    }
}
