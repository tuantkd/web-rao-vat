@extends('layout.master_admin')
@section('title','Xem chi tiết bài đăng')
<!-- ============================= -->


<!-- ============================= -->
@section('content')

<style type="text/css">
    .breadcrumb .breadcrumb-item a {
        text-decoration: none;
    }

    .breadcrumb {
        background-color: white;
    }

    .carousel-inner img{
        width: 100%; 
        height: 400px;
    }

    .user_post img{
        max-width: 20%; 
        max-height: 15%;
    }

    .user_post strong{
        font-size: 14px;
    }

    .user_post a{
        font-size: 12px;
        margin-left: 37px;
    }

    .user_post .badge{
        margin-left: 95px;
    }

    .content .price{
        color: red;
    }

    .content p{
        text-align: justify;
    }

    @media screen and (max-width: 600px){
        .user_post a{
            margin-left: 72px;
        }

        .user_post .badge{
            margin-left: 135px;
        }

        .info_post{
            padding-left: 20px;
        }

        .content h5{
            font-size: 15px;
        }

        .content p{
            text-align: justify;
            font-size: 10px;
        }

    }
</style>

<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/manage-post-new') }}">Bài đăng</a>
    </li>
    <li class="breadcrumb-item active">Xem chi tiết</li>
</ul>

<div class="row">
    <div class="col-12 col-sm-12 col-md-3 col-lg-1 col-xl-1 mt-0"></div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-10 col-xl-10 mt-0">

        <div class="card shadow h-100">
            <div class="card-body p-3">
                @foreach ($postNew as $value)

                <div class="row">
                    <div class="col-12 col-md-8 mt-3">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @php
                                    $image_decode = (array)json_decode($value->images,true)
                                @endphp

                                @foreach( $image_decode as $photo )
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                @foreach( $image_decode as $photo )
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block img-fluid" src="{{ url('public/upload_images_post_new/'.$photo) }}"
                                        alt="">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-12 col-md-4 user_post mt-0">
                        <hr>
                        @php
                            $user = DB::table('users')->where('id', $value->user_id)->get();
                        @endphp
                        @foreach ($user as $item)
                            @if($item->avatar == null)
                                <img src="{{ url('public/icons/user.jpg') }}" class="img-thumbnail rounded-left rounded-circle" alt="">
                            @else
                                <img src="{{ $item->avatar }}" class="img-thumbnail rounded-left rounded-circle" alt="">
                            @endif
                            
                            <strong>Huỳnh Mi Nết</strong>
                            <a name="" id="" class="btn btn-outline-info" href="{{ route('view_information_member', [Str::slug($item->username),$item->id] )}}" role="button">Thông tin</a>
                        @endforeach

                        <span><i class="fa fa-calendar" aria-hidden="true"></i> <strong>{{ date("d/m/Y", strtotime($value->created_at)) }}</strong></span>

                        @if($value->status == 0)
                            <span class="badge badge-danger">Chưa duyệt</span>
                        @elseif($value->status == 1)
                            <span class="badge badge-success">Đã duyệt</span>
                        @else
                            <span class="badge badge-danger">Hết hạn</span>
                        @endif

                        @php
                            $post_type = DB::table('post_types')->where('id', $value->post_type_id)->get();
                        @endphp
                        @foreach ($post_type as $item_post_type)
                            <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> <strong>{{ $item_post_type->post_type_name}}</strong></span><br>
                        @endforeach

                        @php
                            $category_first = DB::table('category_child_firsts')->where('id', $value->category_first_id)->get();
                        @endphp
                        @foreach ($category_first as $item_category_first)
                            <span><i class="fa fa-list" aria-hidden="true"></i> <strong>{{ $item_category_first->category_child_name }}</strong></span><br>
                        @endforeach
                        @php
                            $province = DB::table('provinces')->where('id', $value->province_id)->get();
                            $district = DB::table('districts')->where('id', $value->district_id)->get(); 
                        @endphp
                        @foreach ($province as $item_province)
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>{{ $item_province->province_name }}
                        @endforeach
                        @foreach ($district as $item_district)
                            - {{ $item_district->district_name }}</strong></span>
                        @endforeach
                        <hr>
                    </div>
                </div>   

                <div class="row content">
                    <div class="col-12 col-md-12 mt-2">
                        <h5>{{ $value->title }}</h5>
                        <h5 class="price"><strong> {{ number_format($value->price) }} {{ $value->unit_price}}</strong></h5>
                        <p>{!! $value->content !!}</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 mt-0"></div>
</div>

@endsection
<!-- ============================= -->


<!-- ============================= -->
@section('link_js')

@endsection
<!-- ============================= -->