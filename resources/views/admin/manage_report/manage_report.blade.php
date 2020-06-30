@extends('layout.master_admin')
@section('title', 'Báo cáo vi phạm')
{{-- ========================================================================= --}}

@section('content')

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h3 mb-0 text-gray-800">Quản lý báo cáo vi phạm</h4>
    </div>

    <div class="card-body p-2">
        <form action="" method="get">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-1">
                    <a class="btn btn-danger delete_all" href="#" role="button">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete all
                    </a>
                </div>

                <div class="col-12 col-md-3 mb-1 searchAdmin">
                    <div class="form-group inputSearch">
                        <select data-live-search="true" title="Nhập tên vi phạm" class="form-control selectpicker" name="nameReport">
                            @foreach ($nameReport as $item_nameReport)
                            <option value="{{ $item_nameReport->report_name }}">{{ $item_nameReport->report_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-1 searchAdmin">
                    <div class="form-group inputSearch">
                        <select data-live-search="true" title="Nhập tên người báo cáo" class="form-control selectpicker" name="userReport">
                            @foreach ($nameUserReport as $item_nameUserReport)
                            <option value="{{ $item_nameUserReport->username }}">{{ $item_nameUserReport->username }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Nhập email người báo cáo" class="form-control selectpicker" name="email_user_report">
                            @foreach ($emailUserReport as $item_emailUserReport)
                            <option value="{{ $item_emailUserReport->email }}">{{ $item_emailUserReport->email }}</option>
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

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                        <thead class="thead-dark|thead-light">
                            <tr>
                                <th><input type="checkbox" id="check_all"></th>
                                <th>STT</th>
                                <th>Bài đăng</th>
                                <th>Tên vi phạm</th>
                                <th>Người báo cáo</th>
                                <th>Email</th>
                                <th colspan="2">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($report as $item_report)
                            @php
                            $postNew = DB::table('post_news')->select('id','title','status')->where('id', $item_report->post_new_id)->get();
                            @endphp
                            @foreach ($postNew as $key => $item_postNew)
                            @if ($item_postNew->status == 1)
                            <tr id="tr_{{ $item_report->id }}">
                                <td><input type="checkbox" class="sub_check" data-id="{{ $item_report->id }}"></td>
                                <td data-label="STT">{{ ++$key }}</td>
                                <td data-label="Bài đăng">{{ $item_postNew->title }}</td>
                                <td data-label="Tên vi phạm">{{ $item_report->report_name }}</td>
                                <td data-label="Người báo cáo">{{ $item_report->username }}</td>
                                <td data-label="Email">{{ $item_report->email }}</td>
                                <td data-label="Tùy chọn">
                                    <a class="btn btn-primary" role="button" href="{{ route('view_post_new', [Str::slug($item_postNew->title), $item_postNew->id])}}" title="Xem bài đăng">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td data-label="Tùy chọn">
                                    <a class="btn btn-danger" role="button" href="{{ url('admin/manage-post-new/approved/'.Str::slug($item_postNew->title).'/'.$item_postNew->id.'/'.$item_postNew->status) }}" title="chặn bài đăng">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12">

            </div>

        </div>
    </div>
</div>

<!-- /.container-fluid -->

@if (Session::has('changeStatus'))
<script>
    Swal.fire({
        position: 'top-end'
        , icon: 'success'
        , title: 'Đã chặn bài đăng'
        , showConfirmButton: false
        , timer: 1000
    });

</script>
@endif
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
                        url: "{{ route('delete_province') }}"
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
                                    , title: 'Đã xóa các loại bài đăng'
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
