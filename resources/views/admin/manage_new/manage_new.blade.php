@extends('layout.master_admin')
@section('title', 'Manage new')
{{-- ========================================================= --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tin tức</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Báo cáo</a>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
            <a name="" id="" class="btn btn-danger" href="#" role="button">
                Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm tin tức
            </a>

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
            <table class="table table-striped table-inverse table-responsive-stack" id="tableOne">
                <thead class="thead-inverse">
                    <tr>
                        <th><input type="checkbox" id="master"></th>
                        <th>STT</th>
                        <th>tiêu đề</th>
                        <th>Ngày đăng</th>
                        <th>Hình ảnh</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td scope="row">1</td>
                        <td>Tin tức 1</td>
                        <td>10/10/2019</td>
                        <td>
                            <img src="{{ url('public/img/hp-15-da0051tu-core-i3-7020u-1.png') }}" class="img-thumbnail rounded-circle" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Xem chi tiết">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td scope="row">2</td>
                        <td>Tin tức 1</td>
                        <td>10/10/2019</td>
                        <td>
                            <img src="{{ url('public/img/hp-15-da0051tu-core-i3-7020u-1.png') }}" class="img-thumbnail rounded-circle" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Xem chi tiết">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td scope="row">3</td>
                        <td>Tin tức 1</td>
                        <td>10/10/2019</td>
                        <td>
                            <img src="{{ url('public/img/hp-15-da0051tu-core-i3-7020u-1.png') }}" class="img-thumbnail rounded-circle" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Xem chi tiết">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td scope="row">4</td>
                        <td>Tin tức 1</td>
                        <td>10/10/2019</td>
                        <td>
                            <img src="{{ url('public/img/hp-15-da0051tu-core-i3-7020u-1.png') }}" class="img-thumbnail rounded-circle" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Xem chi tiết">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection