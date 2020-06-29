@extends('layout.master_admin')
@section('title','Admin - Hồ sơ cá nhân')

@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')

<!-- ======================================================= -->
<style type="text/css" media="screen">
    .card-primary {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .card-primary .card-header {
        padding: 0px;
        padding-top: 15px;
        padding-left: 15px;
    }

    .nav-pills .nav-item .nav-link {
        margin-right: 10px;
    }

    .nav-pills .nav-item .nav-link:hover {
        background-color: #4091bf;
    }

    /* =================================== */
    @media screen and (max-width: 600px) {
        .nav-pills .nav-item .nav-link {
            font-size: 11px;
        }
    }

    /* =================================== */

</style>
<!-- ======================================================= -->


<!-- ======================================================= -->
<section class="content">
    <div class="container" style="padding:1px;">

        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/manage-member') }}">Quản lý thành viên</a>
            </li>
            <li class="breadcrumb-item active">Xem thông tin</li>
        </ul>
        <!-- breadcrumb -->

        @foreach ($member as $item_member)
        <div class="row">

            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-outline m-0">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if($item_member->facebook_id != NULL)
                                <img src="{{ $item_member->avatar }}" class="profile-user-img img-fluid img-circle" style="border-radius:50%;"> ​
                            @elseif($item_member->google_id != NULL)
                                <img src="{{ $item_member->avatar }}" class="profile-user-img img-fluid img-circle" style="border-radius:50%;">
                            @elseif($item_member->avatar != NULL)
                                <img src="{{ url('public/upload_images_avatar/'.$item_member->avatar) }}" class="profile-user-img img-fluid img-circle" style="border-radius:50%;">
                            @else
                                <img src="{{ url('public/logo/user/user-icon-edit.png') }}" class="profile-user-img img-fluid img-circle" style="border-radius:50%;">
                            @endif

                        </div>

                        <h3 class="profile-username text-center">{{ $item_member->username }}</h3>

                        <p class="text-muted text-center">Thành viên</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                @php
                                    $postCount = DB::table('post_news')->where('user_id', $item_member->id)->count();
                                @endphp
                                <b><i class="far fa-newspaper"></i> Số bài đăng</b> <a class="float-right">{{ $postCount }}</a>
                            </li>
                            <li class="list-group-item">
                                <b><i class="far fa-money-bill-alt"></i> Số tiền</b> <a class="float-right">{{ $item_member->number_money }} đ</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block">
                            <i class="fas fa-money-check-alt"></i> Nạp tiền
                        </a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-info"></i> Thông tin cá nhân</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if($item_member->phone == null)
                            <strong><i class="fas fa-phone"></i> Đang cập nhật</strong>
                        @else
                            <strong><i class="fas fa-phone"></i> {{ $item_member->phone }}</strong>
                        @endif
                        <hr>

                        @if($item_member->address == null)
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Đang cập nhật</strong>
                        @else
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> {{ $item_member->address }}</strong>
                        @endif
                        <hr>

                        @if($item_member->sex == null)
                            <strong><i class="fas fa-mars"></i> Đang cập nhật</strong>
                        @else
                            <strong><i class="fas fa-mars"></i> {{ $item_member->sex }}</strong>
                        @endif
                        <hr>

                        @if($item_member->birthday == null)
                            <strong><i class="far fa-calendar-alt"></i> Đang cập nhật</strong>
                        @else
                            <strong><i class="far fa-calendar-alt"></i> {{ $item_member->birthday }}</strong>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- col-md-9 -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h4 class="h4 text-secondary pt-1">Danh sách bài đăng</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="tab-content">
                            <!-- tab-content -->
                            <div class="tab-pane active" id="settings">

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
                            <!-- tab-content -->
                        </div>
                        <!-- /.tab-content -->
                        <ul class="pagination justify-content-center">
                            {{ $postNew->links() }}
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        @endforeach
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</section>
<!-- ======================================================= -->

@endsection
