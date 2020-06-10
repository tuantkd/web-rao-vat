@extends('layout.master_admin')
@section('title', 'Manage new')
@section('link_css')
    <link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- ========================================================= --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tin tức</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
            <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_new">
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

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ml-auto searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tên để tìm kiếm"
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
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 mb-1">
            <a name="" id="" class="btn btn-primary" href="#" role="button" title="tìm kiếm">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>

    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
            <style>
                .media-body .btn_edit{
                    margin-left: 810px;
                }

                @media screen and (max-width: 768px) {
                    .media-body .btn_edit{
                        margin-left: 160px;
                    }

                }
            </style>

            <div class="media border p-2 mt-3">
                <a href="#"><img src="{{ url('public/images/car-2.jpg') }}" alt="John Doe" class="img-fluid mr-3" style="width:170px;"></a>

                <div class="media-body">
                    <a href="" id="title"><h4>Tiêu đề bài đăng </h4></a>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> |
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>    

                    <a name="" id="" class="btn btn-primary btn_function btn_edit" href="#" role="button" title="Chỉnh sửa">
                        <i class="fa fa-info" aria-hidden="true"></i>
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
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>    

                    <a name="" id="" class="btn btn-primary btn_function btn_edit" href="#" role="button" title="Chỉnh sửa">
                        <i class="fa fa-info" aria-hidden="true"></i>
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
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>    

                    <a name="" id="" class="btn btn-primary btn_function btn_edit" href="#" role="button" title="Chỉnh sửa">
                        <i class="fa fa-info" aria-hidden="true"></i>
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
                    <span class="badge badge-primary">Đã duyệt</span>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>    

                    <a name="" id="" class="btn btn-primary btn_function btn_edit" href="#" role="button" title="Chỉnh sửa">
                        <i class="fa fa-info" aria-hidden="true"></i>
                    </a>
                    <a name="" id="" class="btn btn-danger btn_function btn_delete" href="#" role="button" title="xóa">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

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