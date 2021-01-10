@extends('layout.layout_home')
@section('title', 'Trang đăng nhập')
{{-- ==================================================== --}}


{{-- ==================================================== --}}
@section('content')
<br><br><br>

<style>
    @media screen and (max-width: 600px) {
        .card .member-new {
            font-size: 15px;
        }

        .card .header-title h4 {
            font-size: 16px;
            padding-top: 10px;
        }

        form .form-group {
            font-size: 12px;
        }

        form .form-group input {
            font-size: 11.5px;
        }

        .input-group .input-group-append #button-eye {
            font-size: 12px;
        }

        form .row .col-12 button {
            font-size: 11.5px;
        }

        form .row .col-12 a {
            font-size: 11.5px;
        }

        #register-now {
            font-size: 13px;
            display: block;
        }

        .a-text-pwd #b-text {
            font-size: 13px;
        }

        #login-not-account {
            font-size: 12px;
        }

        .btn-outline-primary #image-fb {
            max-width: 100%;
            height: 25px;
        }

        .btn-outline-primary .badge {
            font-size: 12px;
        }

        .btn-outline-secondary .badge {
            font-size: 12px;
        }

        .btn-outline-primary {
            font-size: 13px;
        }

        .btn-outline-secondary #image-gg {
            max-width: 100%;
            height: 22px;
        }

        .btn-outline-secondary {
            font-size: 13px;
        }
    }

    .col-12 .social img {
        max-width: 100%;
        height: 30px;
    }

    .btn-outline-primary span {
        width: 160px;
        text-align: left;
        font-size: 12.5px;
    }

    .btn-outline-secondary span {
        width: 160px;
        text-align: left;
        font-size: 12.5px;
    }

</style>


<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
            <div class="card" style="margin-bottom:5px;">
                <div class="card-header header-title">
                    <h4><strong style="color: #ffdf00;text-shadow: 1px 1px 1px gray;">ĐĂNG NHẬP</strong></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- ====================================================================== -->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <form action="{{ url('post-page-login') }}" class="needs-validation" novalidate method="POST">
                                @csrf

                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('message') }}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="email">
                                        <i class="fa fa-envelope"></i> Email/Số điện thoại:
                                    </label>
                                    <input type="text" class="form-control" id="email" placeholder="Email/số điện thoại" name="txt_email_phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">
                                        <i class="fas fa-key"></i> Mật khẩu:
                                    </label>
                                    <div class="input-group mb-3" id="show_hide_password">
                                        <input class="form-control" type="password" placeholder="Mật khẩu" name="txt_password" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="button-eye">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:#ffdf00;"></i></a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">Chưa nhập mật khẩu</div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <button type="submit" class="btn btn-secondary btn-block">
                                            <span style="color: #ffdf00;text-shadow: 1px 1px 1px gray;">
                                                <i class="fas fa-sign-in-alt"></i> Đăng nhập
                                            </span>
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-right col-text-pwd">
                                        <a href="{{ url('page-input-email') }}" class="a-text-pwd">
                                            <b id="b-text">Quên mật khẩu</b>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <span class="text-login">
                                    Bạn chưa là thành viên?
                                    <a href="{{ url('page-register') }}" id="a-text-login">
                                        <span id="register-now">Đăng ký ngay</span>
                                    </a>
                                </span>

                            </form>
                        </div>
                        <!-- ====================================================================== -->


                        <div class="vl"></div>


                        <!-- ====================================================================== -->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center line-social">
                            <b id="login-not-account">Đăng nhập không cần tài khoản</b>
                            <a class="btn btn-outline-primary button-social social pl-1" href="{{ url('login/facebook') }}">
                                <img src="{{ url('public/logo/facebook-icon.png') }}" id="image-fb">
                                <span class="badge">Đăng nhập với Facebook</span>
                            </a>
                            <a class="btn btn-outline-secondary button-social social pl-1" href="{{ url('login/google') }}">
                                <img src="{{ url('public/logo/google-icon.png') }}" id="image-gg">
                                <span class="badge">Đăng nhập với Google</span>
                            </a>
                            <br><br>

                            <div class="card">
                                <div class="card-header text-left member-new">
                                    <strong><i class="far fa-heart"></i>
                                        Chào mừng thành viên</strong>
                                </div>
                                <div class="card-body text-left p-2">
                                    @foreach($show_user_new as $key => $show_user)

                                    <div class="image-portrait">

                                        @if($show_user->facebook_id != NULL)

                                        <img src="{{ $show_user->avatar }}" class="rounded" style="width:40px;height:40px;"> ​

                                        @elseif($show_user->google_id != NULL)

                                        <img src="{{ $show_user->avatar }}" class="rounded" style="width:40px;height:40px;">

                                        @elseif($show_user->avatar != NULL)

                                        <img src="{{ url('public/upload_images_avatar/'.$show_user->avatar) }}" class="rounded" style="width:40px;height:40px;">

                                        @else

                                        <img src="{{ url('public/logo/user/user-icon-edit.png') }}" class="rounded" style="width:40px;height:40px;">

                                        @endif

                                        <span style="color:black;">{{ $show_user->username }}</span>
                                        <i class="far fa-grin-hearts" style="color:red;"></i>

                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- ====================================================================== -->
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
