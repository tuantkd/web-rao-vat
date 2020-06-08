@extends('layout.master_admin')
@section('title', 'manage privince')
{{-- ========================================================================= --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tỉnh thành</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-1">

            <a name="" id="" class="btn btn-danger" href="#" role="button">
                Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_province">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm tỉnh 
            </a>

            <!-- Modal -->
            <div class="modal fade" id="modal_add_province" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">thêm tỉnh thành</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="needs-validation" action="{{ route('add_province') }}" method="POST" novalidate>
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Tên tỉnh thành</label>
                                    <input type="text" class="form-control" name="nameProvince" id="nameProvince" aria-describedby="helpId" placeholder="Enter type name province" required>
                                    <small class="invalid-feedback">Vui lòng nhập tỉnh thành</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">THÊM TỈNH THÀNH</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập Quận/Huyện để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($allDistrict as $value)
                        <option value="{{ $value->district_name }}">{{ $value->district_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tỉnh để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($allProvince as $value)
                        <option value="{{ $value->province_name }}">{{ $value->province_name }}</option>
                    @endforeach
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
                        <th>Tên tỉnh</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($province as $key => $value)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id=""></td>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->province_name }}</td>
                            <td>
                                <a class="btn btn-primary" role="button" href="" title="Chỉnh sửa" data-toggle="modal"      data-target="#modal_edit_province" data-province-name="{{ $value->province_name }}" 
                                    data-provinceId={{ $value->id }}> 
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="modal_edit_province" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Chỉnh sửa tỉnh thành</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="province_id" id="province_id" value="">
                                                </div>
                    
                                                <div class="form-group">
                                                    <label for="province_name">Tên tỉnh thành</label>
                                                    <input type="text" class="form-control" name="province_name" id="province_name" value="" required>
                                                    <small id="helpId" class="invalid-feedback">Vui lòng nhập tên tỉnh thành</small>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">EDIT</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <a class="btn btn-danger" href="{{ route('delete_province', $value->id) }}" role="button" title="Xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

        <div class="col-12">
            {{ $province->links() }}
        </div>

    </div>
    <!-- /.container-fluid -->

    @if (Session::has('add_province'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thêm tỉnh thành thành công',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    @if (Session::has('delete_province'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã xóa tỉnh thành thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection

@section('link_js')
    <script>
        $('#edit_province').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var provinceName = button.data('provinceName') 
            var provinceId = button.data('provinceId') 
            var modal = $(this)

            modal.find('.modal-body #province_id').val(provinceId);
            modal.find('.modal-body #province_name').val(provinceName);
        });

        // $('#edit_province').on('show.bs.modal', function(e) {
        //     var provinceName = $(e.relatedTarget).data('province-name');
        //     $(e.currentTarget).find('input[name="province_name"]').val(provinceName);
        // });
    </script>
@endsection
