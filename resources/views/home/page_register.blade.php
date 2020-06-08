@extends('layout.layout_home')
@section('title', 'Trang đăng ký')
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
                    <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
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
                        </div>

                        <div class="vl-register"></div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 line-social" id="line-social-mobile">
                            
                            <form action="/action_page.php" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="fullname">
                                        <i class="far fa-user-circle"></i> Tên liên hệ:
                                    </label>
                                    <input type="text" class="form-control" id="fullname" placeholder="Nhập tên liên hệ" name="txt_fullname" required>
                                    <div class="invalid-feedback">Chưa nhập tên liên hệ</div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        <i class="far fa-envelope"></i> Email:
                                    </label>
                                    <input type="text" class="form-control" id="email" placeholder="Nhập địa chỉ email" name="txt_email" required>
                                    <div class="invalid-feedback">Chưa nhập email</div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">
                                        <i class="fas fa-key"></i> Mật khẩu:
                                    </label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="txt_password" required>
                                    <div class="invalid-feedback">Chưa nhập mật khẩu</div>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">
                                        <i class="far fa-check-circle"></i> Xác nhận mật khẩu:
                                    </label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Nhập xác nhận mật khẩu" name="txt_password" required>
                                    <div class="invalid-feedback">Chưa nhập xác nhận mật khẩu</div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">
                                        <i class="fas fa-phone"></i> Số điện thoại:
                                    </label>
                                    <input type="password" class="form-control" id="phone" placeholder="Nhập xác nhận mật khẩu" name="txt_phone" required>
                                    <div class="invalid-feedback">Chưa nhập số điện thoại</div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-user-plus"></i> Đăng ký</button>
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
	        if($('#show_hide_password input').attr("type") == "text"){
	            $('#show_hide_password input').attr('type', 'password');
	            $('#show_hide_password i').addClass( "fa-eye-slash" );
	            $('#show_hide_password i').removeClass( "fa-eye" );
	        }else if($('#show_hide_password input').attr("type") == "password"){
	            $('#show_hide_password input').attr('type', 'text');
	            $('#show_hide_password i').removeClass( "fa-eye-slash" );
	            $('#show_hide_password i').addClass( "fa-eye" );
	        }
	    });
	});

</script>


@endsection
{{-- ==================================================== --}}
