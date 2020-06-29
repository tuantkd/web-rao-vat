@extends('layout.master_admin')
@section('title', 'Quận - Huyện')
{{-- ======================================================== --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý quận huyện</h4>
        </div>

        <div class="card-body p-2">
            <form action="{{ route('search_district') }}" method="get">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-1">
                    <a name="" id="" class="btn btn-danger delete_all" href="#" role="button">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete all
                    </a>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
                    <div class="form-group inputSearch">
                        <select data-live-search="true" title="Nhập tỉnh để tìm kiếm"
                            class="form-control selectpicker" name="province_id">
                            @foreach ($allProvince as $value)
                                <option value="{{ $value->id }}">{{ $value->province_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                            class="form-control selectpicker" name="district_id">
                            @foreach ($allDistrict as $value)
                                <option value="{{ $value->id }}">{{ $value->district_name }}</option>
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
                                    <th>Tên quận huyện</th>
                                    <th>Thuộc tỉnh</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($district as $key => $value)
                                    <tr id="tr_{{ $value->id }}">
                                        <td><input type="checkbox" class="sub_check" data-id="{{ $value->id }}"></td>
                                        <td data-label="STT">{{ ++$key }}</td>
                                        <td data-label="Tên quận/huyện">{{ $value->district_name }}</td>
                                        @php
                                            $province_belong = DB::table('provinces')->where('id', $value->province_id)->get();
                                        @endphp
                                        @foreach ($province_belong as $item)
                                            <td data-label="Thuộc tỉnh">{{ $item->province_name }}</td>
                                        @endforeach
                                        <td data-label="Tùy chọn">
                                            <a name="" id="" class="btn btn-primary" href="{{ route('edit_district', $value->id) }}" role="button"
                                                title="Chỉnh sửa">
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
                            <h5 class="modal-title">Thêm Quận/Huyện</h5>
                        </div>
                        
                        <div class="card-body">
                            <form class="needs-validation" action="{{ route('add_district') }}" method="POST" novalidate>
                                @csrf

                                <div class="form-group inputSearch">
                                    <label for="">Thuộc tỉnh</label>
                                    <select data-live-search="true" title="Nhập tỉnh để tìm kiếm"
                                        class="form-control selectpicker" name="province_id" id="province_id">
                                        @foreach ($allProvince as $value)
                                            <option value="{{ $value->id }}">{{ $value->province_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Tên quận huyện</label>
                                    <input type="text" class="form-control" name="nameDistrict" id="nameDistrict" aria-describedby="helpId" placeholder="Enter type name district" required>
                                    <small class="invalid-feedback">Vui lòng nhập quận huyện</small>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">THÊM</button>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    {{ $district->links() }}
                </div>

            </div>

        </div>

    </div>

    @if (Session::has('add_district'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã thêm quận huyện thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (Session::has('delete_district'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã xóa quận huyện thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (Session::has('edit_district'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã chỉnh sửa quận huyện thành công',
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
                            url: "{{ route('delete_district') }}",
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
                                        title: 'Đã xóa các quận huyện',
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

