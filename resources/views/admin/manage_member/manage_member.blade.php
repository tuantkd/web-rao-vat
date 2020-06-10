@extends('layout.master_admin')
@section('title','Manage member')
{{-- =============================================================================== --}}

@section('content')
    <!-- Page Heading -->

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h4 mb-0 text-gray-800">Quản lý tài khoản thành viên</h4>
        </div>

        <div class="card-body p-2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mr-auto mb-1">
                    <a name="" id="" class="btn btn-danger" href="#" role="button">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                    </a>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ml-auto searchAdmin mb-1">
                    <div class="form-group inputSearch">
                        <select data-live-search="true" title="Nhập sđt để tìm kiếm"
                            class="form-control selectpicker">
                            @foreach ($member as $value)
                                <option value="{{ $value->phone }}">{{ $value->phone }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1 mt-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker">
                            <option value="">dfhjg</option>
                            <option value="">dfhjg</option>
                            <option value="">dfhjg</option>
                            <option value="">dfhjg</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                        <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                            <thead class="thead-dark|thead-light">
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection