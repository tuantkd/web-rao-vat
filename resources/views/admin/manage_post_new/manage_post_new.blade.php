@extends('layout.master_admin')
@section('title','Manage post new')
{{-- =============================================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý bài đăng</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Báo cáo</a>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <a name="" id="" class="btn btn-danger" href="#" role="button">
                <i class="fa fa-trash" aria-hidden="true"></i> Delete all
            </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập loại để tìm kiếm"
                    class="form-control selectpicker">
                    <option>Mango</option>
                    <option>Orange</option>
                    <option>Lychee</option>
                    <option>Pineapple</option>
                    <option>Apple</option>
                    <option>Banana</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tỉnh để tìm kiếm"
                    class="form-control selectpicker">
                    <option>Mango</option>
                    <option>Orange</option>
                    <option>Lychee</option>
                    <option>Pineapple</option>
                    <option>Apple</option>
                    <option>Banana</option>
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <input id="datepicker" />
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
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
                        <th>Tiêu đề</th>
                        <th>Giá</th>
                        <th>Tiền tệ</th>
                        <th>Hình ảnh</th>
                        <th>Thời hạn</th>
                        <th>Tình trạng</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>1</td>
                        <td>Bài đăng 1</td>
                        <td>1.000.000</td>
                        <td>VNĐ</td>
                        <td>
                            <img src="./img/636767658598578350_1.png"class="img-fluid rounded-circle"
                                alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>3 ngày</td>
                        <td>
                            <button type="button" class="btn btn-primary">Chưa duyệt</button>
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
                        <td>1</td>
                        <td>Bài đăng 1</td>
                        <td>1.000.000</td>
                        <td>VNĐ</td>
                        <td>
                            <img src="./img/636767658598578350_1.png"class="img-fluid rounded-circle" alt="" 
                                style="width: 50px; height: 50px;">
                        </td>
                        <td>3 ngày</td>
                        <td>
                            <button type="button" class="btn btn-primary">Chưa duyệt</button>
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
                        <td>1</td>
                        <td>Bài đăng 1</td>
                        <td>1.000.000</td>
                        <td>VNĐ</td>
                        <td>
                            <img src="./img/636767658598578350_1.png"class="img-fluid rounded-circle" alt="" 
                                style="width: 50px; height: 50px;">
                        </td>
                        <td>3 ngày</td>
                        <td>
                            <button type="button" class="btn btn-primary">Chưa duyệt</button>
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
                        <td>1</td>
                        <td>Bài đăng 1</td>
                        <td>1.000.000</td>
                        <td>VNĐ</td>
                        <td>
                            <img src="./img/636767658598578350_1.png" class="img-fluid rounded-circle" alt="" style="width: 50px; height: 50px;">
                        </td>
                        <td>3 ngày</td>
                        <td>
                            <button type="button" class="btn btn-primary">Chưa duyệt</button>
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