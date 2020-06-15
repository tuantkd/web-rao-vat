@extends('layout.master_admin')
@section('title','Admin - Hồ sơ cá nhân')
{{-- =============================================================================== --}}

@section('content')

<!-- ======================================================= -->
<style type="text/css" media="screen">
    .card-primary {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .card-primary .card-header {
        padding: 0px;
        padding-top: 15px;
        padding-left: 15px;
    }

    .nav-pills .nav-item .nav-link {
        margin-right: 10px;
    }

    .nav-pills .nav-item .nav-link:hover {
        background-color: #4091bf;
    }

    /* =================================== */
    @media screen and (max-width: 600px) {
        .nav-pills .nav-item .nav-link {
            font-size: 11px;
        }
    }

    /* =================================== */
</style>
<!-- ======================================================= -->


<!-- ======================================================= -->
<section class="content">
    <div class="container" style="padding:1px;">
        <div class="row">

            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-outline m-0">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ url('public/dist/img/user4-128x128.jpg') }}" style="border-radius:50%;">
                        </div>

                        <h3 class="profile-username text-center">Tuan TKD</h3>

                        <p class="text-muted text-center">Quản trị</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b><i class="far fa-newspaper"></i> Số bài đăng</b> <a class="float-right">132</a>
                            </li>
                            <li class="list-group-item">
                                <b><i class="far fa-money-bill-alt"></i> Số tiền</b> <a class="float-right">20.000 đ</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block">
                            <i class="fas fa-money-check-alt"></i> Nạp tiền
                        </a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-info"></i> Thông tin cá nhân</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-phone"></i> 0326568256</strong>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Hậu Giang - Vị Thủy</strong>
                        <hr>

                        <strong><i class="fas fa-mars"></i> Nam</strong>
                        <hr>

                        <strong><i class="far fa-calendar-alt"></i> 25/01/1998</strong>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- col-md-9 -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('admin/profile-user') }}"
                                    onclick="myFunction()">
                                    <i class="fas fa-user-edit"></i> Chỉnh sửa thông tin
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('admin/change-password') }}"
                                    onclick="myFunction()">
                                    <i class="fas fa-key"></i> Thay đổi mật khẩu
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="tab-content">
                            <!-- tab-content -->
                            @yield('tab-content')
                            <!-- tab-content -->
                        </div>
                        <!-- /.tab-content -->

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- ======================================================= -->

@endsection