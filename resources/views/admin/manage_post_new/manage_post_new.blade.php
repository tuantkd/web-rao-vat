@extends('layout.master_admin')
@section('title','Bài đăng')
@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')

<div class="card shadow h-100">
    <div class="card-header">
        <h4 class="h3 mb-0 text-gray-800">Quản lý bài đăng</h4>
    </div>

    <div class="card-body p-2">
        <form action="{{ route('search_post_new') }}" method="get">
        <div class="row">

            <div class="col-12 col-md-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mb-1">
                <div class="form-group">
                    <select class="custom-select" name="status_search" id="">
                        <option selected>Chọn trạng thái</option>
                        <option value="1">Đã duyệt</option>
                        <option value="0">Chưa duyệt</option>
                        <option value="2">Hết hạn</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 searchAdmin mb-1">
                <div class="form-group inputSearch">
                    <select data-live-search="true" title="Nhập loại để tìm kiếm" class="form-control selectpicker" name="post_type_search_id">
                        @foreach ($type_post as $value)
                        <option value="{{ $value->id }}">{{ $value->post_type_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ml-auto mb-3">
                <div class="input-group">
                    <select data-live-search="true" title="Chọn nhập tìm kiếm ..." class="form-control selectpicker" name="province_search_id">
                        @foreach ($province as $value)
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
            </form>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                @foreach ($postNew as $value)
                    <div class="media border p-2">
                        @php
                            $image_decode = (array)json_decode($value->images,true)
                        @endphp
                        @foreach ($image_decode as $picture)
                            @if ($loop->first)
                                <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="img-fluid mr-3 image-post-new" style="width: 100px;">
                            @endif
                        @endforeach

                        <div class="media-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                    <a href="{{ route('view_post_new', [ Str::slug($value->title), $value->id]) }}"><b>{{ $value->title }}</b></a>
                                    <p>
                                        <strong><i class="fa fa-money" aria-hidden="true"></i> {{ number_format($value->price) }} {{ $value->unit_price }}</strong> | 
                                        
                                        @if($value->status == 0)
                                            <span class="badge badge-danger">Chưa duyệt</span>
                                        @elseif($value->status == 1)
                                            <span class="badge badge-success">Đã duyệt</span>
                                        @else
                                            <span class="badge badge-danger">Hết hạn</span>
                                        @endif

                                        <br>
                                        <small><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("d/m/Y", strtotime($value->created_at )) }}</small> |

                                        @php
                                            $user = DB::table('users')->where('id', $value->user_id)->get();
                                        @endphp
                                        @foreach ($user as $item)
                                            <small><i class="fa fa-user" aria-hidden="true"></i> {{ $item->username }}</small> |
                                        @endforeach
                                        
                                        @php
                                            $district = DB::table('districts')->where('id', $value->district_id)->get();
                                            $province = DB::table('provinces')->where('id', $value->province_id)->get();
                                        @endphp
                                        @foreach ($district as $item)
                                            @foreach ($province as $items)
                                                <small><i class="fas fa-map-marker-alt"></i> {{ $items->province_name}} - {{ $item->district_name}}</small>
                                            @endforeach
                                        @endforeach
                                    </p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                    @if($value->status == 0)
                                        <a class="btn btn-success btn-sm" href="{{ url('admin/manage-post-new/approved/'.Str::slug($value->title).'/'.$value->id.'/'.$value->status) }}" role="button" data-toggle="tooltip"
                                            title="Phê duyệt">
                                            <i class="far fa-check-square"></i>
                                        </a>
                                    @elseif($value->status == 1)
                                        <a class="btn btn-danger btn-sm" href="{{ url('admin/manage-post-new/approved/'.Str::slug($value->title).'/'.$value->id.'/'.$value->status)}}" role="button" data-toggle="tooltip"
                                            title="Chặn">
                                            <i class="fa fa-ban"></i>
                                        </a>
                                    @endif
                                    

                                    <a class="btn btn-outline-danger btn-sm" href="{{ route('delete_post_new', $value->id) }}" role="button" title="xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="col-12 col-md-12">
                {{ $postNew->links() }}
            </div>

        </div>

    </div>

</div>

@if (Session::has('changeStatus'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thay đổi trạng thái bài đăng',
            showConfirmButton: false,
            timer: 1000
        });
    </script>
@endif

@endsection
