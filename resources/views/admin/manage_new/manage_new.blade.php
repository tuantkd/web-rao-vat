@extends('layout.master_admin')
@section('title', 'Manage new')
@section('link_css')
    <link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- ========================================================= --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý tin tức</h4>
        </div>

        <div class="card-body p-2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
                    <a name="" id="" class="btn btn-primary" href="{{ route('get_add_new') }}" role="button">
                        <i class="fa fa-plus" aria-hidden="true"></i> Thêm tin tức
                    </a>
        
                    <!-- Modal -->
                    <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">thêm tin tức</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="needs-validation" action="{{ route('add_new') }}" enctype="multipart/form-data" method="POST" novalidate>
                                    @csrf
                                    
                                    <div class="modal-body">
        
                                        <div class="form-group">
                                            <label for="">Tiêu đề</label>
                                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Enter title of new" required>
                                            <small class="invalid-feedback">Vui lòng nhập tiêu đề tin tức</small>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="content">Nội dung</label>
                                            <textarea class="form-control" name="content" id="content" rows="5"
                                            aria-describedby="helpId" placeholder="Enter content" required></textarea>
                                            <small class="invalid-feedback">Vui lòng nhập nội dung</small>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="">Hình ảnh</label>
                                            <input type="file" class="form-control-file" name="file" id="file" placeholder="" aria-describedby="fileHelpId" required>
                                            <small id="fileHelpId" class="invalid-feedback">Vui lòng nhập hình ảnh</small>
                                        </div>
        
                                    </div>
        
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-primary" id="btn_refresh" title="Quay lại">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">THÊM TIN TỨC</button>
                                    </div>
        
                                </form>
                            </div>
                        </div>
                    </div>
        
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-3 mt-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                            class="form-control selectpicker">
                            <option>Mango</option>
                            <option>Orange</option>
                            <option>Lychee</option>
                            <option>Pineapple</option>
                            <option>Apple</option>
                            <option>Banana</option>
                            <option>Grapes</option>
                            <option>Water Melon</option>
                            <option>Mango</option>
                            <option>Orange</option>
                            <option>Lychee</option>
                            <option>Pineapple</option>
                            <option>Apple</option>
                            <option>Banana</option>
                            <option>Grapes</option>
                            <option>Water Melon</option>
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
                                    <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip"
                                        title="Chưa duyệt">
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
                                    <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip"
                                        title="Chưa duyệt">
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
                                    <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip"
                                        title="Chưa duyệt">
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
                                    <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip"
                                        title="Chưa duyệt">
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

    @if (Session::has('add_new'))    
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thêm tin tức thành công',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif
@endsection

@section('link_js')
    <script>
        $('#btn_refresh').click(function(){
            $('#title, #content, #file').val('');
        });
    </script>
@endsection