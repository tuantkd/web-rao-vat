@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Thông tin tài khoản')
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

    /* ========================================= */
    .btn_upload {
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        position: relative;
        color: #fff;
        background-color: #2a72d4;
        border: 1px solid #166b8a;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
    }

    .btn_upload:hover,
    .btn_upload:focus {
        background-color: #7ca9e6;
    }

    .yes {
        display: flex;
        align-items: flex-start;
        margin-top: 10px !important;
    }

    .btn_upload input {
        cursor: pointer;
        height: 100%;
        position: absolute;
        filter: alpha(opacity=1);
        -moz-opacity: 0;
        opacity: 0;
    }

    .preview1 {
        border: 1px solid gray;
        border-radius: 5px;
    }

    .it {
        height: 100px;
        margin-left: 10px;
    }

    .btn-rmv1 {
        display: none;
    }

    .rmv {
        cursor: pointer;
        color: #fff;
        border-radius: 30px;
        border: 1px solid #fff;
        display: inline-block;
        background: rgba(255, 0, 0, 1);
        margin: -6px -10px;
        padding: 0px 2px;
    }

    .rmv:hover {
        background: rgba(255, 0, 0, 0.5);
        border: 0.5px solid gray;
    }

</style>

<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5>Thông tin tài khoản</h5>
            </span>
        </div>
    </div>

    <div class="card-body" style="padding:10px;">
        @if(Auth::check())
        <form action="{{ url('update-infor-account/'.Auth::user()->id) }}" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-money-bill-alt"></i>
                        </span> Số tiền:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
                        <span class="badge badge-pill badge-warning">0 đ</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
                        <span class="badge badge-pill badge-light">
                            <i class="fas fa-user"></i>
                        </span> Tên liên hệ:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
                        <input type="text" class="form-control" value="{{ Auth::user()->username }}" name="txt_username">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-envelope"></i>
                        </span> Email:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="txt_email" disabled>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="fas fa-mars"></i>
                        </span> Giới tính:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                        @if(Auth::user()->sex == NULL )
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="txt_sex" value="Nam" id="sex">Nam
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="txt_sex" value="Nữ" id="sex">Nữ
                            </label>
                        </div>
                        @elseif(Auth::user()->sex == 'Nữ')
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Nam" id="sex" name="txt_sex">Nam
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" checked value="Nữ" id="sex" name="txt_sex">Nữ

                            </label>
                        </div>
                        @elseif(Auth::user()->sex == 'Nam')
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" checked value="Nam" id="sex" name="txt_sex">Nam
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Nữ" id="sex" name="txt_sex">Nữ
                            </label>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="far fa-calendar-alt"></i>
                        </span> Ngày sinh:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                        <input type="date" class="form-control" value="{{ Auth::user()->birthday }}" name="txt_birthday">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="fas fa-map-marker-alt"></i>
                        </span> Địa chỉ:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                        <input type="text" class="form-control" value="{{ Auth::user()->address }}" name="txt_address">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="fas fa-phone"></i>
                        </span> Điện thoại:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">
                        <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="txt_phone" onblur="Test_numberphone();" id="phone">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-4 col-lg-4">
                        <span class="badge badge-pill badge-light">
                            <i class="fa fa-file-image-o"></i>
                        </span> Ảnh đại diện:
                    </div>
                    <div class="col-7 col-sm-7 col-md-8 col-lg-8">

                        <div class="yes">
                            <span class="btn_upload">
                                <input type="file" id="imag" class="input-img" name="txt_avatar" />
                                <i class="fa fa-camera"></i> Thay đổi ảnh
                            </span>
                            <img id="ImgPreview" src="" class="preview1" />
                            <input type="button" id="removeImage1" value="x" class="btn-rmv1" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-danger btn-sm">Cập nhật</button>
            </div>
        </form>
        @endif
    </div>
</div>
{{-- =====================================================================  --}}

@if (Session::has('update_infor'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã cập nhật!'
        , showConfirmButton: false
        , timer: 2000
    });

</script>
@endif


<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    function Test_numberphone() {
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#phone').val();
        if (mobile !== '') {
            if (vnf_regex.test(mobile) == false) {
                confirm('Số điện thoại không đúng định dạng. Vui lòng nhập lại');
                $('#phone').val('');
                $('#phone').focus();
            }
        }
    }


    function readURL(input, imgControlName) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imag").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        $('.preview1').addClass('it');
        $('.btn-rmv1').addClass('rmv');
    });
    $("#removeImage1").click(function(e) {
        e.preventDefault();
        $("#imag").val("");
        $("#ImgPreview").attr("src", "");
        $('.preview1').removeClass('it');
        $('.btn-rmv1').removeClass('rmv');
    });

</script>

@endsection {{-- ==================================================== --}}
