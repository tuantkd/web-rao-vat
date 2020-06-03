@extends('layout.master_admin')
@section('title', 'Manage category first')
{{-- ======================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý doanh mục cấp 1</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Báo cáo</a>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-1">

            <a name="" id="" class="btn btn-danger" href="#" role="button">
                Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm doanh mục
            </a>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Lọc theo danh mục cha"
                    class="form-control selectpicker">
                    <option>Orange</option>
                    <option>Lychee</option>
                    <option>Pineapple</option>
                    <option>Apple</option>
                    <option>Banana</option>
                </select>
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
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
                        <th>Tên doanh mục cấp 1</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>1</td>
                        <td>Tên doanh mục 1</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Chỉnh sửa">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>2</td>
                        <td>Tên doanh mục 2</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Chỉnh sửa">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>3</td>
                        <td>Tên doanh mục 3</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Chỉnh sửa">
                                <i class="fa fa-info" aria-hidden="true"></i>
                            </a>

                            <a name="" id="" class="btn btn-danger" href="#" role="button" title="Xóa">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>4</td>
                        <td>Tên doanh mục 4</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"
                                title="Chỉnh sửa">
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