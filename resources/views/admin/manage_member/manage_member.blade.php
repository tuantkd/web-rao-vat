@extends('layout.master_admin')
@section('title','Manage member')
{{-- =============================================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tài khoản thành viên</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
            <a name="" id="" class="btn btn-danger" href="#" role="button">
                 Delete all
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
                        <th>Họ và tên</th>
                        <th>Tên tài khoản</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tài khoản</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td scope="row">1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10.000.000 VNĐ</td>
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
                        <td scope="row">1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10.000.000 VNĐ</td>
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
                        <td scope="row">1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10.000.000 VNĐ</td>
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
                        <td scope="row">1</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nguyễn Văn A</td>
                        <td>Nam</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10/10/1998</td>
                        <td>10.000.000 VNĐ</td>
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