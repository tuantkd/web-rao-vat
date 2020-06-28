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
        <form action="{{ url('post-upgrade-news/'.$upgrade->id) }}" method="POST">
            @csrf
            @method('put')
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
                                echo '<br><span class="text-success">Còn thời hạn</span>'; 
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
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-calendar-plus-o"></i>
                                </span> Số ngày:
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
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
                                        <option value="180">6 tháng (Giảm 30%)</option>
                                        <option value="270">9 tháng (Giảm 35%)</option>
                                        <option value="360">12 tháng (Giảm 40%)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- Chiết khấu --}}
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-percent"></i>
                                </span> Chiết khấu :
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-danger" id="discount">- - -</span><br>
                                    <span class="text-success" id="price_origin">- - -</span>
                                    <span class="text-success" id="discount_price">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Chiết khấu --}}



                    {{-- Thuế VAT --}}
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-stack-overflow"></i>
                                </span> Thuế VAT <span class="badge badge-pill badge-secondary">10%</span> :
                            </div>
                            <div class="col-5 col-sm-5 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-danger" id="tax">- - -</span><br>
                                    <span class="text-success" id="price_of_tax">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Thuế VAT --}}


                    {{-- Thành tiền --}}
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-money"></i>
                                </span> Thành tiền:
                            </div>
                            <div class="col-5 col-sm-5 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-success" id="money" style="font-weight: bold;">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Thành tiền --}}



                    {{-- Thanh toán --}}
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-4 col-lg-4 text-left">
                                <span class="badge badge-pill badge-light">
                                    <i class="fa fa-money"></i>
                                </span> Thanh toán:
                            </div>
                            <div class="col-5 col-sm-5 col-md-8 col-lg-8 text-right">
                                <div class="form-group">
                                    <span class="text-success" id="payment" style="font-weight: bold;">- - -</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Thanh toán --}}

                    {{-- Tổng số tiền thanh toán --}}
                    <input type="hidden" name="txt_total_price" id="txt_total_price" value="">

                </div>
            </div>

            <div class="text-right mt-5">
                <button type="submit" class="btn btn-info"><i class="fa fa-level-up"></i> Nâng cấp</button>
            </div>

        </form>
    </div>
</div>


@if (Session::has('mes_infor_money'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Tài khoản hiện tại của bạn không đủ nâng cấp tin. Vui lòng nạp tiền vào tài khoản!'
        , showConfirmButton: false
        , timer: 5000
    });

</script>
@php(Session::forget('mes_infor_money'))
@endif


@if (Session::has('update_success'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã nâng cấp tin'
        , showConfirmButton: false
        , timer: 1000
    });

</script>
@php(Session::forget('update_success'))
@endif



<script>
    //Định dạng phẩy trong số tiền
    var formatter = new Intl.NumberFormat('vi', {
        style: 'currency'
        , currency: 'VND'
    , });
    document.getElementById("price_origin").style.display = "none";
    document.getElementById("price_of_tax").style.display = "none";
    document.getElementById("discount_price").style.display = "none";
    document.getElementById("after_price_tax").style.display = "none";



    //Khởi tạo biến money = null ban đầu
    function ChangeDate(val) {
        var price_service = $('input[name=txt_price_service]:checked').val();
        var mySelect = val.value;
        var money;
        var discount_html = document.getElementById("discount");
        var price_origin_html = document.getElementById("price_origin");
        var money_html = document.getElementById("money");
        var tax_html = document.getElementById("tax");
        var price_of_tax_html = document.getElementById("price_of_tax");
        var payment_html = document.getElementById("payment");
        var discount_price_html = document.getElementById("discount_price");
        var txt_total_price_html = document.getElementById("txt_total_price");

        //------------------------------------
        if (mySelect == "") {
            money = price_service * 0;
            discount_html.innerHTML = "- - -";
            money_html.innerHTML = "- - -";
            tax_html.innerHTML = "- - -";
            price_of_tax_html.style.display = "none";
            money_html.innerHTML = "- - -";
            payment_html.innerHTML = "- - -";
            document.getElementById("price_origin").style.display = "none";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 2) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 2;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;


            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 3) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 3;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 4) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 4;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 5) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 5;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 6) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 6;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 7) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 7;

            //Tính số tiền giảm giá
            var percent = (money_price * 5) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(5%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 8) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 8;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 9) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 9;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 10) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 10;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 11) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 11;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 12) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 12;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 13) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 13;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 14) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 14;

            //Tính số tiền giảm giá
            var percent = (money_price * 10) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(10%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 15) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 15;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 16) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 16;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 17) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 17;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 18) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 18;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 19) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 19;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 20) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 20;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 21) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 21;

            //Tính số tiền giảm giá
            var percent = (money_price * 15) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(15%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 22) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 22;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        if (mySelect == 23) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 23;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 24) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 24;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 25) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 25;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 26) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 26;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 27) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 27;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 28) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 28;

            //Tính số tiền giảm giá
            var percent = (money_price * 20) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(20%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        if (mySelect == 29) {
            //Giá dịch vụ nhân với số ngày
            money = price_service * 29;

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (money * 10) / 100;

            //Số tiền gốc trừ cho thuế
            var price_money_tax = money - price_percent_tax;

            //Hiển thị không có giảm giá
            discount_html.innerHTML = "- - -";

            //Hiển thị số tiền tính thuế bao nhiêu đã tính
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Hiển thị số tiền gốc khi chưa tính thuế và gạch ngang nó
            price_of_tax_html.innerHTML = formatter.format(money);
            price_of_tax_html.style.textDecoration = "line-through";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(price_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = price_money_tax;

            //Ẩn số tiền gốc khi có giảm %
            document.getElementById("price_origin").style.display = "none";

            //Hiển thị ra số tiền gốc có thuế VAT
            document.getElementById("price_of_tax").style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        //3 Tháng
        if (mySelect == 90) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 90;

            //Tính số tiền giảm giá
            var percent = (money_price * 25) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(25%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------

        //------------------------------------
        //6 Tháng
        if (mySelect == 180) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 180;

            //Tính số tiền giảm giá
            var percent = (money_price * 30) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(30%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        //9 Tháng
        if (mySelect == 270) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 270;

            //Tính số tiền giảm giá
            var percent = (money_price * 35) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(35%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------


        //------------------------------------
        //12 Tháng
        if (mySelect == 360) {
            //Giá tin dịch vụ nhân với 7
            var money_price = price_service * 360;

            //Tính số tiền giảm giá
            var percent = (money_price * 40) / 100;

            //Số tiền sau khi trừ giảm giá
            var price_discount = money_price - percent;

            //Hiển thị % và số tiền giảm giá %
            discount_html.innerHTML = "(40%) -" + " Giảm " + formatter.format(percent);

            //Hiển thị giá gốc dưới giảm giá và hiện ra
            price_origin_html.innerHTML = formatter.format(money_price);
            price_origin_html.style.textDecoration = "line-through";
            price_origin_html.style.display = "block";

            //Hiển thị số tiền đã trừ đi giảm giá dưới tiền gốc
            discount_price_html.innerHTML = formatter.format(price_discount);

            //Hiển thị Số tiền còn lại sau khi trừ tiền giảm giá
            money_html.innerHTML = formatter.format(price_discount);


            //==============================================

            //Tính thuế 10% ra giá trị
            var price_percent_tax = (price_discount * 10) / 100;

            //Hiển thị số tiền tính thuế
            tax_html.innerHTML = formatter.format(price_percent_tax);

            //Số tiền sau khi trừ số thuế đã tính
            var after_money_tax = price_discount + price_percent_tax;

            //Hiển thị số tiền đã tính giảm giá xong và gạch ngang, hiện ra
            price_of_tax_html.innerHTML = formatter.format(price_discount);
            price_of_tax_html.style.textDecoration = "line-through";
            document.getElementById("price_of_tax").style.display = "block";

            //Hiển thị số tiền cuối cùng thành tiền
            money_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán
            payment_html.innerHTML = formatter.format(after_money_tax);

            //Hiển thị số tiền thanh toán trong thẻ input
            txt_total_price_html.value = after_money_tax;

            //Hiện ra html
            price_origin_html.style.display = "block";
            discount_price_html.style.display = "block";
        }
        //------------------------------------
    }

</script>


@endsection
{{-- ==================================================== --}}
