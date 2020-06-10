@extends('layout.master_admin')
@section('title','Quản trị viên')
<!-- ============================= -->


<!-- ============================= -->
@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mt-0">
        <div class="card shadow h-100">
            <div class="card-header">
                <h4 class="h4 mb-0 text-gray-800">Quản trị viên</h4>
            </div>
            <div class="card-body p-2">
                <!-- row1 -->
                <div class="row">
                    <!-- col-md-8 -->
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1 mt-1">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/add-admin-new') }}" role="button">
                            <i class="fa fa-plus" aria-hidden="true"></i>&ensp;Thêm mới
                        </a>


                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm mới</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('add_admin') }}" method="POST"
                                            novalidate>
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                    <label for="">Họ và tên</label>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                    <input type="text" class="form-control" name="fullname"
                                                        id="fullname" placeholder="Nhập họ và tên" required
                                                        style="width:100%;">
                                                    <small class="invalid-feedback">Vui lòng nhập họ và tên</small>
                                                </div>


                                            </div>

                                            <div class="form-group">
                                                <label for="">Tên tài khoản</label>
                                                <input type="text" class="form-control" name="username" id="username"
                                                    aria-describedby="helpId" placeholder="Enter username" required>
                                                <small class="invalid-feedback">Vui lòng nhập tên tài khoản</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    aria-describedby="emailHelpId" placeholder="Enter email" required>
                                                <small class="invalid-feedback">Vui lòng nhập địa chỉ email</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Mật khẩu</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter password" required>
                                                <small class="invalid-feedback">Vui lòng nhập mật khẩu</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="sex">Giới tính</label>
                                                <select class="custom-select" name="sex" id="sex" required>
                                                    <option value="Nam" selected>Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                    <option value="Khác">Khác</option>
                                                </select>
                                                <small class="invalid-feedback">Vui lòng chọn giới tính</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Ngày sinh</label>
                                                <input id="datepicker" class="form-control" name="birthday"
                                                    id="birthday" aria-describedby="helpId" placeholder="" required />
                                                <small class="invalid-feedback">Vui lòng nhập ngày sinh</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Số điện thoại</label>
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                    aria-describedby="helpId" placeholder="Enter phone number"
                                                    onblur="Test_numberphone()" required>
                                                <small class="invalid-feedback">Vui lòng nhập số điện thoại</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Địa chỉ</label>
                                                <textarea class="form-control" name="address" id="address" rows="3"
                                                    required></textarea>
                                                <small class="invalid-feedback">Vui lòng nhập địa chỉ</small>
                                            </div>

                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary">THÊM</button>
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- col-md-8 -->

                    <!-- col-md-4 -->
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1 mt-1">
                        <div class="input-group">
                            <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                                class="form-control selectpicker">
                                @foreach ($admin as $value)
                                <option value="{{ $value->username }}">{{ $value->username }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- col-md-4 -->
                </div>
                <!-- row1 -->

                <hr>


                <!-- row2 -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                            <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                                <thead class="thead-dark|thead-light">
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ và tên</th>
                                        <th>Tên tài khoản</th>
                                        <th>Giới tính</th>
                                        <th>Ngày sinh</th>
                                        <th>Điện thoại</th>
                                        <th>Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($admin as $key => $value)
                                    <tr>
                                        <td scope="row">{{ ++$key }}</td>
                                        <td>{{ $value->fullname }}</td>
                                        <td>{{ $value->username}}</td>
                                        <td>{{ $value->sex }}</td>
                                        <td>{{ $value->birthday }}</td>
                                        <td>{{ $value->phone}}</td>
                                        <td>{{ $value->address }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- row2 -->
                </div>
            </div>
            {{-- end card --}}
        </div>
    </div>




    @if (Session::has('add_admin'))
    <script type="text/javascript">
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thêm tài khoản admin',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
    @endif

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
        });
    </script>

    @endsection
    <!-- ============================= -->


    <!-- ============================= -->
    @section('link_js')
    <script type="text/javascript">
        CKEDITOR.replace('txt_describe_role');

        function Test_numberphone() {
            var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var mobile = $('#phone').val();
            if (mobile !== '') {
                if (vnf_regex.test(mobile) == false) {
                    confirm('Số điện thoại không đúng định dạng. Vui lòng nhập lại');
                    $('#phone').val('');
                }
            }
        }
    </script>
    @endsection
    <!-- ============================= -->