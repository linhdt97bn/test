<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class DiaDiemController extends Controller
{

    public function index()
    {
        $dsdd = Place::all();
        return view('admin.page_admin.danhsachdiadiem', compact('dsdd'));
    }

    public function create()
    {
        return view('admin.page_admin.themdiadiem');
    }

    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'tendiadiem'=>'required|unique:place,tendiadiem'
            ],
            [
                'tendiadiem.required'=>'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique'=>'Địa điểm này đã tồn tại'
            ]);
        $dd = new Place();
        $dd->tendiadiem = $request->tendiadiem;
        $dd->save();
        return redirect()->back()->with('thanhcong','Thêm đại điểm thành công');
    }


    public function edit($id)
    {
        $dd = Place::find($id);
        return view('admin.page_admin.themdiadiem',compact('dd'));
    }

    public function update(Request $request, $id)
    {  
        $this-> validate($request,
            [
                'tendiadiem'=>'required|unique:place,tendiadiem'
            ],
            [
                'tendiadiem.required'=>'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique'=>'Địa điểm này đã tồn tại'
            ]);
        
        $diadiem = Place::find($id);
        $diadiem->tendiadiem = $request->tendiadiem;
        $diadiem->save();
        return redirect('admin/diadiem')->with('thongbao','Sửa địa điểm thành công');
    }

    public function destroy($id)
    {
        Place::find($id)->delete();
        return redirect('admin/diadiem')->with('thongbao','Xóa thành công');    
    }
}
