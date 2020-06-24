@extends('layout.master_admin')
@section('title', 'Manage new')
@section('link_css')
    <link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- ========================================================= --}}

@section('content')

    <div class="card shadow h-100">
        <div class="card-header">
            <h4 class="h3 mb-0 text-gray-800">Quản lý tin tức</h4>
        </div>

        <div class="card-body p-2">
            <form action="{{ route('search_new') }}" method="get">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto mb-1">
                    <a name="" id="" class="btn btn-primary" href="{{ route('get_add_new') }}" role="button">
                        <i class="fa fa-plus" aria-hidden="true"></i> Thêm tin tức
                    </a>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-3 mt-1">
                    <div class="input-group">
                        <select data-live-search="true" title="Chọn nhập tìm kiếm ..."
                            class="form-control selectpicker" name="new_id">
                            @foreach ($new as $value)
                                <option value="{{ $value->id }}">{{ $value->title }}</option>
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
                    @foreach ($new as $value)
                        <div class="media border p-2">
                            <img src="{{ url('public/upload/image_new/'.$value->image) }}" style="max-width: 100px;" class="img-fluid mr-3 image-post-new">
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                        <a href="{{ route('view_detail_new', [Str::slug($value->title), $value->id] )}}"><b>{{ $value->title }}</a></b>
                                        <span>
                                            {!! Str::limit($value->content,200, '...') !!}
                                            <br>
                                            <small><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $value->created_at }}</small>
                                        </span>
                                    </div>
                                    
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                        <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip"
                                            title="Phê duyệt">
                                            <i class="far fa-check-square"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm" href="{{ route('delete_new', $value->id) }}" role="button" title="xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
        
                </div>

                <div class="col-12">
                    {{ $new->links() }}
                </div>
            </div>
        </div>

    </div>

    @if (Session::has('add_new'))    
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã thêm tin tức thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (Session::has('delete_new'))    
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Đã xóa tin tức thành công',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection

@section('link_js')
    <script>
        $('#btn_refresh').click(function(){
            $('#title, #content, #file').val('');
        });
    </script>
@endsection