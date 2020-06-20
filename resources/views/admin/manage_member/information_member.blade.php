@extends('layout.master_admin')
@section('title','Admin - Hồ sơ cá nhân')

@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
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

        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/manage-member') }}">Quản lý thành viên</a>
            </li>
            <li class="breadcrumb-item active">Xem thông tin</li>
        </ul>
        <!-- breadcrumb -->


        <div class="row">

            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-outline m-0">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ url('public/dist/img/user4-128x128.jpg') }}" style="border-radius:50%;">
                        </div>

                        <h3 class="profile-username text-center">Tuan TKD</h3>

                        <p class="text-muted text-center">Thành viên</p>

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
                        <h4 class="h4 text-secondary pt-1">Danh sách bài đăng</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="tab-content">
                            <!-- tab-content -->
                            <div class="tab-pane active" id="settings">

                                <div class="media border p-2">
                                    <img src="{{ url('public/images/car-2.jpg') }}" class="img-fluid mr-3 image-post-new">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                                <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                                                <p>
                                                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                                                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                                                    <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                                                </p>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                                <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip" title="Chưa duyệt">
                                                    <i class="far fa-check-square"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm" href="#" role="button" title="xóa">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media border p-2">
                                    <img src="{{ url('public/images/car-2.jpg') }}" class="img-fluid mr-3 image-post-new">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                                <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                                                <p>
                                                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                                                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                                                    <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                                                </p>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                                <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip" title="Chưa duyệt">
                                                    <i class="far fa-check-square"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm" href="#" role="button" title="xóa">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media border p-2">
                                    <img src="{{ url('public/images/car-2.jpg') }}" class="img-fluid mr-3 image-post-new">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                                <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                                                <p>
                                                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                                                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                                                    <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                                                </p>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                                <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip" title="Chưa duyệt">
                                                    <i class="far fa-check-square"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm" href="#" role="button" title="xóa">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media border p-2">
                                    <img src="{{ url('public/images/car-2.jpg') }}" class="img-fluid mr-3 image-post-new">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                                <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                                                <p>
                                                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                                                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                                                    <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                                                </p>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                                <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip" title="Chưa duyệt">
                                                    <i class="far fa-check-square"></i>
                                                </a>
                                                <a class="btn btn-outline-danger btn-sm" href="#" role="button" title="xóa">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
