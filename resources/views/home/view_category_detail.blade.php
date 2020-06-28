@extends('layout.layout_home')
@section('title', 'Xem bài đăng')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<div class="container" style="padding-top:15px;margin-top:60px;padding:5px;">
    <div class="row">
        <div class="col-sm-12">
            <!-- search -->
            <div class="card search-quick" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    <b><i class='fas fa-search' style="font-size:18px;"></i>&ensp;Tìm kiếm nhanh</b>
                </div>
                <div class="card-body" style="padding:5px;">
                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-2 col-lg-2" style="padding-right:1px;">
                            <select id="state" class="form-control selectpicker" data-live-search="true">
                                <option>Chọn Tỉnh/TP</option>
                                @foreach ($province as $item_province)
                                <option value="{{ $item_province->province_name }}">{{ $item_province->province_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 district" style="padding-left:1px;">
                            <select id="city" class="form-control">
                                @foreach ($province as $item_province)
                                @php
                                $district_id = DB::table('districts')->where('province_id',
                                $item_province->id)->get();
                                @endphp

                                @foreach ($district_id as $item_district)
                                <option value="{{ $item_district->district_name }}">
                                    {{ $item_province->province_name }}-{{ $item_district->district_name }}
                                </option>
                                @endforeach

                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 category" style="padding-left:1px;padding-right:1px;">
                            <select class="selectpicker form-control" data-live-search="true" data-show-content="true" style="z-index:5;">
                                <option data-content="<i class='far fa-list-alt'></i> Tất cả danh mục">
                                    Tất cả danh mục
                                </option>

                                @foreach ($allCategory as $item_category)
                                @if($item_category->id == 1)
                                <option data-content="<i class='fas fa-home'></i> Bất động sản" value="{{ $item_category->id }}">
                                    Bất động sản
                                </option>
                                @elseif($item_category->id == 2)
                                <option data-content="<i class='fas fa-car'></i> Xe cộ">
                                    Xe cộ
                                </option>
                                @elseif($item_category->id == 3)
                                <option data-content="<i class='fas fa-mobile-alt'></i> Đồ điện tử">
                                    Đồ điện tử
                                </option>
                                @elseif($item_category->id == 4)
                                <option data-content="<i class='fas fa-business-time'></i> Việc làm">
                                    Việc làm, tuyển sinh
                                </option>
                                @elseif($item_category->id == 5)
                                <option data-content="<i class='fas fa-dog'></i> Thú cưng">
                                    Thú cưng
                                </option>
                                @elseif($item_category->id == 6)
                                <option data-content="<i class='fas fa-hamburger'>
                                                </i> Đồ ăn, thực phẩm và các loại khác">
                                    Đồ ăn, thực phẩm và các loại khác
                                </option>
                                @elseif($item_category->id == 7)
                                <option data-content="<i class='fas fa-subway'></i> Tủ lạnh, máy lạnh, máy giặt">
                                    Tủ lạnh, máy lạnh, máy giặt
                                </option>
                                @elseif($item_category->id == 8)
                                <option data-content="<i class='fas fa-couch'></i> Đồ gia dụng, nội thất, cây cảnh">
                                    Đồ gia dụng, nội thất, cây cảnh
                                </option>
                                @elseif($item_category->id == 9)
                                <option data-content="<i class='fas fa-tshirt'></i> Thời trang, đồ dùng cá nhân">
                                    Thời trang, đồ dùng cá nhân
                                </option>
                                @elseif($item_category->id == 10)
                                <option data-content="<i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích">
                                    Giải trí, thể thao, sở thích
                                </option>
                                @elseif($item_category->id == 11)
                                <option data-content="<i class='fas fa-book'></i> Đồ văn phòng, công nông nghiệp">
                                    Đồ văn phòng, công nông nghiệp
                                </option>
                                @elseif($item_category->id == 12)
                                <option data-content="<i class='fas fa-phone-volume'></i> Dịch vụ, du lịch">
                                    Dịch vụ, du lịch
                                </option>
                                @else
                                <option data-content="<i class='fas fa-baby'></i> Mẹ và bé">
                                    Mẹ và bé
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:1px;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm ...">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- search -->

            <!-- breadcrumb -->
            <ul class="breadcrumb breadcrumb-mobile" style="background-color:white;">
                <li class="breadcrumb-item">
                    @foreach ($category as $item_category)
                    <a href="{{ url('danh-muc/'.$item_category->category_name.'/'.$item_category->id) }}" style="text-decoration:none;color:red;">{{ $item_category->category_name }}</a>
                    @endforeach
                </li>
                @foreach ($category_first as $item_category_first)
                <li class="breadcrumb-item active">{{ $item_category_first->category_child_name }}</li>
                @endforeach
            </ul>
            <!-- breadcrumb -->

            <!-- new-detail -->
            <div class="card" style="margin-bottom:10px;">
                <div class="card-body" style="padding:5px;">
                    <style>
                        .carousel-inner img {
                            height: 400px;
                            width: 100%;
                        }

                        @media screen and (max-width: 600px) {
                            .carousel-inner img {
                                height: 200px;
                                width: 100%;
                            }
                        }

                    </style>
                    <div class="row">
                        <!-- col-8 -->
                        @foreach ($postNew as $item_postNew)
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-right">

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @php
                                    $image_decode = (array)json_decode($item_postNew->images,true)
                                    @endphp

                                    @foreach( $image_decode as $photo )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    @foreach( $image_decode as $photo )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="d-block img-fluid" src="{{ url('public/upload_images_post_new/'.$photo) }}" alt="">
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

                            <div class="text-left" style="margin:10px;">
                                <h4 style="font-weight:bold;">
                                    {{ $item_postNew->title }}
                                </h4>

                                <div class="clearfix">
                                    <span class="float-left">
                                        <h5>
                                            Giá: <b style="color:orange;">{{ number_format($item_postNew->price) }}
                                                {{ $item_postNew->currency }}</b>
                                        </h5>
                                    </span>

                                    <style>
                                        #dontSave {
                                            color: red;
                                        }

                                        #dontSave:hover {
                                            color: white;
                                        }

                                        #save {
                                            color: white;
                                        }

                                    </style>
                                    @if ($item_postNew->save_post == 0)
                                    <span class="float-right">
                                        <a class="btn btn-outline-danger" id="dontSave" href="{{ url('save-post-new/'.$item_postNew->id.'/'.$item_postNew->save_post) }}" role="button" title="lưu tin">
                                            Lưu tin <i class="far fa-heart"></i>
                                        </a>
                                    </span>
                                    @else
                                    <span class="float-right">
                                        <a class="btn btn-danger" id="save" href="{{ url('save-post-new/'.$item_postNew->id.'/'.$item_postNew->save_post) }}" role="button" title="Bỏ lưu tin">
                                            Lưu tin <i class="far fa-heart"></i>
                                        </a>
                                    </span>
                                    @endif

                                </div>

                                <p>
                                    <i class="far fa-clock" style="color:orange;"></i>
                                    <b>{{ date("d/m/Y", strtotime($item_postNew->updated_at)) }}</b>
                                    &emsp;
                                    <i class="fas fa-map-marker-alt" style="color:orange;"></i>
                                    <b>
                                        @php
                                        $province = DB::table('provinces')->where('id',
                                        $item_postNew->province_id)->get();
                                        $district = DB::table('districts')->where('id',
                                        $item_postNew->district_id)->get();
                                        @endphp
                                        @foreach ($province as $item_province)
                                        <span><strong>{{ $item_province->province_name }}
                                                @endforeach
                                                @foreach ($district as $item_district)
                                                - {{ $item_district->district_name }}</strong></span>
                                        @endforeach
                                    </b>
                                </p>

                                <div class="media p-3 user-icon">
                                    <img src="{{ url('public/logo/icon-user.png') }}" class="mr-3 mt-3 rounded-circle" style="max-width:100%;height:70px;">
                                    <div class="media-body">
                                        @php
                                        $user = DB::table('users')->where('id', $item_postNew->user_id)->get();
                                        @endphp
                                        @foreach ($user as $item_user)
                                        <h4>{{ $item_user->username }} <br> <b>{{ $item_user->phone }}</b></h4>
                                        <a class="btn btn-outline-warning btn-sm" href="{{ url('profile-user') }}" role="button">
                                            Xem trang <i class="fas fa-chevron-right"></i>
                                        </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <hr style="margin:10px;">

                            <p style="text-align:justify-all;text-align:left;margin:10px;">
                                {!! $item_postNew->content !!}
                            </p>

                            <hr style="margin:10px;">

                            <!-- =================== -->
                            <div class="social">
                                <h5 style="margin:10px;text-align:left;color:gray;">
                                    <b>Chia sẻ tin đăng này cho bạn bè:</b>
                                </h5>
                                <div class="text-left" style="margin:10px;">
                                    ​<a href="">
                                        <img src="{{ url('public/icons/facebook.png') }}" class="img-social">
                                    </a>
                                    <a href="">
                                        ​<img src="{{ url('public/icons/Messenger.png') }}" class="img-social">
                                    </a>
                                    <a href="">
                                        ​ <img src="{{ url('public/icons/zalo.png') }}" class="img-social">
                                    </a>
                                </div>
                            </div>
                            <!-- =================== -->


                            <!-- =================== -->
                            <div class="media p-2 user-icon">
                                <img src="{{ url('public/logo/security.png') }}" class="mr-2 mt-2 rounded-circle" style="max-width:100%;height:60px;">
                                <div class="media-body text-left">
                                    <h5>Mã bản tin <b>{{ $random }} </b> này đã được duyệt đăng.</h5>
                                    <p>
                                        Nếu bạn gặp vấn đề, vui lòng báo vi phạm. &emsp;
                                        <a class="btn btn-outline-danger btn-sm" href="{{ url('report-new/'.$item_postNew->id.'/'.$random) }}" role="button">Báo vi phạm</a>
                                    </p>
                                </div>
                            </div>
                            <!-- =================== -->

                        </div>
                        @endforeach
                        <!-- col-8 -->

                        <!-- col-4 -->
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
                            <div class="card post-new" style="margin-bottom:10px;">
                                <div class="card-header" style="background-color:white;padding:5px;">
                                    <b class="b-text">
                                        <i class="far fa-newspaper"></i>
                                        Tin rao bán tương tự
                                    </b>
                                </div>
                                <div class="card-body" style="padding:5px;">

                                    @foreach ($likePostNew as $item_likePostNew)
                                    <a href="" style="text-decoration:none;color:#ff3333;">
                                        <div class="media">
                                            @php
                                            $image_decode = (array)json_decode($item_likePostNew->images,true)
                                            @endphp
                                            @foreach ($image_decode as $picture)
                                            @if ($loop->first)
                                            <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="img-fluid mr-3 image-post-new" style="width: 100px;">
                                            @endif
                                            @endforeach
                                            <div class="media-body">
                                                <b style="font-size: 12px;">{{ $item_likePostNew->title }}</b>
                                                <p class="p-text">
                                                    @php
                                                    $province = DB::table('provinces')->where('id',
                                                    $item_likePostNew->province_id)->get();
                                                    $district = DB::table('districts')->where('id',
                                                    $item_likePostNew->district_id)->get();
                                                    @endphp
                                                    @foreach ($province as $item_province)
                                                    <i class="fas fa-map-marker-alt"></i><strong>
                                                        {{ $item_province->province_name }}
                                                        @endforeach
                                                        @foreach ($district as $item_district)
                                                        - {{ $item_district->district_name }}</strong><br>
                                                    @endforeach

                                                    <i class="far fa-clock"></i>
                                                    {{ date("d/m/Y", strtotime($item_likePostNew->created_at)) }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- col-4 -->
                    </div>
                    <!-- row -->
                </div>
            </div>
        </div>
        <!-- post-new -->

    </div>
</div>

@endsection

@section('link_js')
<script>
    $(function() {
        var showCity = function(selectedState) {
            $('#city option').hide();
            $('#city').find('option').filter(function() {
                var city = $(this).text();
                return city.indexOf(selectedState) != -1;
            }).show();
            //set default value
            var defaultCity = $('#city option:visible:first').text();
            $('#city').val(defaultCity);
        };

        //set default state
        var state = $('#state').val();
        showCity(state);
        $('#state').change(function() {
            showCity($(this).val());
        });
    });

</script>
@endsection
<!-- ==================================================== -->
