<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Tour;
use Auth;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lichsu = Bill::getLogBill();
        return view('client.page_client.lichsudattour', compact('lichsu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = Tour::find($request->idtour);

        if (!($request->adult_number + $request->child_number <= $tour->customer_max)) {
            return redirect()->back()->with('error_customer_max', 'Số khách đăng ký phải nhỏ hơn số khách tối đa');
        }

        if (strtotime($request->thoigianbatdau) < time()) {
            return redirect()->back()->with('error_time', 'Vui lòng kiểm tra lại thời gian vừa nhập');
        }

        $checkBill = Bill::where([['users_id', Auth::user()->id], ['status', 0], ['tour_id', $request->idtour]])->first();

        if ($checkBill) {
            return redirect()->back()->with('error_book_tour', 'Bạn đã đặt tour này rồi.');
        }

        $request->merge([
            'tour_id' => $tour->id,
            'users_id' => Auth::user()->id,
            'total_price' => $tour->price * $request->adult_number + $tour->price * $request->child_number / 2,
            'status' => 0,
            'time_start' => $request->thoigianbatdau
        ]);
        Bill::create($request->all());
        return redirect()->back()->with('success_book_tour', 'Gửi đơn đặt tour thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bill = Bill::find($id);
        if (!$bill) {
            return redirect()->back();
        }

        if ($request->status == 4) {
            if (!(Auth::user()->id == $bill->tour->users_id && $bill->status == 3)) {
                return redirect()->back();
            }
            $bill->update(['status' => 4]);
            return redirect()->back()->with('confirm_finish','Xác nhận thành công.');
        }else{
            if (!(Auth::user()->id == $bill->tour->users_id && $bill->status == 0)) {
                return redirect()->back();
            }elseif ($request->status == 2) {
                $this->validate($request,
                    [
                        'response' => 'required'
                    ],
                    [
                        'response.required' => 'Lý do từ chối không được để trống'
                    ]
                );
                $bill->update(['status' => 2, 'response' => $request->response]);
                return redirect()->back()->with('disagree_success','Từ chối thành công.');
            }elseif ($request->status == 1) {
                $bill->update(['status' => 1]);
                return redirect()->back()->with('agree_success','Chấp nhận thành công.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
