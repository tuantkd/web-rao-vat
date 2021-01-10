@extends('layout.layout_home')
@section('title', 'Trang chủ')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<style>
    .navbar-nav .nav-item .nav-link {
        color: gray;
    }

    .responsive {
        max-width: 100%;
        height: auto;
        border-radius: 3px;
    }

    .nav-pills .nav-item {
        margin-top: 10px
    }

    .nav-pills .nav-item .active {
        background-color: gray;
        color: #ffdf00;
        padding: 5px;
        font-size: 14px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        font-weight: bolder;
        text-shadow: 1px 1px 1px gray;
    }

    .nav-pills .nav-item .active:hover {
        background-color: #ffdf00;
        color: gray;
        box-shadow: 2px 2px 6px 1px gray;
        text-shadow: 1px 1px 1px #FFDF00;
    }

    .btn-outline-warning:hover {
        border: none;
    }

    .flex-fill #a-payment:hover {
        color: #ffdf00;
        border: 2px solid #ffdf00;
        background-color: gray;
        font-weight: bold;
    }

    .flex-fill #a-payment {
        color: gray;
        border: 2px solid gray;
        background-color: #ffdf00;
        font-weight: bold;
    }

    .image-icon-index {
        max-width: 100%;
        height: 30px;
    }

    /*=============================================*/
    .category-all {
        border: 1px solid gray;
        margin-bottom: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .category-all .card-header {
        background-color: gray;
        padding: 8px;
    }

    .category-all .card-header b {
        color: #ffdf00;
        font-size: 18px;
    }


    @media screen and (max-width: 600px) {
        .category-all .card-header b {
            color: #ffdf00;
            font-size: 12px;
        }

        .category-all .card-header {
            padding: 5px;
        }

        .nav-pills .nav-item .active {
            font-size: 12px;
        }

        .image-icon-index {
            max-width: 100%;
            height: 25px;
        }

    }

</style>


<div class="container container-index">
    <div class="row">

        <div class="col-sm-3">
            <!-- card-desktop -->
            <div class="card category-all">
                <div class="card-header">
                    <b>DANH MỤC</b>
                </div>
                <div class="card-body p-1">
                    <ul class="nav nav-pills flex-column">
                        @foreach($show_category as $key => $value)

                        @if($value->id == 1)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/bat-dong-san.png') }}" class="image-icon-index"> Bất động sản
                            </a>
                        </li>
                        @elseif($value->id == 2)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/xe-co.png') }}" class="image-icon-index"> Xe
                                cộ
                            </a>
                        </li>
                        @elseif($value->id == 3)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/dien-tu.png') }}" class="image-icon-index">
                                Đồ điện tử
                            </a>
                        </li>
                        @elseif($value->id == 4)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/viec-lam.png') }}" class="image-icon-index">
                                Việc làm, tuyển sinh
                            </a>
                        </li>
                        @elseif($value->id == 5)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/thu-cung.png') }}" class="image-icon-index">
                                Thú cưng
                            </a>
                        </li>
                        @elseif($value->id == 6)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/thuc-pham.png') }}" class="image-icon-index">
                                Thực phẩm, loại khác
                            </a>
                        </li>
                        @elseif($value->id == 7)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/may-lanh.png') }}" class="image-icon-index">
                                Điện lạnh, máy giặt
                            </a>
                        </li>
                        @elseif($value->id == 8)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/do-van-phong.png') }}" class="image-icon-index"> Đồ gia dụng, và loại khác
                            </a>
                        </li>
                        @elseif($value->id == 9)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/thoi-trang.png') }}" class="image-icon-index"> Thời trang, đồ dùng
                            </a>
                        </li>
                        @elseif($value->id == 10)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/the-thao.png') }}" class="image-icon-index"> Thể thao, sở thích, giải trí
                            </a>
                        </li>
                        @elseif($value->id == 11)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/van-phong.png') }}" class="image-icon-index">
                                Đồ văn phòng, loại khác
                            </a>
                        </li>
                        @elseif($value->id == 12)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/dich-vu.png') }}" class="image-icon-index">
                                Dịch vụ, du lịch
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <img src="{{ url('public/icons/me-be.png') }}" class="image-icon-index"> Mẹ
                                và bé
                            </a>
                        </li>
                        @endif
                        @endforeach


                    </ul>
                </div>
            </div>
            <!-- card-desktop -->
        </div>



        <div class="col-sm-9">
            <!-- news -->
            @foreach ($new as $item)
            <div class="card mb-2">
                <div class="card-body p-2" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
                    <img src="{{ url('public/upload/image_new/'.$item->image) }}" class="responsive" width="900" height="400">
                    <h3 class="card-title">
                        <strong>
                            <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}">
                                {{ $item->title }}
                            </a>
                        </strong>
                    </h3>
                    <p class="card-text">{!! $item->title_short !!}</p>
                    <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}" class="btn btn-outline-secondary btn-sm">
                        - - Xem chi tiết - -
                    </a>
                </div>
            </div>
            @endforeach
            <!-- news -->

            <!-- option -->
            <div class="card mb-2">
                <div class="card-body" style="padding:5px;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
                    <div class="d-flex">
                        <div class="p-1 flex-fill">
                            <a href="{{ url('page-payment-method') }}" class="btn" id="a-payment">
                                <img src="{{ url('public/icons/nap-tien.png') }}" class="image-icon-index"> Nạp tiền nâng cấp bản tin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- option -->


            <!-- carousel -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);border-radius:5px;">
                <ol class="carousel-indicators">
                    @foreach( $banner as $photo )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach( $banner as $photo )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        @php
                        $get_post_news = DB::table('post_news')->where('id',$photo->post_id)->get();
                        @endphp
                        @foreach( $get_post_news as $data )
                        <a href="{{ url('view-category-detail/'.Str::slug($data->title).'/'.$data->id) }}">
                            <img class="img-fluid" src="{{ url('public/upload/banner/'.$photo->image) }}" style="border-radius:5px;">
                        </a>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- carousel -->
        </div>


    </div>
</div>

@endsection
<!-- ==================================================== -->
