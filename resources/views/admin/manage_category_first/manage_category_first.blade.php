@extends('layout.master_admin')
@section('title', 'Manage category first')
{{-- ======================================================== --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý doanh mục cấp 1</h4>
        </div>
        <div class="card-body p-2">
            <form action="{{ route('search_category_first') }}" method="get">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-2">
                        <a class="btn btn-danger delete_all" href="#" role="button">
                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                        </a>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
                        <div class="form-group inputSearch">
                            <select data-live-search="true" title="Lọc theo danh mục cha"
                                class="form-control selectpicker" name="category_id">
                                @foreach ($category as $value)
                                    <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                        <div class="input-group">
                            <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                                class="form-control selectpicker" name="category_child_name">
                                @foreach ($allCategoryFirst as $value)
                                    <option value="{{ $value->category_child_name }}">{{ $value->category_child_name }}</option>
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
                                    <th>Tên doanh mục cấp 1</th>
                                    <th>Doanh mục cha</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoryFirst as $key => $value)
                                    <tr id="tr_{{ $value->id }}">
                                        <td><input type="checkbox" class="sub_check" data-id="{{ $value->id }}"></td>
                                        <td data-label="STT">{{ ++$key }}</td>
                                        <td data-label="Tên doanh mục">{{ $value->category_child_name }}</td>
                                        @php
                                            $category_pather = DB::table('categorys')->where('id', $value->category_id)->get();
                                        @endphp
                                        @foreach ($category_pather as $item)
                                            <td data-label="Doanh mục cha">{{ $item->category_name }}</td>
                                        @endforeach
                                        <td data-label="Tùy chọn">
                                            <a class="btn btn-primary" href="" role="button" title="Chỉnh sửa">
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
                            <h5 class="modal-title">Thêm doanh mục cấp 1</h5>
                        </div>

                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('add_category_first') }}" method="POST" novalidate>
                                @csrf
    
                                <div class="form-group inputSearch">
                                    <label for="">Thuộc danh mục</label>
                                    <select data-live-search="true" title="Danh mục cha"
                                        class="form-control selectpicker" name="category_id">
                                        @foreach ($category as $value)
                                            <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Tên danh mục cấp 1</label>
                                    <input type="text" class="form-control" name="nameCategoryLevel1" id="nameCategoryLevel1" aria-describedby="helpId" placeholder="Nhập danh mục cấp 1" required>
                                    <small class="invalid-feedback">Vui lòng nhập danh mục cấp 1</small>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">THÊM</button>
                            </form>

                        </div>
                    </div>
                </div>
        
                <div class="col-12">
                    {{ $categoryFirst->links() }}
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('add_category_first'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã thêm danh mục cấp 1 thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (Session::has('delete_category_first'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã xóa danh mục cấp 1 thành công',
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
                            url: "{{ route('delete_category_first') }}",
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
                                        title: 'Đã xóa các doanh mục cấp 1',
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