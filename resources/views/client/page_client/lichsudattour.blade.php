@extends('client.layout_client.master_client')

@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="table-responsive">
                <table class="table cart">
                    <thead>
                        <tr>
                            <th class="cart-product-thumbnail">&nbsp;</th>
                            <th class="cart-product-name">Tên tour</th>
                            <th class="cart-product-price">Tổng tiền</th>
                            <th class="cart-product-quantity">Trạng thái</th>
                            <th class="cart-product-subtotal">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lichsu as $ls)
                        <tr class="cart_item">
                            <td class="cart-product-thumbnail">
                                <a><img width="64" height="64" src="upload/{{$ls->tour->hinhanh}}"></a>
                            </td>
                            <td class="cart-product-name">
                                <a href="{{ route('chi-tiet', $ls->tour->id) }}">{{$ls->tour->tentour}}</a>
                            </td>
                            <td class="cart-product-price">
                                <span class="amount">{{ number_format($ls->tongtien) }} VNĐ</span>
                            </td>
                            <td class="cart-product-quantity">
                                <div class="quantity clearfix">
                                    @if($ls->tinhtrangdon == 0)
                                    <strong>Chưa xử lý</strong>
                                    @elseif($ls->tinhtrangdon == 1)
                                    <strong>Được chấp nhận </strong>
                                    @elseif($ls->tinhtrangdon == 2)
                                    <strong><i class="glyphicon glyphicon-remove"></i> Bị từ chối</strong>
                                    @elseif($ls->tinhtrangdon == 3)
                                    <strong>Đã thanh toán</strong>
                                    @elseif($ls->tinhtrangdon == 4)
                                    <strong><i class="glyphicon glyphicon-ok"></i> Hoàn tất</strong>
                                    @endif
                                </div>
                            </td>
                            <td class="cart-product-subtotal">
                                <span class="amount">
                                    @if($ls->tinhtrangdon == 1)
                                    <form action="{{url('payment')}}" method="POST" role="form" style="margin-bottom: 0px">
                                        {{csrf_field()}}
                                        <input type="hidden" name="idbill" value="{{$ls->id}}">
                                        <input type="hidden" name="tentour" value="{{$ls->tour->tentour}}">
                                        <input type="hidden" name="tongtien" value="{{$ls->tongtien}}">
                                        <button type="submit" class="btn">Thanh toán</button>
                                    </form>
                                    @endif
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row paginate text-center">{{ $lichsu->links() }}</div>
    </div>
</section>
@endsection