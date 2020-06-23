@extends('layout.master_admin')
@section('title','Admin - Trang chủ')
@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')


<!-- Content Row -->
<!-- ============================================== -->
<div class="row" id="row-list">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Quản trị viên</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                        <i class="fa fa-user fa-2x text-gray-300" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Thành viên</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bài đăng</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-newspaper fa-2x text-gray-300" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Danh mục đăng</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                        <i class="fa fa-list fa-2x text-gray-300" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================== -->



<!-- ============================================== -->
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100">
            <div class="card-header">
                <h4>Bài đăng mới nhất</h4>
            </div>
            <div class="card-body p-2">

                @foreach ($postNew as $item_post_new)
                    <div class="media border p-2">
                        <img src="{{ url('public/upload/image_post_new/'.$item_post_new->images) }}" class="img-fluid mr-3 image-post-new">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                    <a href="{{ route('view_post_new', [ Str::slug($item_post_new->title), $item_post_new->id]) }}"><b>{{ $item_post_new->title }}</b></a>
                                    <p>
                                        <strong><i class="fa fa-money" aria-hidden="true"></i> {{ number_format($item_post_new->price) }} {{ $item_post_new->unit_price }}</strong> |

                                        @if($item_post_new->status == 0)
                                            <span class="badge badge-danger">Chưa duyệt</span>
                                        @elseif($value->status == 1)
                                            <span class="badge badge-success">Đã duyệt</span>
                                        @else
                                            <span class="badge badge-danger">Hết hạn</span>
                                        @endif

                                        <br>
                                        <small><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("d/m/Y", strtotime($item_post_new->created_at )) }}</small> |
                                        @php
                                            $district = DB::table('districts')->where('id', $item_post_new->district_id)->get();
                                            $province = DB::table('provinces')->where('id', $item_post_new->province_id)->get();
                                        @endphp
                                        @foreach ($district as $item)
                                            @foreach ($province as $items)
                                                <small><i class="fas fa-map-marker-alt"></i> {{ $items->province_name}} - {{ $item->district_name}}</small>
                                            @endforeach
                                        @endforeach
                                    </p>
                                </div>

                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                                    <a class="btn btn-outline-success btn-sm" href="#" role="button" data-toggle="tooltip" title="Chưa duyệt">
                                        <i class="far fa-check-square"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm" href="{{ route('delete_post_new', $item_post_new->id)}}" role="button" title="xóa" onclick="return confirm('Bạn có chắc xóa không?')">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- ============================================== -->



<!-- ============================================== -->
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100">
            <div class="card-header">
                <h4>Thành viên tham gia mới</h4>
            </div>
            <div class="card-body p-1">

                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                        <thead class="thead-dark|thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên liên hệ</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Ngày sinh</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member as $key => $item_member)
                                <tr>
                                    <td data-label="STT">{{ ++$key }}</td>
                                    <td data-label="Tên liên hệ">
                                        <a href="{{ route('view_information_member', [Str::slug($item_member->username), $item_member->id]) }}">{{ $item_member->username }}</a>
                                    </td>
                                    <td data-label="Điện thoại">{{ $item_member->phone }}</td>
                                    <td data-label="Giới tính">{{ $item_member->sex }}</td>
                                    <td data-label="Ngày sinh">{{ $item_member->birthday }}</td>
                                    <td data-label="Email">{{ $item_member->email }}</td>
                                    <td data-label="Địa chỉ">{{ $item_member->address }}</td>
                                    <td data-label="Tùy chọn">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('view_information_member', [Str::slug($item_member->username), $item_member->id]) }}" role="button" title="Xem thông tin">
                                            <i class="fas fa-info"></i>
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
<!-- ============================================== -->

@endsection

@section('link_js')
   
@endsection
