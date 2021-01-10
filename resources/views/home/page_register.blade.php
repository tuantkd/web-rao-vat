@extends('layout.layout_home')
@section('title', 'Trang đăng ký')
{{-- ==================================================== --}}


{{-- ==================================================== --}}
@section('content')


<style type="text/css">
    .alert-danger {
        display: none;
        margin-top: 10px;
    }

    .requirements {
        list-style-type: none;
    }

    .requirements i {
        font-size: 15px;
    }

    .requirements .fa-check {
        font-size: 12px;
        color: green;
        border: 1px solid green;
        margin-right: 3px;
        margin-left: -3px;
        padding: 2px;
    }

    .wrong .fa-check {
        display: none;
    }

    .good .fa-times {
        display: none;
    }

</style>


<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card" style="margin-bottom:5px;">
                <div class="card-header header-title">
                    <h4><strong style="color: #ffdf00;text-shadow: 1px 1px 1px gray;">ĐĂNG KÝ TÀI KHOẢN</strong></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 alert-register">
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Tạo tài khoản mới!</strong><br>
                                Bạn sẽ nhận được email từ Raoban.com để kích hoạt tài khoản. <br>
                                Vui lòng kiểm tra Email mà bạn đăng ký để kích hoạt trước khi sử dụng!
                            </div>

                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>

                        <div class="vl-register"></div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 line-social" id="line-social-mobile">

                            <form action="{{ url('post-page-register') }}" class="needs-validation" novalidate method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="fullname">
                                        <i class="far fa-user-circle"></i> Tên đầy đủ:
                                    </label>
                                    <input type="text" class="form-control" placeholder="Nhập tên đầy đủ" name="txt_fullname" required>
                                    <div class="invalid-feedback">Chưa nhập tên đầy đủ</div>
                                </div>
                                <div class="form-group">
                                    <label for="fullname">
                                        <i class="far fa-user-circle"></i> Tên tài khoản:
                                    </label>
                                    <input type="text" class="form-control" placeholder="Nhập tên tài khoản" name="txt_username" required id="user">
                                    <div class="invalid-feedback">Chưa nhập tên tài khoản</div>
                                    <p style="color:red;">{{ $errors->first('txt_username') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">
                                        <i class="fas fa-key"></i> Mật khẩu:
                                    </label>
                                    <input type="password" id="inputValidationEx2" class="form-control validate" required placeholder="Nhập mật khẩu" name="txt_password">

                                    <div class="invalid-feedback">Chưa nhập mật khẩu</div>

                                    <div class="alert alert-danger password-alert" role="alert">
                                        <ul>
                                            <li class="requirements leng">
                                                <i class="fas fa-check green-text"></i>
                                                <i class="fas fa-times red-text"></i>
                                                Mật khẩu phải có ít nhất 8 ký tự.
                                            </li>
                                            <li class="requirements big-letter">
                                                <i class="fas fa-check green-text"></i>
                                                <i class="fas fa-times red-text"></i>
                                                Mật khẩu phải có ít nhất 1 chữ cái lớn.
                                            </li>
                                            <li class="requirements num">
                                                <i class="fas fa-check green-text"></i>
                                                <i class="fas fa-times red-text"></i>
                                                Mật khẩu phải có ít nhất 1 số.
                                            </li>
                                            <li class="requirements special-char">
                                                <i class="fas fa-check green-text"></i>
                                                <i class="fas fa-times red-text"></i>
                                                Mật khẩu phải có ít nhất 1 ký tự đặc biệt.
                                            </li>
                                        </ul>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="email">
                                        <i class="far fa-envelope"></i> Email:
                                    </label>
                                    <input type="email" class="form-control" required placeholder="Nhập địa chỉ email" name="txt_email">
                                    <div class="invalid-feedback">Chưa nhập email</div>
                                    <p style="color:red;">{{ $errors->first('txt_email') }}</p>
                                </div>


                                <div class="form-group">
                                    <label for="phone">
                                        <i class="fas fa-phone"></i> Số điện thoại:
                                    </label>
                                    <input type="number" class="form-control" id="phone" placeholder="Nhập xác nhận mật khẩu" name="txt_phone" required onblur="Test_numberphone();">
                                    <div class="invalid-feedback">Chưa nhập số điện thoại</div>
                                    <p style="color:red;">{{ $errors->first('txt_phone') }}</p>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-secondary submit-button" id="submitBtn">
                                        <span style="color: #ffdf00;text-shadow: 1px 1px 1px gray;">
                                            <i class="fas fa-user-plus"></i>
                                            Đăng ký
                                        </span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- end-row -->
                </div>
            </div>
        </div>
        <!-- col-sm-10 -->
        <div class="col-sm-1"></div>
    </div>
</div>


<script type="text/javascript">
    $(function() {
        var $password = $(".form-control[type='password']");
        var $passwordAlert = $(".password-alert");
        var $requirements = $(".requirements");
        var leng, bigLetter, num, specialChar;
        var $leng = $(".leng");
        var $bigLetter = $(".big-letter");
        var $num = $(".num");
        var $specialChar = $(".special-char");
        var specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
        var numbers = "0123456789";

        $requirements.addClass("wrong");
        $password.on("focus", function() {
            $passwordAlert.show();
        });

        $password.on("input blur", function(e) {
            var el = $(this);
            var val = el.val();
            $passwordAlert.show();

            if (val.length < 8) {
                leng = false;
            } else if (val.length > 7) {
                leng = true;
            }


            if (val.toLowerCase() == val) {
                bigLetter = false;
            } else {
                bigLetter = true;
            }

            num = false;
            for (var i = 0; i < val.length; i++) {
                for (var j = 0; j < numbers.length; j++) {
                    if (val[i] == numbers[j]) {
                        num = true;
                    }
                }
            }

            specialChar = false;
            for (var i = 0; i < val.length; i++) {
                for (var j = 0; j < specialChars.length; j++) {
                    if (val[i] == specialChars[j]) {
                        specialChar = true;
                    }
                }
            }

            console.log(leng, bigLetter, num, specialChar);

            if (leng == true && bigLetter == true && num == true && specialChar == true) {
                $(this).addClass("valid").removeClass("invalid");
                $requirements.removeClass("wrong").addClass("good");
                $passwordAlert.removeClass("alert-danger").addClass("alert-success");
            } else {
                $(this).addClass("invalid").removeClass("valid");
                $passwordAlert.removeClass("alert-success").addClass("alert-danger");

                if (leng == false) {
                    $leng.addClass("wrong").removeClass("good");
                } else {
                    $leng.addClass("good").removeClass("wrong");
                }

                if (bigLetter == false) {
                    $bigLetter.addClass("wrong").removeClass("good");
                } else {
                    $bigLetter.addClass("good").removeClass("wrong");
                }

                if (num == false) {
                    $num.addClass("wrong").removeClass("good");
                } else {
                    $num.addClass("good").removeClass("wrong");
                }

                if (specialChar == false) {
                    $specialChar.addClass("wrong").removeClass("good");
                } else {
                    $specialChar.addClass("good").removeClass("wrong");
                }
            }


            if (e.type == "blur") {
                $passwordAlert.hide();
            }
        });
    });

</script>


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


    $(function() {
        $("#user").keypress(function(event) {
            var ew = event.which;
            if (ew == 32)
                return true;
            if (48 <= ew && ew <= 57)
                return true;
            if (65 <= ew && ew <= 90)
                return true;
            if (97 <= ew && ew <= 122)
                return true;
            return false;
        });
    });



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

</script>


@endsection
{{-- ==================================================== --}}
