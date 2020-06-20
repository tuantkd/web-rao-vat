@extends('layout.master_admin')
@section('title','Manage member')
{{-- =============================================================================== --}}

@section('content')

<!-- Page Heading -->

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h4 mb-0 text-gray-800">Quản lý thành viên</h4>
    </div>

    <div class="card-body p-2">

        <form action="{{ route('search_member') }}" method="GET">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mr-auto mb-1">
                    <button class="btn btn-danger btn-sm delete_all" role="button" data-url="{{ url('admin/manage-member/delete-all-member') }}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                    </button>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Nhập tìm kiếm điện thoại" class="form-control selectpicker" name="phone_search">
                            @foreach ($allMember as $value)
                            <option value="{{ $value->phone }}">{{ $value->phone }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker" name="username_search">
                            @foreach ($allMember as $value)
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
            </div>
        </form>

        <hr>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                        <thead class="thead-dark|thead-light">
                            <tr>
                                <th scope="col"><input type="checkbox" id="check_all"></th>
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

                            @foreach ($member as $key => $value)
                            <tr id="tr_{{ $value->id }}">
                                <td><input type="checkbox" class="sub_check" data-id="{{ $value->id }}"></td>
                                <td scope="row" data-label="STT">{{ ++$key }}</td>

                                @if($value->fullname != NULL)
                                <td data-label="Họ tên">{{ $value->fullname }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->username != NULL)
                                <td data-label="Họ tên">{{ $value->username }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->sex != NULL)
                                <td data-label="Họ tên">{{ $value->sex }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->birthday != NULL)
                                <td data-label="Họ tên">{{ $value->birthday }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->phone != NULL)
                                <td data-label="Họ tên">{{ $value->phone }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->address != NULL)
                                <td data-label="Họ tên">{{ $value->address }}</td>
                                @else
                                <td data-label="Họ tên">Trống</td>
                                @endif

                                @if($value->number_money != NULL)
                                <td data-label="Họ tên" class="text-success">{{ $value->number_money }} đồng</td>
                                @else
                                <td data-label="Họ tên" class="text-danger">0 đồng</td>
                                @endif


                                <td data-label="Tùy chọn">
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/manage-member/view-information/'
                                    .$value->slug.'-'.$value->id) }}" role="button" title="xem chi tiết">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection

@section('link_js')
<script type="text/javascript">
    $(document).ready(function() {

        //Click chọn tất cả các checkbox
        $('#check_all').on('click', function(e) {
            if ($(this).is(':checked', true)) {
                $(".sub_check").prop('checked', true);
            } else {
                $(".sub_check").prop('checked', false);
            }
        });

        //Click xóa tất cả đã chọn
        $('.delete_all').on('click', function(e) {

            var allVals = [];
            $(".sub_check:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });

            if (allVals.length <= 0) {
                alert("Vui lòng chọn hàng!");
            } else {


                var check = confirm("Bạn có chắc chắn muốn xóa?");
                if (check == true) {
                    var join_selected_values = allVals.join(",");
                    $.ajax({
                        url: "{{ route('delete_all_member') }}"
                        , type: 'DELETE'
                        , headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        , data: 'ids=' + join_selected_values,

                        success: function(data) {
                            if (data['success']) {
                                $(".sub_checkk:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                location.reload();
                                Swal.fire({
                                    position: 'top-end'
                                    , icon: 'success'
                                    , title: 'Đã xóa các thành viên'
                                    , showConfirmButton: false
                                    , timer: 2000
                                });
                            } else {
                                alert('Rất tiếc, đã xảy ra lỗi!!');
                            }
                        }
                        , error: function(data) {
                            alert(data.responseText);
                        }
                    });


                    $.each(allVals, function(index, value) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            }
        });


    });

</script>
@endsection
