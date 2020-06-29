@extends('layout.master_admin')
@section('title', 'Tỉnh - Thành phố')
{{-- ========================================================================= --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý tỉnh thành</h4>
        </div>

        <div class="card-body p-2">
            <form action="{{ route('search_province') }}" method="get">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-1">
                    <a class="btn btn-danger delete_all" href="#" role="button">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete all
                    </a>
                </div>

                <div class="col-12 col-md-3"></div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                            class="form-control selectpicker" name="province_id">
                            @foreach ($allProvince as $value)
                                <option value="{{ $value->id }}">{{ $value->province_name }}</option>
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

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 mb-4">
                    <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                        <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                            <thead class="thead-dark|thead-light">
                                <tr>
                                    <th><input type="checkbox" id="check_all"></th>
                                    <th>STT</th>
                                    <th>Tên tỉnh</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($province as $key => $value)
                                    <tr id="tr_{{ $value->id }}">
                                        <td><input type="checkbox" class="sub_check" data-id="{{ $value->id }}"></td>
                                        <td data-label="STT">{{ ++$key }}</td>
                                        <td data-label="Tên tỉnh">{{ $value->province_name }}</td>
                                        <td data-label="Tùy chọn">
                                            <a class="btn btn-primary" role="button" href="{{ route('edit_province', $value->id) }}" title="Chỉnh sửa"> 
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
                            <h5 class="modal-title">Thêm Tỉnh/Thành phớ</h5>
                        </div>

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('add_province') }}" method="POST" novalidate>
                                @csrf

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Tên tỉnh thành</label>
                                        <input type="text" class="form-control" name="nameProvince" id="nameProvince" aria-describedby="helpId" placeholder="Enter type name province" required>
                                        <small class="invalid-feedback">Vui lòng nhập tỉnh thành</small>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">THÊM</button>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    {{ $province->links() }}
                </div>

            </div>
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

    @if (Session::has('edit_province'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã chỉnh sửa tỉnh thành',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection

@section('link_js')
    <script type="text/javascript">
        $(document).ready(function () {

            //Click chọn tất cả các checkbox
            $('#check_all').on('click', function(e) {
            if($(this).is(':checked',true))  
            {
                $(".sub_check").prop('checked', true);  
            } else {  
                $(".sub_check").prop('checked',false);  
            }  
            });

            //Click xóa tất cả đã chọn
            $('.delete_all').on('click', function(e) {

                var allVals = [];  
                $(".sub_check:checked").each(function() {  
                    allVals.push($(this).attr('data-id'));
                });  

                if(allVals.length <= 0)  
                {  
                    alert("Vui lòng chọn hàng!");  
                }  else {  


                    var check = confirm("Bạn có chắc chắn muốn xóa?");  
                    if(check == true){  
                        var join_selected_values = allVals.join(","); 
                        $.ajax({
                            url: "{{ route('delete_province') }}",
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids=' + join_selected_values,

                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_checkk:checked").each(function() {  
                                        $(this).parents("tr").remove();
                                    });
                                    location.reload();
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Đã xóa các loại bài đăng',
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                }else {
                                    alert('Rất tiếc, đã xảy ra lỗi!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });


                    $.each(allVals, function( index, value ) {
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                    }  
                }  
            });


        });
    </script>
@endsection
