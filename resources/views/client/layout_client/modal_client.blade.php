@if(!Auth::check())
    <div class="modal" id="DangKy">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn btn-danger modal-dangky" data-dismiss="modal">{{ trans('i18n.button.x') }}</button>
                <div class="modal-header">  
                    <div align="center">{{ trans('i18n.button.register') }}</div>
                </div>

                <div class="modal-body">
                    @if((count($errors) > 0 && Session::has('register')) || Session::has('error_phone'))
                        <div class="register"></div>
                    @endif
                    @if($errors->first('role'))
                        <div class="alert alert-danger text-center">{{ $errors->first('role') }}</div>
                    @endif

                    <form action="{{ route('dang-ky') }}" method="POST" class="form-dangky">
                        <fieldset>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label>{{ trans('i18n.label.name') }}</label> 
                            <span>{{ $errors->first('name') }}</span>
                            <input class="form-control" name="name" type="text" value="{{ old('name') }}">

                            <label>{{ trans('i18n.label.email') }}</label> <span id="msgbox"></span>
                            <span>{{ $errors->first('email') }}</span>           
                            <input class="form-control" name="email" type="email" value="{{ old('email') }}" id="email">

                            <label>{{ trans('i18n.label.password') }}</label>
                            <span>{{ $errors->first('password') }}</span>   
                            <input class="form-control" name="password" type="password">

                            <label>{{ trans('i18n.label.password_again') }}</label>
                            <span>{{ $errors->first('passwordAgain') }}</span>   
                            <input class="form-control" name="passwordAgain" type="password">

                            <label>{{ trans('i18n.label.phone') }}</label>
                            <span>
                                {{ $errors->first('phone') }}

                                @if(Session::has('error_phone'))
                                    {{ Session::get('error_phone') }}
                                @endif  
                            </span>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">

                            <div class="role-1">
                                <input type="radio" name="role" value="1"> <strong>{{ trans('i18n.label.customer_register') }}</strong>
                            </div>
                            <div class="role-2">
                                <input type="radio" name="role" value="2"> <strong>{{ trans('i18n.label.hdv_register') }}</strong>
                            </div>
                            <div align="center"><button type="submit" class="btn btn-lg btn-success" id="btnKhach" >{{ trans('i18n.button.register') }}</button></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="DangNhap">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn btn-danger modal-dangnhap" data-dismiss="modal">{{ trans('i18n.button.x') }}</button>
                <div class="modal-header">  
                    <div align="center">{{ trans('i18n.button.login') }}</div>
                </div>
                <div class="modal-body">
                    @if(Session::has('error_login'))
                        <div class="alert alert-danger text-center login">{{ Session::get('error_login') }}</div>
                    @elseif((count($errors) > 0) && (Session::has('login')))
                        <div class="login"></div>
                    @endif
                    <form action="{{ route('dang-nhap') }}" method="POST" class="form-dangnhap">
                        <fieldset>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label>{{ trans('i18n.label.email') }}</label>
                            <span>{{ $errors->first('email') }}</span>
                            <input class="form-control" name="email" type="email" value="{{ old('email') }}">

                            <label>{{ trans('i18n.label.password') }}</label>
                            <span>{{ $errors->first('password') }}</span>
                            <input class="form-control" name="password" type="password">

                            <div align="center">
                                <input type="checkbox" name="ghinho" id="chkGhinho"> <label id="ghinho">{{ trans('i18n.label.remember') }}</label>
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnDangNhap">{{ trans('i18n.button.login') }}</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    @if(isset($cttour))
    <div class="modal" id="DatTour">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn btn-danger modal-dattour" data-dismiss="modal">{{ trans('i18n.button.x') }}</button>
                <div class="modal-header">  
                    <div align="center">{{ trans('i18n.button.book_tour') }}</div>
                </div>
                @if(Session::has('success_book_tour'))
                    <div class="alert alert-success text-center book-tour">{{ Session::get('success_book_tour') }}</div>
                @elseif(Session::has('error_book_tour'))
                    <div class="alert alert-danger text-center book-tour">{{ Session::get('error_book_tour') }}</div>
                @elseif((count($errors) > 0 && Session::has('book_tour')) || Session::has('error_customer_max') || Session::has('error_time'))
                    <div class="book-tour"></div>
                @endif

                <div class="modal-body">
                    <form action="{{ route('dat-tour', $cttour->id) }}" method="POST" class="form-dattour">
                        <fieldset>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label>{{ trans('i18n.label.tour_name') }}</label>
                            <input type="text" class="form-control" readonly="" name="tentour" value="{{ $cttour->tour_name }}">
                                
                            <label>{{ trans('i18n.label.tour_price') }}</label>
                            <input type="text" class="form-control giatour" readonly="" name="giatour" value="{{ $cttour->price }}">

                            <label>{{ trans('i18n.label.total_price') }}</label>
                            <label class="tong-tien">{{ trans('i18n.label.zero') }}</label>
                            <strong>{{ trans('i18n.label.vnd') }}</strong>
                            <div class="clear"></div>

                            <label>{{ trans('i18n.label.time_start') }}</label>
                            <span>
                                {{ $errors->first('thoigianbatdau') }}
                                @if(session('error_time'))
                                    {{ Session::get('error_time') }}
                                @endif
                            </span>
                            <input type="date" class="form-control" name="thoigianbatdau" value="{{ old('thoigianbatdau') }}">

                            <label>{{ trans('i18n.label.adult_number') }}</label>
                            <span>
                                {{ $errors->first('adult_number') }}
                                @if(session('error_customer_max'))
                                    {{ Session::get('error_customer_max') }}
                                @endif
                            </span>  
                            <input type="number" name="adult_number" class="form-control adult-number" value="{{ old('adult_number') }}">

                            <label>{{ trans('i18n.label.child_number') }}</label>
                            <span>{{ $errors->first('child_number') }}</span> 
                            <input type="number" name="child_number" class="form-control child-number" value="0">

                            <input type="checkbox" name="check_request" id="check_request">
                            <label>{{ trans('i18n.label.other_request') }}</label>
                            <span>{{ $errors->first('request') }}</span> 
                            <textarea name="request" class="form-control request" rows="5"></textarea>

                            <div align="center"><button type="submit" class="btn btn-lg btn-success" id="btnDatTour">{{ trans('i18n.button.book_tour') }}</button></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="modal" id="SuaThongTin">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn btn-danger modal-suathongtin" data-dismiss="modal">{{ trans('i18n.button.x') }}</button>
                <div class="modal-header">  
                    <div align="center">{{ trans('i18n.button.edit_profile') }}</div>
                </div>

                <div class="modal-body">
                    @if(Session::has('success_edit_user'))
                        <div class="alert alert-success text-center edit-user">{{Session::get('success_edit_user')}}</div>
                    @elseif((count($errors) > 0 && Session::has('edit_user')) || Session::has('error_birthday') || Session::has('error_avatar') || Session::has('error_edit_phone'))
                        <div class="edit-user"></div>
                    @endif
                    <form action="{{ route('sua-thong-tin') }}" method="post" enctype="multipart/form-data" class="form-suathongtin">
                        <fieldset>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label>{{ trans('i18n.label.name') }}</label>
                            <span>{{ $errors->first('name') }}</span>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">

                            <input type="checkbox" name="checkpassword" id="changePassword"><label>{{ trans('i18n.label.change_password') }}</label><br>

                            <label>{{ trans('i18n.label.new_password') }}</label>
                            <span>{{ $errors->first('password') }}</span>
                            <input type="password" class="form-control password" name="password" disabled="">

                            <label>{{ trans('i18n.label.password_again') }}</label>
                            <span>{{ $errors->first('passwordAgain') }}</span>
                            <input type="password" class="form-control password" name="passwordAgain" disabled="">

                            <label>{{ trans('i18n.label.avatar') }}</label>
                            @if(Session::has('error_avatar')) 
                                <span>{{ Session::get('error_avatar') }}</span>
                            @endif
                            <input type="file" class="form-control" name="anhdaidien" value="{{ Auth::user()->anhdaidien }}">

                            <label>{{ trans('i18n.label.phone') }}</label>
                            <span>
                                {{ $errors->first('phone') }}
                                @if(Session::has('error_edit_phone')) 
                                    {{ Session::get('error_edit_phone') }}
                                @endif
                            </span>
                            <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}">

                            <label>{{ trans('i18n.label.address') }}</label>
                            <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}">

                            <label>{{ trans('i18n.label.birthday') }}</label>
                            @if(Session::has('error_birthday')) 
                                <span>{{ Session::get('error_birthday') }}</span>
                            @endif
                            <input type="text" class="form-control" name="birthday" value="{{ Auth::user()->birthday }}">

                            <label>{{ trans('i18n.label.gender') }}</label>                                
                            @if(Auth::user()->gender == 1)
                            <input type="radio" name="gender" value="1" checked=""> <span>{{ trans('i18n.label.male') }}</span>
                            <input type="radio" name="gender" value="0"> <span>{{ trans('i18n.label.female') }}</span>
                            @elseif(Auth::user()->gender === 0)
                            <input type="radio" name="gender" value="1"> <span>{{ trans('i18n.label.male') }}</span>
                            <input type="radio" name="gender" value="0" checked=""> <span>{{ trans('i18n.label.female') }}</span>
                            @else
                            <input type="radio" name="gender" value="1"> <span>{{ trans('i18n.label.male') }}</span>
                            <input type="radio" name="gender" value="0"> <span>{{ trans('i18n.label.female') }}</span>
                            @endif

                            <div align="center">
                                <button type="submit" class="btn btn-success" id="btnSuaThongTin">{{ trans('i18n.button.edit') }}</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="modal" id="QuyDinh">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn btn-danger modal-suathongtin" data-dismiss="modal">{{ trans('i18n.button.x') }}</button>
            <div class="modal-header">  
                <div align="center">{{ trans('i18n.button.rule') }}</div>
            </div>

            <div class="modal-body">
                <fieldset>
                    <p>Khách hàng cần đăng nhập trước khi đặt tour</p>
                    <p>Website sử dụng hình thức thanh toán qua Paypal để thanh toán Online</p>
                    <p>Sau khi đăng ký hướng dẫn viên, cần liên hệ với admin để được xét cấp quyền mở tour</p>
                    <p>Khách hàng có thể chỉnh sửa đơn đặt tour của mình nếu hướng dẫn viên của tour đó chưa xác nhận</p>
                    <p>Chức năng đánh giá: Chỉ những khách hàng đã đi tour mới có quyền đánh giá</p>
                    <p>Chức năng bình luận: Cần đăng nhập mới có thể bình luận</p>
                    <p>Khách hàng sau khi hoàn tất việc đi tour có thể đăng ký tiếp tục đi tour đó</p>
                    <p>Khi đăng ký với tư cách là hướng dẫn viên, sẽ không có quyền đặt tour</p>
                    <span class="admin">ADMIN</span>
                </fieldset>
            </div>
        </div>
    </div>
</div>
