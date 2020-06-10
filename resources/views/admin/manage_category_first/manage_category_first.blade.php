@extends('layout.master_admin')
@section('title', 'Manage category first')
{{-- ======================================================== --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý doanh mục cấp 1</h4>
        </div>
        <div class="card-body p-2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 mb-2">
        
                    <a name="" id="" class="btn btn-danger" href="#" role="button">
                        <i class="fa fa-trash" aria-hidden="true"></i> Xóa đã chọn
                    </a>
        
                    <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#modal_add_category_level1">
                        <i class="fa fa-plus" aria-hidden="true"></i> Thêm doanh mục
                    </a>
        
                    <!-- Modal -->
                    <div class="modal fade" id="modal_add_category_level1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
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
                                        <div class="form-group inputSearch row">
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <label for="">Thuộc danh mục</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                                <select data-live-search="true" title="Danh mục cha"
                                                    class="form-control selectpicker" name="category_id">
                                                    @foreach ($category as $value)
                                                        <option value="{{ $value->id }}">{{ $value->category_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <div class="col-12 col-md-3">
                                                <label for="">Tên danh mục cấp 1</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" class="form-control" name="nameCategoryLevel1" id="nameCategoryLevel1" aria-describedby="helpId" placeholder="Nhập danh mục cấp 1" required>
                                                <small class="invalid-feedback">Vui lòng nhập danh mục cấp 1</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-primary" id="btn_refresh" title="Quay lại">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">THÊM</button>
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

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                            class="form-control selectpicker">
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
            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                    <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                        <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                            <thead class="thead-dark|thead-light">
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
                                            <a name="" id="" class="btn btn-danger" href="{{ route('delete_category_first', $value->id) }}" role="button" title="Xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
            
                            </tbody>
                        </table>
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
    <script>
        $('#btn_refresh').click(function(){
            $('#nameCategoryLevel1').val('');
        });
    </script>
@endsection