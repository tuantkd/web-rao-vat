@extends('layout.layout_home')
@section('title', 'Email đặt lại mật khẩu')
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
                    <h4>Email đặt lại mật khẩu</h4>
                </div>
                <div class="card-body">

                    <div class="container padding-bottom-3x mb-2 mt-1">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="forgot">
                                    <h4>Thay đổi mật khẩu của bạn trong ba bước dễ dàng. Điều này sẽ giúp bạn bảo mật mật khẩu của bạn!</h4>
                                    <ol class="list-unstyled">
                                        <li><span class="text-primary text-medium">1. </span>Nhập địa chỉ email của bạn dưới đây.</li>
                                        <li><span class="text-primary text-medium">2. </span>Hệ thống của chúng tôi sẽ gửi cho bạn một liên kết tạm thời</li>
                                        <li><span class="text-primary text-medium">3. </span>Sử dụng liên kết để đặt lại mật khẩu của bạn</li>
                                    </ol>
                                </div>

                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('message') }}
                                </div>
                                @endif

                                @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('error') }}
                                </div>
                                @endif

                                <form action="{{ url('postforgot') }}" method="POST" class="needs-validation card mt-4" novalidate>
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="email-for-pass">Nhập địa chỉ email của bạn</label>
                                            <input class="form-control" type="text" id="email-for-pass" required placeholder="Nhập địa chỉ email" name="txt_email">
                                            <div class="invalid-feedback">Bạn chưa nhập địa chỉ email.</div>
                                            <small class="form-text text-muted">
                                                Nhập địa chỉ email bạn đã sử dụng trong quá trình đăng ký trên Raoban.com. Sau đó, chúng tôi sẽ gửi email một liên kết đến địa chỉ này.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-success" type="submit">
                                            <i class="far fa-paper-plane"></i> Gửi lấy mật khẩu
                                        </button>
                                        <a class="btn btn-danger" href="" style="color:white;">
                                            <i class="fas fa-long-arrow-alt-left"></i> Quay lại
                                        </a>
                                    </div>
                                </form>
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

</script>


@endsection
{{-- ==================================================== --}}
