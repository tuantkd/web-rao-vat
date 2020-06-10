@extends('layout.master_admin')
@section('title','Manage post new')
@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h3 mb-0 text-gray-800">Quản lý bài đăng</h4>
    </div>

    <div class="card-body p-2">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-1">
                <div class="form-group">
                    <select class="custom-select" name="" id="">
                        <option selected>Chọn trạng thái</option>
                        <option value="Đã duyệt">Đã duyệt</option>
                        <option value="Chưa duyệt">Chưa duyệt</option>
                        <option value="Hết hạn">Hết hạn</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
                <div class="form-group inputSearch">
                    <select data-live-search="true" title="Nhập loại để tìm kiếm" class="form-control selectpicker">
                        @foreach ($type_post as $value)
                        <option value="{{ $value->post_type_name }}">{{ $value->post_type_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                <input id="datepicker" />
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-3">
                <div class="input-group">
                    <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker">
                        @foreach ($province as $value)
                        <option value="{{ $value->province_name }}">{{ $value->province_name }}</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">

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

        </div>

    </div>

</div>

@endsection
