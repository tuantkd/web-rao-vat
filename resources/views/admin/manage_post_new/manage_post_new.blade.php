@extends('layout.master_admin')
@section('title','Manage post new')
@section('link_css')
    <link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý bài đăng</h1>
    </div>

    <hr>

    <!-- Content Row -->
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
                <select data-live-search="true" title="Nhập loại để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($type_post as $value)
                        <option value="{{ $value->post_type_name }}">{{ $value->post_type_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tỉnh để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($province as $value)
                        <option value="{{ $value->province_name }}">{{ $value->province_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-1">
            <input id="datepicker" />
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 mb-1">
            <a name="" id="" class="btn btn-primary" href="#" role="button" title="tìm kiếm">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">

            <div class="media border p-2 mt-3">
                <a href="#"><img src="{{ url('public/images/car-2.jpg') }}" alt="John Doe" class="img-fluid mr-3" style="width:170px;"></a>
                <div class="media-body">
                    <a href="" id="title"><h4>Tiêu đề bài đăng </h4></a>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> | 
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>    
                    <small><img src="{{ url('public/images/chan-dung-1.jpg') }}" class="img-thumbnail rounded-circle" alt=""> Nguyễn Văn A </small> | 
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> TP.Hồ Chí Minh</small>

                    <a name="" id="" class="btn btn-outline-info btn_function btn_edit" href="#" role="button" title="Phê duyệt">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </a>

                    <a name="" id="" class="btn btn-danger btn_function btn_delete" href="#" role="button" title="xóa">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="media border p-2 mt-3">
                <a href="#"><img src="{{ url('public/images/car-2.jpg') }}" alt="John Doe" class="img-fluid mr-3" style="width:170px;"></a>
                <div class="media-body">
                    <a href="" id="title"><h4>Tiêu đề bài đăng </h4></a>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> | 
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>        
                    <small><img src="{{ url('public/images/chan-dung-1.jpg') }}" class="img-thumbnail rounded-circle" alt=""> Nguyễn Văn A </small> | 
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> TP.Hồ Chí Minh</small>

                    <a name="" id="" class="btn btn-outline-info btn_function btn_edit" href="#" role="button" title="Phê duyệt">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </a>

                    <a name="" id="" class="btn btn-danger btn_function btn_delete" href="#" role="button" title="xóa">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="media border p-2 mt-3">
                <a href="#"><img src="{{ url('public/images/car-2.jpg') }}" alt="John Doe" class="img-fluid mr-3" style="width:170px;"></a>
                <div class="media-body">
                    <a href="" id="title"><h4>Tiêu đề bài đăng </h4></a>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> | 
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>    
                    <small><img src="{{ url('public/images/chan-dung-1.jpg') }}" class="img-thumbnail rounded-circle" alt=""> Nguyễn Văn A </small> | 
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> TP.Hồ Chí Minh</small>

                    <a name="" id="" class="btn btn-outline-info btn_function btn_edit" href="#" role="button" title="Phê duyệt">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </a>

                    <a name="" id="" class="btn btn-danger btn_function btn_delete" href="#" role="button" title="xóa">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="media border p-2 mt-3">
                <a href="#"><img src="{{ url('public/images/car-2.jpg') }}" alt="John Doe" class="img-fluid mr-3" style="width:170px;"></a>
                <div class="media-body">
                    <a href="" id="title"><h4>Tiêu đề bài đăng </h4></a>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                    <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> | 
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>       
                    <small><img src="{{ url('public/images/chan-dung-1.jpg') }}" class="img-thumbnail rounded-circle" alt=""> Nguyễn Văn A </small> | 
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> TP.Hồ Chí Minh</small>

                    <a name="" id="" class="btn btn-outline-info btn_function btn_edit" href="#" role="button" title="Phê duyệt">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </a>

                    <a name="" id="" class="btn btn-danger btn_function btn_delete" href="#" role="button" title="xóa">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection