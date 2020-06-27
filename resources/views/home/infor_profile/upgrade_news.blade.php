@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Bản tin đã lưu')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('col-9-content')

<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5><i class="fas fa-crown"></i>&ensp;Nâng cấp mua dịch vụ bản tin</h5>
            </span>
        </div>
    </div>
    <div class="card-body" style="padding:10px;">
        <form action="" method="post">
            <div class="alert alert-warning" role="alert">
                <span>Bản tin: <strong>{{ $upgrade->title }}</strong></span>
                <hr>
                <div class="clearfix">
                    <span class="float-left">
                        <span style="width:60px;"><i class="fa fa-shopping-cart"></i></span> Loại tin <br>
                        <span style="width:60px;"><i class="fa fa-clock-o"></i></span> Ngày cập nhật <br>
                        <span style="width:60px;"><i class="fa fa-clock-o"></i></span> Ngày hết hạn <br>
                        <span style="width:60px;"><i class="fa fa-info-circle"></i></span> Trạng thái tin
                    </span>
                    <span class="float-right">
                        @if($upgrade->status == 0)
                        Miễn phí
                        @else
                        Dịch vụ
                        @endif
                        <br>

                        {{ date("d/m/Y", strtotime($upgrade->created_at)) }} <br>

                        <?php
                            $date1 = $upgrade->created_at;
                            $newdate1 = strtotime ($upgrade->number_date_expired.'day', strtotime ( $date1 ));
                            $newdate1 = date ( 'd/m/Y' , $newdate1 );
                            echo $newdate1;

                            $date_current = date("d/m/Y");
                            if ($newdate1 < $date_current){ 
                                echo '<br><span class="text-danger">Đã hết hạn</span>'; 
                            }else{
                                echo '<br><span class="text-success">Còn thời gian</span>'; 
                            }
                        ?>
                    </span>
                </div>
            </div>

            {{-- ========================================= --}}

            <div class="card">
                <div class="card-header">
                    <b><i class="fa fa-gift"></i> Chọn gói dịch vụ cho bản tin</b>
                </div>
                <div class="card-body p-2">
                    <div class="clearfix">
                        <span class="float-left"><b>Tài khoản của bạn</b></span>
                        <span class="float-right">
                            @if(Auth::check())
                            <span class="badge badge-pill badge-warning">
                                {{ number_format(Auth::user()->number_money) }} đ
                            </span>
                            @endif
                        </span>
                    </div>
                    <hr>

                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="txt_price_service" value="1000" id="txt_price_service" onchange="ChangePrice(this)">
                                    Tin Thường
                                </label>
                            </div>
                            <span class="badge badge-danger badge-pill">1,000 đ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="txt_price_service" value="15000" checked id="txt_price_service" onchange="ChangePrice(this)">
                                    Tin Vip
                                </label>
                            </div>
                            <span class="badge badge-danger badge-pill">15,000 đ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="txt_price_service" value="25000" id="txt_price_service" onchange="ChangePrice(this)">
                                    Tin PowerVip
                                </label>
                            </div>
                            <span class="badge badge-danger badge-pill">25,000 đ</span>
                        </li>
                    </ul>
                    <hr>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-calendar-plus-o"></i>
                                </span> Số ngày:
                            </div>
                            <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
                                <div class="form-group">
                                    <select class="form-control" name="txt_date" id="mySelect" onclick="ChangeDate(this)">
                                        <option value="">- - Chọn - -</option>
                                        <option value="2">2 ngày</option>
                                        <option value="3">3 ngày</option>
                                        <option value="4">4 ngày</option>
                                        <option value="5">5 ngày</option>
                                        <option value="6">6 ngày</option>
                                        <option value="7">7 ngày (Giảm 5%)</option>
                                        <option value="8">8 ngày</option>
                                        <option value="9">9 ngày</option>
                                        <option value="10">10 ngày</option>
                                        <option value="11">11 ngày</option>
                                        <option value="12">12 ngày</option>
                                        <option value="13">13 ngày</option>
                                        <option value="14">14 ngày (Giảm 10%)</option>
                                        <option value="15">15 ngày</option>
                                        <option value="16">16 ngày</option>
                                        <option value="17">17 ngày</option>
                                        <option value="18">18 ngày</option>
                                        <option value="19">19 ngày</option>
                                        <option value="20">20 ngày</option>
                                        <option value="21">21 ngày (Giảm 15%)</option>
                                        <option value="22">22 ngày</option>
                                        <option value="23">23 ngày</option>
                                        <option value="24">24 ngày</option>
                                        <option value="25">25 ngày</option>
                                        <option value="26">26 ngày</option>
                                        <option value="27">27 ngày</option>
                                        <option value="28">28 ngày (Giảm 20%)</option>
                                        <option value="29">29 ngày</option>
                                        <option value="90">3 tháng (Giảm 25%)</option>
                                        <option value="180">6 ngày (Giảm 30%)</option>
                                        <option value="210">9 ngày (Giảm 35%)</option>
                                        <option value="365">12 ngày (Giảm 40%)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-percent"></i>
                                </span> Chiết khấu :
                            </div>
                            <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-success" id="discount">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-money"></i>
                                </span> Thành tiền:
                            </div>
                            <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-success" id="money" style="font-weight: bold;">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>

<script>
    //Định dạng phẩy trong số tiền
    var formatter = new Intl.NumberFormat('vi', {
        style: 'currency'
        , currency: 'VND'
    , });

    //Khởi tạo biến money = null ban đầu
    function ChangeDate(val) {
        var price_service = $('input[name=txt_price_service]:checked').val();
        var mySelect = val.value;
        var money;
        var discount_html = document.getElementById("discount");
        var money_html = document.getElementById("money");

        //------------------------------------
        if (mySelect == "") {
            money = price_service * 0;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = "- - -";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 2) {
            money = price_service * 2;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 4) {
            money = price_service * 4;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 5) {
            money = price_service * 5;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 6) {
            money = price_service * 6;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        //------------------------------------

        if (mySelect == 7) {
            var money_price = price_service * 7;
            var percent = (money_price * 5) / 100;
            var price_discount = money_price - percent;
            discount_html.innerHTML = "(5%) -" + " Giảm " + formatter.format(percent);
            money_html.innerHTML = formatter.format(money_price);
            money_html.style.textDecoration = "line-through";
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
        if (mySelect == 3) {
            money = price_service * 3;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = formatter.format(money);
        }
    }

</script>


@endsection
{{-- ==================================================== --}}
