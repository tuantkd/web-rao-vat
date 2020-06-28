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
                <form action="{{ route('search_admin') }}" method="get">
                    <div class="row">
                        <!-- col-md-8 -->
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1 mt-1">
                            <a class="btn btn-primary btn-sm" href="{{ url('admin/add-admin-new') }}" role="button">
                                <i class="fa fa-plus" aria-hidden="true"></i>&ensp;Thêm mới
                            </a>
                        </div>
                        <!-- col-md-8 -->

                        <!-- col-md-4 -->
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1 mt-1">
                            <div class="input-group">
                                <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker" name="username_search">
                                    @foreach ($allAdmin as $value)
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
                </form>
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
                                        <td scope="row" data-label="STT">{{ ++$key }}</td>

                                        @if($value->fullname != NULL)
                                        <td data-label="Họ tên">{{ $value->fullname }}</td>
                                        @else
                                        <td data-label="Điện thoại" style="color:red;">- - -</td>
                                        @endif

                                        @if($value->username != NULL)
                                        <td data-label="Tên tài khoản">{{ $value->username }}</td>
                                        @else
                                        <td data-label="Tên tài khoản" style="color:red;">- - -</td>
                                        @endif

                                        @if($value->sex != NULL)
                                        <td data-label="Giới tính">{{ $value->sex }}</td>
                                        @else
                                        <td data-label="Giới tính" style="color:red;">- - -</td>
                                        @endif

                                        @if($value->birthday != NULL)
                                        <td data-label="Ngày sinh">{{ date("d/m/Y", strtotime($value->birthday)) }}</td>
                                        @else
                                        <td data-label="Ngày sinh" style="color:red;">- - -</td>
                                        @endif

                                        @if($value->phone != NULL)
                                        <td data-label="Điện thoại">{{ $value->phone}}</td>
                                        @else
                                        <td data-label="Điện thoại" style="color:red;">- - -</td>
                                        @endif

                                        @if($value->address != NULL)
                                        <td data-label="Địa chỉ">{{ $value->address }}</td>
                                        @else
                                        <td data-label="Địa chỉ" style="color:red;">- - -</td>
                                        @endif
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
</div>




@if (Session::has('add_admin'))
<script type="text/javascript">
    Swal.fire({
        position: 'top-end'
        , icon: 'success'
        , title: 'Đã thêm tài khoản admin'
        , showConfirmButton: false
        , timer: 2000
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
