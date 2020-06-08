@extends('layout.master_admin')
@section('title', 'Manage category first')
{{-- ======================================================== --}}

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quản lý doanh mục cấp 1</h1>
    </div>

    <hr>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-1">

            <a name="" id="" class="btn btn-danger" href="#" role="button">
                Delete all
            </a>

            <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_category_level1">
                <i class="fa fa-plus" aria-hidden="true"></i> Thêm doanh mục cấp 1
            </a>

            <!-- Modal -->
            <div class="modal fade" id="modal_add_category_level1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">thêm danh mục CẤP 1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="needs-validation" action="{{ route('add_category_first') }}" method="POST" novalidate>
                            @csrf

                            <div class="modal-body">
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
                                    <input type="text" class="form-control" name="nameCategoryLevel1" id="nameCategoryLevel1" aria-describedby="helpId" placeholder="Enter type name category level 1" required>
                                    <small class="invalid-feedback">Vui lòng nhập danh mục cấp 1</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">THÊM DANH MỤC CẤP 1</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Lọc theo danh mục cha"
                    class="form-control selectpicker">
                    @foreach ($category as $value)
                        <option value="{{ $value->category_name }}">{{ $value->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
            <div class="form-group inputSearch">
                <select data-live-search="true" title="Nhập tên để tìm kiếm"
                    class="form-control selectpicker">
                    @foreach ($allCategoryFirst as $value)
                        <option value="{{ $value->category_child_name }}">{{ $value->category_child_name }}</option>
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
                        <th>Tên doanh mục cấp 1</th>
                        <th>Doanh mục cha</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoryFirst as $key => $value)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id=""></td>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->category_child_name }}</td>
                            @php
                                $category_pather = DB::table('categorys')->where('id', $value->category_id)->get();
                            @endphp
                            @foreach ($category_pather as $item)
                                <td>{{ $item->category_name }}</td>
                            @endforeach
                            <td>
                                <a name="" id="" class="btn btn-primary" href="#" role="button"
                                    title="Chỉnh sửa">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                </a>

                                <a name="" id="" class="btn btn-danger" href="{{ route('delete_category_first', $value->id) }}" role="button" title="Xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="col-12">
            {{ $categoryFirst->links() }}
        </div>
    </div>
    <!-- /.container-fluid -->

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