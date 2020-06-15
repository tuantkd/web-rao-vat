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
        max-width: 100%; 
        max-height: auto;
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
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{ url('public/upload/image_post_new/'.$value->image) }}" alt="First slide">
                                </div>
                                {{-- <div class="carousel-item">
                                    <img src="{{ url('public/images/car-3.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ url('public/images/car-4.jpg') }}" alt="Third slide">
                                </div> --}}
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
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
                            @if($item->image == null)
                                <img src="{{ url('public/icons/user.jpg') }}" class="img-thumbnail rounded-left rounded-circle" alt="">
                            @else
                                <img src="{{ url('public/images/chan-dung-1.jpg') }}" class="img-thumbnail rounded-left rounded-circle" alt="">
                            @endif
                            
                            <strong>Huỳnh Mi Nết</strong>
                            <a name="" id="" class="btn btn-outline-info" href="{{ route('view_information_member', $item->id )}}" role="button">Thông tin</a>
                        @endforeach

                        <span><i class="fa fa-calendar" aria-hidden="true"></i> <strong>{{ $value->created_at }}</strong></span>

                        @if($value->status == 'Chưa duyệt')
                            <span class="badge badge-danger">{{ $value->status }}</span>
                        @else
                            <span class="badge badge-success">{{ $value->status }}</span>
                        @endif

                        @php
                            $post_type = DB::table('post_types')->where('id', $value->post_type_id)->get();
                        @endphp
                        @foreach ($post_type as $item_post_type)
                            <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> <strong>{{ $item_post_type->post_type_name}}</strong></span><br>
                        @endforeach

                        @php
                            $category = DB::table('categorys')->where('id', $value->category_id)->get();
                        @endphp
                        @foreach ($category as $item_category)
                            <span><i class="fa fa-list" aria-hidden="true"></i> <strong>{{ $item_category->category_name }}</strong></span><br>
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
                        <h5 class="price"><strong> {{ number_format($value->price) }} {{ $value->price_type}}</strong></h5>
                        <p>{{ $value->content }}</p>
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