@extends('layout.master_admin')
@section('title', 'Manage category')
{{-- ======================================================= --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý doanh mục</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mb-1">

            <a name="" id="" class="btn btn-danger" href="#" role="button">
                 Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_category">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm doanh mục 
            </a>

            <!-- Modal -->
            <div class="modal fade" id="modal_add_category" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">thêm danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="needs-validation" action="" method="POST" novalidate>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Tên danh mục</label>
                                    <input type="text" class="form-control" name="nameCategory" id="nameCategory" aria-describedby="helpId" placeholder="Enter type name category" required>
                                    <small class="invalid-feedback">Vui lòng nhập danh mục</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">THÊM DANH MỤC</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                        <th>Tên doanh mục</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id=""></td>
                        <td>1</td>
                        <td>Tên danh mục 1</td>
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
    
