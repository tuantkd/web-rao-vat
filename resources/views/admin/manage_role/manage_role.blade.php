@extends('layout.master_admin')
@section('title','Manage role')
{{-- =============================================================================== --}}

@section('content')

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h3 mb-0 text-gray-800">Quản lý quyền người dùng</h4>
    </div>

    <div class="card-body p-2">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
                <a name="" id="" class="btn btn-danger" href="#" role="button">
                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                </a>
        
                <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal"
                    data-target="#modal_add_role">
                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm quyền
                </a>
        
                <!-- Modal -->
                <div class="modal fade" id="modal_add_role" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">THÊM QUYỀN HỆ THỐNG</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="needs-validation" action="{{ route('add_role') }}" method="POST" novalidate>
                                {{ csrf_field() }}
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <label for="">Tên quyền</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                                            <input type="text" class="form-control" name="roleName" id="roleName"
                                            aria-describedby="helpId" placeholder="Enter role name" required>
                                            <small class="invalid-feedback">Vui lòng nhập tên quyền</small>
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <label for="">Mô tả</label>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                                            <textarea class="form-control" name="description" id="description" rows="5"
                                            aria-describedby="helpId" placeholder="Enter description" required></textarea>
                                            <small class="invalid-feedback">Vui lòng nhập mô tả</small>
                                        </div>
                                    </div>
        
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" id="btn_refresh">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">THÊM QUYỀN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1 mt-1">
                <div class="input-group">
                    <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                        class="form-control selectpicker">
                        @foreach ($role as $value)
                            <option value="{{ $value->name_level }}">{{ $value->name_level }}</option>
                        @endforeach
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                        <thead class="thead-dark|thead-light">
                            <tr>
                                <th><input type="checkbox" id="master"></th>
                                <th style="width: 10%;">STT</th>
                                <th style="width: 20%;">Quyền</th>
                                <th style="width: 60%;">Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
            
                            @foreach ($role as $key => $value)
                            <tr>
                                <td><input type="checkbox" class="sub_chk" data-id=""></td>
                                <td scope="row">{{ ++$key }}</td>
                                <td>{{ $value->name_level }}</td>
                                <td>{{ $value->discribe }}</td>
                            </tr>
                            @endforeach
            
                            <!-- Modal -->
                            
            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    
</div>

<hr>

<!-- Content Row -->
{{-- <style>
    table tr {
        background-color: white;
        padding: auto;
        padding-bottom: 10px;
    }

    table th,
    table td {
        padding: 10px;
        border: 1px solid #ddd;
        font-size: 13px;
    }

    table th {
        font-size: 10px;
        text-transform: uppercase;
        color: black;
        font-weight: bold;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
            width: 100%;
        }

        table thead {
            clip: rect(0 0 0 0);
            height: 1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
        }

        table tr {
            display: block;
            margin-bottom: .100em;
        }

        table td {
            display: block;
            padding: 5px;
            font-size: 10px;
            text-align: right;
        }

        table td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;

        }

        table td:last-child {
            border: 1px solid #ddd;
        }

        .el-overlay-1 {
            width: 100%;
            height: auto;
        }

    }
</style> --}}


    @if(Session::has('add_role'))
    <script type="text/javascript">
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thêm quyền truy cập hệ thống',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    @if(Session::has('delete_role'))
    <script type="text/javascript">
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã xóa quyền truy cập hệ thống',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    @endsection

    @section('link_js')
    <script>
        $('#btn_refresh').click(function () {
            $('#roleName, #description').val('');
        });

        $('#modal_edit_role').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var roleName = button.data('roleName')
            var modal = $(this)
            modal.find('.modal-body #roleNameEdit').val(roleName);
        })
    </script>
    @endsection