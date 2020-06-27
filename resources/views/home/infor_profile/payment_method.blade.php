@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Phương thức thanh toán')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('col-9-content')

<style type="text/css">
    /* ========================================= */
    @media (max-width:600px) {
        .form-group .row .col-md-4 {
            color: black;
            font-size: 12px;
        }

        .form-group .row .col-md-8 input {
            color: black;
            font-size: 11px;
        }

        .badge-light i {
            font-size: 13px;
        }

        .form-group .row .col-md-8 {
            color: black;
            font-size: 11px;
        }
    }

    /* ========================================= */

    .badge-light {
        width: 30px;
    }

    .badge-light i {
        font-size: 15px;
    }

    .form-group .row .col-12 .row .col-md-3 {
        margin-bottom: 10px;
    }

    .form-group .row .col-12 .row .col-md-3 img {
        filter: gray;
        -webkit-filter: grayscale(1);
        -webkit-transition: all .3s ease-in-out;
        border: 1.5px solid gray;
        border-radius: 5px;
        padding: 5px;
    }

    .form-group .row .col-12 .row .col-md-3 img:hover {
        filter: none;
        -webkit-filter: grayscale(0);
        -webkit-transform: scale(1);
    }

</style>

<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5>
                    <i class="far fa-credit-card"></i> Phương thức thanh toán để nạp tiền
                </h5>
            </span>
        </div>
    </div>

    <div class="card-body" style="padding:10px;">

        <form action="#" class="needs-validation" novalidate>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-money-bill-alt"></i>
                        </span> Số tiền:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
                        @if(Auth::check())
                        <span class="badge badge-pill badge-warning">{{ number_format(Auth::user()->number_money) }} đ</span>
                        @endif
                    </div>
                </div>
            </div>

            <hr>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-credit-card"></i>
                        </span> Thẻ ngân hàng:
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">

                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/mb-new.png') }}" class="img-fluid" id="mb-bank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/vietcombank-new.png') }}" class="img-fluid" id="vietcombank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/scombank-new.png') }}" class="img-fluid" id="sacombank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/agribank-new.png') }}" class="img-fluid" id="agribank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/HDbank-new.png') }}" class="img-fluid" id="hd-bank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/techcombank-new.png') }}" class="img-fluid" id="techcombank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/acb-new.png') }}" class="img-fluid" id="acb-bank">
                            </div>

                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <img src="{{ url('public/logo/logo-bank/bidv-new.png') }}" class="img-fluid" id="bidv-bank">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">

                        <div class="card text-left" id="bidv-bank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>Đầu tư và Phát triển Việt Nam - BIDV</b> <br>
                                    Chi nhánh: <b>Nam Sài Gòn</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>13210000119651</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="agribank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>Nông nghiệp và PT Nông thôn - Agribank</b> <br>
                                    Chi nhánh: <b>Phú Mỹ Hưng</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>6240201010877</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="sacombank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>Sài Gòn Thương tín - Sacombank</b> <br>
                                    Chi nhánh: <b>Phú Mỹ Hưng</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>060086446858</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="acb-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>TMCP Á Châu - ACB</b> <br>
                                    Chi nhánh: <b>Nam Sài Gòn</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>182328679</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="vietcombank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>Ngoại thương Việt Nam - Vietcombank</b> <br>
                                    Chi nhánh: <b>Nam Sài Gòn</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>0181003429113</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="techcombank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>TMCP Kỹ thương Việt Nam - Techcombank</b> <br>
                                    Chi nhánh: <b>Phú Mỹ Hưng</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>19020594876026</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="mb-bank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>TMCP Quân Ðội - MB</b> <br>
                                    Chi nhánh: <b>Đông Sài Gòn</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>2811100166009</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                        <div class="card text-left" id="hd-bank-infor">
                            <div class="card-body">
                                <p class="card-text">
                                    Ngân hàng: <b>TMCP Phát triển Nhà TP.HCM - HD Bank</b> <br>
                                    Chi nhánh: <b>Sài Gòn</b> <br>
                                    Chủ tài khoản: <b>Công ty cổ phần Mua Bán</b> <br>
                                    Số tài khoản: <b>030704070003619</b> <br>
                                    Nội dung CK: Nạp tiền cho tài khoản {{ Auth::user()->username }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-credit-card"></i>
                        </span> Thanh toán Paypal:
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-credit-card"></i>
                        </span> Thanh toán ZaloPay:
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-left">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <a href="" data-toggle="modal" data-target="#exampleModalLong">
                                    <img src="{{ url('public/logo/logo-bank/ZaloPay-new.png') }}" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>



{{-- Modal --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label><b>Nhập số tiền:</b></label>
                        <select class="selectpicker form-control" data-live-search="true">
                            <option value="10000">10.000</option>
                            <option value="20000">20.000</option>
                            <option value="40000">40.000</option>
                            <option value="50000">50.000</option>
                            <option value="100000">100.000</option>
                            <option value="200000">200.000</option>
                            <option value="500000">500.000</option>
                            <option value="1000000">1.000.000</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-outline-warning" type="submit">Đồng ý</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- End-Modal --}}

<script>
    $("#bidv-bank-infor").hide();
    $("#agribank-infor").hide();

    $("#sacombank-infor").hide();
    $("#acb-infor").hide();

    $("#vietcombank-infor").hide();
    $("#techcombank-infor").hide();

    $("#mb-bank-infor").hide();
    $("#hd-bank-infor").hide();

    $("#bidv-bank").click(function() {
        $("#bidv-bank-infor").show();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();

    });

    $("#agribank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").show();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();
    });

    $("#mb-bank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").show();
        $("#hd-bank-infor").hide();
    });

    $("#vietcombank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").show();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();
    });

    $("#sacombank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").show();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();
    });

    $("#hd-bank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").show();
    });

    $("#techcombank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").hide();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").show();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();
    });

    $("#acb-bank").click(function() {
        $("#bidv-bank-infor").hide();
        $("#agribank-infor").hide();
        $("#sacombank-infor").hide();
        $("#acb-infor").show();
        $("#vietcombank-infor").hide();
        $("#techcombank-infor").hide();
        $("#mb-bank-infor").hide();
        $("#hd-bank-infor").hide();
    });

</script>


<script>
    paypal.Buttons({
        style: {
            shape: 'rect'
            , color: 'gold'
            , layout: 'vertical'
            , label: 'paypal',

        }
        , createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '1'
                    }
                }]
            });
        }
        , onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Giao dịch hoàn thành bởi' + details.payer.name.given_name + '!');
            });
        }
    }).render('#paypal-button-container');

</script>

@endsection {{-- ==================================================== --}}
