@extends('layout.master_admin')
@section('title','Thêm quản trị viên')
<!-- ============================= -->


<!-- ============================= -->
@section('content')

<style type="text/css">
    .breadcrumb .breadcrumb-item a {
        text-decoration: none;
    }

    .breadcrumb {
        background-color: white;
    }

</style>

<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/manage-admin') }}">Quản trị viên</a>
    </li>
    <li class="breadcrumb-item active">Thêm mới</li>
</ul>

<div class="row">
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-0"></div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-0">
        <div class="card shadow h-100">
            <div class="card-header">
                <h4 class="h4 mb-0 text-gray-800">Thêm mới</h4>
            </div>
            <div class="card-body p-3">

                <form class="needs-validation" action="{{ route('add_admin') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Họ và tên</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập họ và tên" required>
                            <small class="invalid-feedback">Vui lòng nhập họ và tên</small>

                            @error('fullname')
                            <small style="color:red;font-style:12px;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Tên tài khoản</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tên tài khoản" required>
                            <small class="invalid-feedback">Vui lòng nhập tên tài khoản</small>

                            @error('username')
                            <small style="color:red;font-style:12px;">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Mật khẩu</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required>
                            <small class="invalid-feedback">Vui lòng nhập mật khẩu</small>

                            @error('password')
                            <small style="color:red;font-style:12px;">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Email</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email" required>
                            <small class="invalid-feedback">Vui lòng nhập địa chỉ email</small>

                            @error('email')
                            <small style="color:red;font-style:12px;">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Giới tính</label>
                        </div>

                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="Nam" name="sex" required> Nam
                                </label>
                            </div>

                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="Nữ" name="sex" required> Nữ
                                    <small class="invalid-feedback">Vui lòng chọn giới tính</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Ngày sinh</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input id="datepicker" class="form-control" name="birthday" id="birthday" placeholder="Chọn ngày sinh" required />
                            <small class="invalid-feedback">Vui lòng nhập ngày sinh</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Điện thoại</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" onblur="Test_numberphone()" required>
                            <small class="invalid-feedback">Vui lòng nhập số điện thoại</small>

                            @error('phone')
                            <small style="color:red;font-style:12px;">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                            <label for="">Địa chỉ</label>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                            <textarea class="form-control" name="address" id="address" rows="2" required placeholder="Nhập địa chỉ cư trú"></textarea>
                            <small class="invalid-feedback">Vui lòng nhập địa chỉ</small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">THÊM</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-0"></div>
</div>


@endsection
<!-- ============================= -->


<!-- ============================= -->
@section('link_js')
<script type="text/javascript">
    CKEDITOR.replace('txt_describe_role');

    function Test_numberphone() {
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#phone').val();
        if (mobile !== '') {
            if (vnf_regex.test(mobile) == false) {
                confirm('Số điện thoại không đúng định dạng. Vui lòng nhập lại');
                $('#phone').val('');
            }
        }
    }

</script>
@endsection
<!-- ============================= -->
