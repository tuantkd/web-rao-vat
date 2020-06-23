@extends('layout.layout_home') @section('title', 'Trang chủ')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('content')
<br><br><br>
<style type="text/css">
    /* =================================================== */
    @media (max-width:600px) {
        .card .card-header .clearfix .float-left h5 {
            font-size: 12px;
        }

        .container {
            margin-top: 0px;
        }

        .input-group input {
            font-size: 13px;
            height: 30px;
            margin-top: 3px;
        }

        .input-group .input-group-append button {
            font-size: 12px;
            height: 30px;
            margin-top: 3px;
        }

        .manage-post-new .media-body .row .col-md-9 .h4-title {
            font-size: 13px;
            color: black;
        }

        .manage-post-new .media-body .row .col-md-9 .p-content-text {
            font-size: 10px;

        }

        .manage-post-new .media-body .row .col-12 a {
            font-size: 10px;
            margin-top: 0px;
        }

        .manage-post-new .media-body .row .col-md-9 p {
            font-size: 10px;
            color: #808080;
        }

        .container .row .col-sm-3 .option-sidebar {
            display: none;
        }
    }

    /* =================================================== */


    /* =================================================== */
    .form-row .form-group .label-title-mobile {
        display: block;
    }

    .card .card-body .btn-link {
        display: block;
        border-radius: 5px;
        padding: 8px;
        margin: 5px;
        text-decoration: none;
        background-color: #ead2d2;
    }

    .card .card-body .btn-link:hover {
        background-color: #dfdfdf;
    }

    #myDIV a.active {
        background-color: #dfdfdf;
        color: black;
    }

    .clearfix .float-left h5 {
        margin-top: 10px;
        margin-left: 10px;
    }

    .btn-default {
        border: 1.5px solid grey;
        padding: 5px;
        border-radius: 8px;
    }

    .btn-default:hover {
        background-color: white;
    }

    .manage-post-new img {
        max-width: 100%;
        height: 60px;
        border-radius: 5px;
        margin-top: 0px;
    }

    .manage-post-new .media-body .row .col-md-9 h4 {
        font-size: 16px;
        color: black;
    }

    .manage-post-new .media-body .row .col-md-9 p {
        font-size: 13px;
        color: #808080;
    }

    .manage-post-new .media-body .row .col-md-3 {
        padding: 10px;
    }

    .manage-post-new {
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .manage-post-new:hover {
        background-color: #dfdfdf;
    }

    /* =================================================== */

</style>

<div class="container">
    {{-- profile --}}
    <div class="row">
        {{-- col-sm-3 --}}
        <div class="col-sm-3" style="padding: 2px;">
            <div class="card option-sidebar">
                <div class="card-body" style="padding:10px;" id="myDIV">
                    <a class="btn-link" href="{{ url('post-new-category') }}">
                        <i class="fas fa-edit" style="font-size:16px;"></i> &ensp;Đăng tin rao bán
                    </a>
                    <a class="btn-link" href="{{ url('page-all-news') }}">
                        <i class="far fa-file-alt" style="font-size:16px;"></i>
                        &ensp;Quản lý tin, nâng cấp tin
                    </a>
                    <a class="btn-link" href="{{ url('page-payment-method') }}">
                        <i class="fas fa-dollar-sign" style="font-size:16px;"></i>
                        &ensp;Nạp tiền vào tài khoản
                    </a>
                    <a class="btn-link" href="{{ url('page-news-save') }}">
                        <i class="far fa-flag" style="font-size:16px;"></i>
                        &ensp;Bản tin đã lưu
                    </a>
                    <a class="btn-link" href="{{ url('page-infor-account') }}">
                        <i class="fas fa-user" style="font-size:16px;"></i>
                        &ensp;Thông tin tài khoản
                    </a>
                    <a class="btn-link" href="{{ url('page-change-password') }}">
                        <i class="fas fa-key" style="font-size:16px;"></i>
                        &ensp;Đổi mật khẩu
                    </a>
                    <a class="btn-link" href="#" data-toggle="modal" data-target="#exampleModalLogout">
                        <i class="fas fa-sign-out-alt" style="font-size:16px;color:red;"></i>
                        &ensp;Đăng xuất
                    </a>
                </div>
            </div>
        </div>
        {{-- col-sm-3 --}}

        {{-- col-sm-9 --}}
        <div class="col-sm-9" style="padding:2px;">

            @yield('col-9-content')

        </div>
        {{-- col-sm-9 --}}
    </div>
    {{-- profile --}}
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Bạn có muốn đăng xuất khỏi hệ thống ?</h4>
            </div>
            <div class="modal-footer">
                <a href="{{ url('logout') }}">
                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i>&ensp;Đăng xuất ngay
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#myDIV a').click(function() {
            $('#myDIV a').removeClass("active");
            $(this).addClass("active");
        });
    });

</script>


@endsection {{-- ==================================================== --}}
