@extends('layout.layout_home')
@section('title', 'Trang chủ')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

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
            <div class="container" style="padding:1px;">
                <!-- news -->
                @foreach ($new as $item)
                    <div class="card" style="margin-bottom:10px;">
                        <img src="{{ url('public/upload/image_new/'.$item->image) }}" class="img-fluid" style="border-radius:5px; max-height: 400px;">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}">{{ $item->title }}</a>
                            </h4>
                            <b class="card-text">
                                {!! Str::limit($item->content,350,'...') !!}
                            </b>
                            <br>
                            <a href="{{ route('view_news_detail', [Str::slug($item->title),$item->id]) }}" class="btn btn-warning btn-sm">Xem chi tiết</a>

                        </div>
                    </div>
                @endforeach
                <!-- news -->

                <!-- option -->
                <div class="card" style="margin-bottom:10px;">
                    <div class="card-body" style="padding:5px;">
                        <div class="d-flex">
                            <div class="p-1 flex-fill">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-money-check-alt"></i> Nạp tiền
                                </button>
                            </div>
                            <div class="p-1 flex-fill">
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-search"></i> Tìm kiếm chọn lọc
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- option -->


                <!-- carousel -->
                <div id="demo" class="carousel slide" data-ride="carousel" style="border-radius:5px;">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner" style="border-radius:5px;">

                        @foreach ($banner as $key => $value)
                            @if($key == 0)
                                <div class="carousel-item active">
                                    ​<img src="{{ url('public/upload/banner/'.$value->image) }}" class="img-fluid" 
                                        style="width: 100%; height: 300px;">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{ url('public/upload/banner/'.$value->image) }}" class="img-fluid" 
                                        style="width: 100%; height: 300px;">
                                </div>
                            @endif
                            
                        @endforeach

                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev" style="color:red;">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next" style="color:red;">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <!-- carousel -->
            </div>
        </div>
    </div>
</div>

@endsection
<!-- ==================================================== -->
