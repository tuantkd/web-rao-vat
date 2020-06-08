@extends('layout.layout_home')
@section('title', 'Trang đăng nhập')
{{-- ==================================================== --}}


{{-- ==================================================== --}}
@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card" style="margin-bottom:5px;">
                <div class="card-header header-title">
                    <h4>ĐĂNG NHẬP</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <form action="/action_page.php" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="email">
                                        <i class="fa fa-envelope"></i> Email/Số điện thoại:
                                    </label>
                                    <input type="text" class="form-control" id="email" placeholder="Email/số điện thoại" name="txt_email" required>
                                    <div class="invalid-feedback">Chưa nhập địa chỉ email</div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">
                                        <i class="fas fa-key"></i> Mật khẩu:
                                    </label>
                                    <div class="input-group mb-3" id="show_hide_password">
                                        <input class="form-control" type="password" placeholder="Mật khẩu" name="txt_password" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="button">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <button type="submit" class="btn btn-danger btn-block">
                                            <i class="fas fa-sign-in-alt"></i> Đăng nhập
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right col-text-pwd">
                                        <a href="" class="a-text-pwd"><b id="b-text">Quên mật khẩu</b></a>
                                    </div>
                                </div>
                                <br>
                                <span class="text-login">
                                    Bạn chưa là thành viên?
                                    <a href="{{ url('page-register') }}" id="a-text-login">Đăng ký ngay</a>
                                </span>

                            </form>

                        </div>

                        <div class="vl"></div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center line-social">
                            <b>Đăng nhập không cần tài khoản</b>
                            <a class="btn btn-outline-primary button-social" href="#" role="button">
                                <img src="{{ url('public/logo/facebook-icon.png') }}" style="max-width:100%;height:30px;">
                                Đăng nhập với Facebook
                            </a>
                            <a class="btn btn-outline-secondary button-social" href="#" role="button">
                                <img src="{{ url('public/logo/google-icon.png') }}" style="max-width:100%;height:25px;">
                                Đăng nhập với Google
                            </a>
                            <br><br>

                            <div class="card">
                                <div class="card-header text-left">
                                    <i class="far fa-heart"></i>
                                    Chào mừng thành viên mới
                                </div>
                                <div class="card-body text-left">
                                    <div class="image-portrait">
                                        <img src="{{ url('public/images/chan-dung-1.jpg') }}" class="rounded" style="width:40px;height:40px;">
                                        Thị Xíu <i class="far fa-grin-hearts" style="color:red;"></i>
                                    </div>
                                    <div class="image-portrait">
                                        <img src="{{ url('public/images/chan-dung-2.jpg') }}" class="rounded" style="width:40px;height:40px;">
                                        Văn Toàn <i class="far fa-grin-hearts" style="color:red;"></i>
                                    </div>
                                    <div class="image-portrait">
                                        <img src="{{ url('public/images/chan-dung-3.jpg') }}" class="rounded" style="width:40px;height:40px;">
                                        Bích Nga <i class="far fa-grin-hearts" style="color:red;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>


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


    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });

</script>

@endsection
{{-- ==================================================== --}}
