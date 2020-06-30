@extends('layout.layout_home')
@section('title', 'Trang chủ')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<style>
    .responsive {
        max-width: 100%;
        height: auto;
        border-radius: 3px;
    }

</style>


<div class="container container-index">
    <div class="row">
        <div class="col-sm-3">
            <!-- card-desktop -->
            <div class="card desktop" style="border:1px solid #dd3420;margin-bottom:10px;">
                <div class="card-header" style="background-color:#dd3420;padding:5px;">
                    <b style="color:white;font-size:15px;">DANH MỤC</b>
                </div>
                <div class="card-body" style="padding:5px;padding-top:5px;font-size:13px;">
                    <ul class="nav nav-pills flex-column">

                        @foreach($show_category as $key => $value)

                        @if($value->id == 1)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-home'></i> Bất động sản
                            </a>
                        </li>
                        @elseif($value->id == 2)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-car'></i> Xe cộ</a>
                        </li>
                        @elseif($value->id == 3)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}"><i class='fas fa-mobile-alt'></i> Đồ điện tử</a>
                        </li>
                        @elseif($value->id == 4)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-business-time'></i> Việc làm, tuyển sinh
                            </a>
                        </li>
                        @elseif($value->id == 5)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}"><i class='fas fa-dog'></i> Thú cưng</a>
                        </li>
                        @elseif($value->id == 6)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-hamburger'></i> Đồ ăn, thực phẩm và loại khác
                            </a>
                        </li>
                        @elseif($value->id == 7)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-subway'></i> Tủ lạnh, máy lạnh, máy giặt
                            </a>
                        </li>
                        @elseif($value->id == 8)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-couch'></i> Đồ gia dụng, nội thất, cây cảnh
                            </a>
                        </li>
                        @elseif($value->id == 9)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-tshirt'></i> Thời trang, đồ dùng cá nhân
                            </a>
                        </li>
                        @elseif($value->id == 10)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích
                            </a>
                        </li>
                        @elseif($value->id == 11)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-book'></i> Đồ văn phòng, công nông nghiệp
                            </a>
                        </li>
                        @elseif($value->id == 12)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-phone-volume'></i> Dịch vụ, du lịch
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class='fas fa-baby'></i> Mẹ và bé
                            </a>
                        </li>
                        @endif
                        @endforeach


                    </ul>
                </div>
            </div>
            <!-- card-desktop -->

            <!-- card-moblie -->
            <div class="card moblie">
                <div class="card-header" style="background-color:#dd3420;padding:5px;border:none;">
                    <b style="color:white;">DANH MỤC</b>
                </div>
                <div class="card-body text-center" style="padding:15px;padding-top:5px;">
                    <div class="row">
                        <!-- ========================== -->
                        @foreach ($show_category as $key => $value)
                        @if($value->id == 1)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-home" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Bất động sản</div>
                            </a>
                        </div>
                        @elseif($value->id == 2)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-motorcycle" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Xe cộ</div>
                            </a>
                        </div>
                        @elseif($value->id == 3)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-plug" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ điện tử</div>
                            </a>
                        </div>
                        <!-- ========================== -->
                        @elseif($value->id == 4)
                        <!-- ========================== -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-business-time" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Việc làm</div>
                            </a>
                        </div>
                        @elseif($value->id == 5)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-dog" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thú cưng</div>
                            </a>
                        </div>
                        @elseif($value->id == 6)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-hamburger" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ ăn, thực phẩm</div>
                            </a>
                        </div>
                        <!-- ========================== -->
                        @elseif($value->id == 7)
                        <!-- ========================== -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-crosshairs" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Tủ lạnh, máy lạnh, máy giặt</div>
                            </a>
                        </div>
                        @elseif($value->id == 8)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-baby" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Mẹ và bé</div>
                            </a>
                        </div>
                        @elseif($value->id == 9)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-couch" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ gia dụng, nội thất, cây cảnh</div>
                            </a>
                        </div>
                        <!-- ========================== -->
                        @elseif($value->id == 10)
                        <!-- ========================== -->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-tshirt" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thời trang, đồ dùng, cá nhân</div>
                            </a>
                        </div>
                        @elseif($value->id == 11)
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-swimmer" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Giải trí, thể thao, sở thích</div>
                            </a>
                        </div>
                        @else
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                            <a href="{{ url('danh-muc/'.Str::slug($value->category_name).'/'.$value->id) }}">
                                <i class="fas fa-tractor" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ văn phòng, công nông nghiệp</div>
                            </a>
                        </div>
                        <!-- ========================== -->
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- card-moblie -->
        </div>

        <div class="col-sm-9">
            <!-- news -->
            <div class="container" style="padding:1px;">
                @foreach ($new as $item)
                <div class="card" style="margin-bottom:10px;">
                    <img src="{{ url('public/upload/image_new/'.$item->image) }}" class="responsive" width="900" height="400">
                    <div class="card-body">
                        <h2 class="card-title">
                            <b>
                                <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}">
                                    {{ $item->title }}
                                </a>
                            </b>
                        </h2>
                        <b class="card-text" style="text-transform:lowercase;text-align:justify;font-size:18px;">
                            {!! Str::limit($item->content,130,'...') !!}
                        </b>
                        <br>
                        <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}" class="btn btn-warning btn-sm">
                            - - Xem chi tiết - -
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- news -->

            <!-- option -->
            <div class="card" style="margin-bottom:10px;">
                <div class="card-body" style="padding:5px;">
                    <div class="d-flex">
                        <div class="p-1 flex-fill">
                            <a href="{{ url('page-payment-method') }}" class="btn btn-danger text-white">
                                <i class="fas fa-money-check-alt"></i> Nạp tiền nâng cấp bản tin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- option -->


            <!-- carousel -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach( $banner as $photo )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <div class="carousel-inner" role="listbox">
                    @foreach( $banner as $photo )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ url('public/upload/banner/'.$photo->image) }}" alt="">
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

        </div>
    </div>
</div>

@endsection
<!-- ==================================================== -->
