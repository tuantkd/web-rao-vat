@extends('layout.master_admin')
@section('title', 'Manage category')
{{-- ======================================================= --}}

@section('content')

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h3 mb-0 text-gray-800">Quản lý doanh mục</h4>
    </div>

    <div class="card-body p-2">
        <form action="{{ route('search_category') }}" method="get">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-1">
                    <a class="btn btn-danger delete_all" role="button" href="#">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                    </a>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1 mt-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker" name="category_name_search">
                            @foreach ($allCategory as $value)
                            <option value="{{ $value->category_name }}">{{ $value->category_name }}</option>
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
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 mb-4">
                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                        <thead class="thead-dark|thead-light">
                            <tr>
                                <th><input type="checkbox" id="check_all"></th>
                                <th>STT</th>
                                <th>Tên doanh mục</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $value)
                            <tr id="tr_{{ $value->id }}">
                                <td data-lable=""><input type="checkbox" class="sub_check" data-id="{{ $value->id }}"></td>
                                <td data-label="STT">{{ ++$key }}</td>
                                <td data-label="Tên doanh mục">{{ $value->category_name }}</td>
                                <td data-label="Tùy chọn">
                                    <a name="" id="" class="btn btn-primary" href="{{ route('get_edit_category', $value->id)}}" role="button" title="Chỉnh sửa">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="card">

                    <div class="card-header">
                        Thêm danh mục
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{ route('add_category') }}" method="POST" novalidate>
                            @csrf
    
                            <div class="form-group row">
                                <label for="">Tên danh mục</label>
                                <input type="text" class="form-control" name="nameCategory" id="nameCategory" aria-describedby="helpId" placeholder="Nhập tên doanh mục" required>
                                <small class="invalid-feedback">Vui lòng nhập danh mục</small>
                            </div>
                            <button type="button" class="btn btn-outline-primary" id="refresh" title="Quay lại">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </button>
                            <button type="submit" class="btn btn-success">THÊM DANH MỤC</button>
    
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                {{ $category->links() }}
            </div>
        </div>
    </div>
</div>
</div>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

</div>

<!-- /.container-fluid -->

@if (Session::has('add_category'))
<script>
    Swal.fire({
        position: 'top-end'
        , icon: 'success'
        , title: 'Đã thêm danh mục thành công'
        , showConfirmButton: false
        , timer: 2000
    });

</script>
@endif

@if (Session::has('delete_category'))
<script>
    Swal.fire({
        position: 'top-end'
        , icon: 'success'
        , title: 'Đã xóa danh mục thành công'
        , showConfirmButton: false
        , timer: 2000
    });

</script>
@endif

@if (Session::has('edit_category'))
<script>
    Swal.fire({
        position: 'top-end'
        , icon: 'success'
        , title: 'Đã chỉnh sửa danh mục thành công'
        , showConfirmButton: false
        , timer: 2000
    });

</script>
@endif
@endsection

@section('link_js')
<script>
    $('#refresh').click(function() {
        $('#nameCategory').val('');
    });

</script>

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
                        url: "{{ route('delete_category') }}"
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
                                    , title: 'Đã xóa các doanh mục'
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
