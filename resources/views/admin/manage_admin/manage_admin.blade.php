@extends('layout.master_admin')
@section('title','Manage admin')
{{-- =============================================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý tài khoản quản trị viên</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            @if ($errors->has('username'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            @if ($errors->has('email'))
                <div class="alert alert-info" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            @if ($errors->has('phone'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{ $errors->first('phone') }}</strong> 
                </div>
            @endif
            
            <script>
              $(".alert").alert();
            </script>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
            <a name="" id="" class="btn btn-danger" href="#" role="button">
                 Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_admin">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm admin
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="modal_add_admin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title">Thêm người dùng admin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form class="needs-validation" action="{{ route('add_admin') }}" method="POST" novalidate>
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Họ và tên</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="helpId" placeholder="Enter fullname" required>
                                    <small class="invalid-feedback">Vui lòng nhập họ và tên</small>
                                </div>

                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Enter username" required>
                                    <small class="invalid-feedback">Vui lòng nhập tên tài khoản</small>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"     placeholder="Enter email" required>
                                    <small class="invalid-feedback">Vui lòng nhập địa chỉ email</small>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
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
                                    <input id="datepicker" class="form-control" name="birthday" id="birthday" aria-describedby="helpId" placeholder="" required/>
                                    <small class="invalid-feedback">Vui lòng nhập ngày sinh</small>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="number" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Enter phone number" onblur="Test_numberphone()" required>
                                    <small class="invalid-feedback">Vui lòng nhập số điện thoại</small>
                                </div>

                                <div class="form-group" style="width: 100%;">
                                    <label for="address">Địa chỉ</label>
                                    <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                                    <small class="invalid-feedback">Vui lòng nhập địa chỉ</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">THÊM ADMIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <script>
                $('#exampleModal').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM
                });
            </script>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ml-auto searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tên để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($admin as $value)
                        <option value="{{ $value->username }}">{{ $value->username }}</option>
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
                        <th>Họ và tên</th>
                        <th>Tên tài khoản</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($admin as $key => $value)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id=""></td>
                            <td scope="row">{{ ++$key }}</td>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->username}}</td>
                            <td>{{ $value->sex }}</td>
                            <td>{{ $value->birthday }}</td>
                            <td>{{ $value->phone}}</td>
                            <td>{{ $value->address }}</td>
                            <td>
                                <a name="" id="" class="btn btn-danger" href="{{ route('delete_admin', $value->id) }}" role="button" title="Xóa">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
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
@endsection

@section('link_js')
    <script type="text/javascript">
        CKEDITOR.replace( 'txt_describe_role' );

        function Test_numberphone() {
            var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var mobile = $('#phone').val();
            if(mobile !==''){
                if (vnf_regex.test(mobile) == false) 
                {
                    confirm('Số điện thoại không đúng định dạng. Vui lòng nhập lại');
                    $('#phone').val('');
                }
            }
        }
    </script>
@endsection