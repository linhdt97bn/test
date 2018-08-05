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
        $province = Place::where('parent_id', 0)->get();
        return view('admin.page_admin.themdiadiem', compact('province'));
    }

    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'tendiadiem' => 'required|unique:place,place_name'
            ],
            [
                'tendiadiem.required' => 'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique' => 'Địa điểm này đã tồn tại'
            ]
        );
        if (isset($request->province)) {    
            Place::create(['parent_id' => $request->province, 'place_name' => $request->tendiadiem]);
            return redirect()->back()->with('add_place_success','Thêm địa điểm thành công');
        }else {
            Place::create(['parent_id' => 0, 'place_name' => $request->tendiadiem]);
            return redirect()->back()->with('add_province_success','Thêm tỉnh thành công');
        }
    }

    public function edit($id)
    {
        $place = Place::find($id);
        if ($place->parent_id != 0) {
            $province = Place::where('parent_id', 0)->get();
            return view('admin.page_admin.edit_place', compact('place', 'province'));
        }else {
            return view('admin.page_admin.edit_place', compact('place'));
        }
        
    }

    public function update(Request $request, $id)
    {  
        $this-> validate($request,
            [
                'tendiadiem' => 'required|unique:place,place_name'
            ],
            [
                'tendiadiem.required' => 'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique' => 'Địa điểm này đã tồn tại'
            ]);
        
        $diadiem = Place::find($id);
        if (isset($request->province)) {
            $diadiem->update(['parent_id' => $request->province, 'place_name' => $request->tendiadiem]);
            return redirect()->back()->with('edit_place_success','Sửa địa điểm thành công');
        }else {
            $diadiem->update(['place_name' => $request->tendiadiem]);
            return redirect()->back()->with('edit_province_success','Sửa tỉnh thành công');
        }
        
    }

    public function destroy($id)
    {
        Place::find($id)->delete();
        return redirect('admin/diadiem')->with('thongbao','Xóa thành công');    
    }
}
