@extends('layout.layout_home')
@section('title', 'Xác nhận mật khẩu')
{{-- ==================================================== --}}


{{-- ==================================================== --}}
@section('content')
<br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card" style="margin-bottom:5px;">
                <div class="card-header header-title">
                    <h4>Xác nhận mã OTP</h4>
                </div>
                <div class="card-body">

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('message') }}
                    </div>
                    <hr>
                    @endif

                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('error') }}
                    </div>
                    <hr>
                    @endif

                    <form action="{{ url('post-verifyToken') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <label for=""><b>Mã xác nhận của bạn</b></label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-1">
                                <input type="number" name="txt_otp" class="form-control" placeholder="Nhập xác nhận mã OTP" required>
                                <div class="invalid-feedback">Chưa nhập mã xác nhận OTP.</div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </form>
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


<br><br><br><br>
<br>

@endsection
{{-- ==================================================== --}}
