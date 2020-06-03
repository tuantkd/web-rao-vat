@extends('layout.layout_home') @section('title', 'Xem danh mục')
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

                        <div class="col-2 col-sm-2 col-md-2 col-lg-2" style="padding-right:1px;">
                            <select class="selectpicker form-control" data-live-search="true">
                                <option data-tokens="Toàn quốc">Toàn quốc</option>
                                <option value="">Hồ Chí Minh</option>
                                <option value="">Hà Nội</option>
                            </select>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3" style="padding-left:1px;">
                            <select class="selectpicker form-control" data-live-search="true">
                                <option data-tokens="Toàn quốc">Toàn quốc</option>
                                <option value="">Hồ Chí Minh</option>
                                <option value="">Hà Nội</option>
                            </select>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3" 
                        style="padding-left:1px;padding-right:1px;">
                            <select class="selectpicker form-control" data-live-search="true" data-show-content="true"
                                style="z-index:5;">
                                <option data-content="<i class='far fa-list-alt'></i> Tất cả danh mục">
                                    Tất cả danh mục
                                </option>
                                <option data-content="<i class='fas fa-home'></i> Bất động sản">
                                    Bất động sản
                                </option>
                                <option data-content="<i class='fas fa-car'></i> Xe cộ">
                                    Xe cộ
                                </option>
                                <option data-content="<i class='fas fa-mobile-alt'></i> Đồ điện tử">
                                    Đồ điện tử
                                </option>
                                <option data-content="<i class='fas fa-business-time'></i> Việc làm">
                                    Việc làm
                                </option>
                                <option data-content="<i class='fas fa-dog'></i> Thú cưng">
                                    Thú cưng
                                </option>
                                <option
                                    data-content="<i class='fas fa-hamburger'>
                                    </i> Đồ ăn, thực phẩm và các loại khác">
                                    Đồ ăn, thực phẩm và các loại khác
                                </option>
                                <option data-content="<i class='fas fa-subway'></i> Tủ lạnh, máy lạnh, máy giặt">
                                    Tủ lạnh, máy lạnh, máy giặt
                                </option>
                                <option data-content="<i class='fas fa-baby'></i> Mẹ và bé">
                                    Mẹ và bé
                                </option>
                                <option data-content="<i class='fas fa-couch'></i> Đồ gia dụng, nội thất, cây cảnh">
                                    Đồ gia dụng, nội thất, cây cảnh
                                </option>
                                <option data-content="<i class='fas fa-tshirt'></i> Thời trang, đồ dùng cá nhân">
                                    Thời trang, đồ dùng cá nhân
                                </option>

                                <option
                                    data-content="<i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích">
                                    Giải trí, thể thao, sở thích
                                </option>

                                <option data-content="<i class='fas fa-book'></i> Đồ văn phòng, công nông nghiệp">
                                    Đồ văn phòng, công nông nghiệp
                                </option>

                                <option data-content="<i class='fas fa-phone-volume'></i> Dịch vụ, du lịch">
                                    Dịch vụ, du lịch
                                </option>
                            </select>
                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding-left:1px;">
                            <div class="input-group">
                                <input type="text" class="form-control" 
                                placeholder="Nhập thông tin tìm kiếm ...">
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
                    <a href="#" style="text-decoration:none;color:red;">Xe cộ</a>
                </li>
                <li class="breadcrumb-item active">Tất cả mục phụ</li>
            </ul>
            <!-- breadcrumb -->

            <!-- category-child -->
            <div class="card category-mobile" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    <b><i class='fas fa-car' style="font-size:20px;"></i>&ensp;Xe cộ</b>
                </div>
                <div class="card-body" style="padding:10px;">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Ô tô</b></a> 10,123
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Xe tải</b></a>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Nội thất, đồ chơi Ô
                                    tô</b></a> 13,23
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Xe máy</b></a> 10,292
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Mũ bảo hiểm xe máy</b></a>
                            10,292
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Ô tô</b></a> 10,292
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Xem đạp điện</b></a> 10,292
                        </div>

                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <a href="" style="text-decoration:none;"><b style="color:red;">Danh mục khác</b></a> 10,292
                        </div>
                    </div>
                </div>
            </div>
            <!-- category-child -->


            <!-- post-new -->
            <div class="card post-new" style="margin-bottom:10px;z-index:2px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    <b class="b-text">
                        <i class="far fa-newspaper"></i>
                        Tin rao bán mới nhất
                    </b>
                </div>
                <div class="card-body" style="padding:5px;">
                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="{{ url('view-category-detail') }}" style="text-decoration:none;color:#ff3333;">
                                <div class="media p-0">
                                    <img src="public/images/car-1.jpg" class="align-self-start mr-3">
                                    <div class="media-body">
                                        <h4>Xe Kia Morning 2020 - thời trang -hiện đại</h4>
                                        <p class="p-text">
                                            <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh / Quận 12 <br>
                                            <i class="far fa-clock"></i> 30p trước
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="" style="text-decoration:none;color:#ff3333;">
                                <div class="media p-0">
                                    <img src="public/images/car-2.jpg" class="align-self-start mr-3"
                                        style="width:110px;height:80px;border-radius:5px;">
                                    <div class="media-body">
                                        <b>Xe Kia Morning 2020 - thời trang -hiện đại</b>
                                        <p style="color:black;font-size:12px;">
                                            <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh / Quận 12 <br>
                                            <i class="far fa-clock"></i> 30p trước
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <br>

                    <!-- pagination -->
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#"
                                style="background-color:red;color:white;border-color:red;">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">Next</a></li>
                    </ul>
                    <!-- pagination -->
                </div>
            </div>
            <!-- post-new -->

            <!-- post-new-with-category -->
            <div class="card post-new-category" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;text-align:center;">
                    <b class="b_text">
                        <i class="far fa-arrow-alt-circle-up arrow-up"></i>
                        ĐĂNG TIN THEO DANH MỤC
                    </b>
                </div>
                <div class="card-body text-center" style="padding:15px;padding-top:5px;">
                    <div class="row">
                        <!-- ========================== -->
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class="fas fa-home" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Bất động sản</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class="fas fa-motorcycle" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Xe cộ</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-business-time' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Việc làm</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-mobile-alt' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ điện tử</div>
                            </a>
                        </div>
                        <!-- ============================== -->

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-dog' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thú cưng</div>
                            </a>
                        </div>


                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-subway' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Tủ lạnh, máy lạnh, máy giặt</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-hamburger' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;"> Đồ ăn, thực phẩm và các loại khác</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-baby' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Mẹ và bé</div>
                            </a>
                        </div>
                        <!-- ========================== -->

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-couch' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ gia dụng, nội thất, cây cảnh</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-tshirt' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thời trang, đồ dùng cá nhân</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-volleyball-ball' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Giải trí, thể thao, sở thích</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-book' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ văn phòng, công nông nghiệp</div>
                            </a>
                        </div>

                        <div class="col-3 col-sm-3 col-md-3 col-lg-3"
                            style="padding:3px;margin-bottom:10px;margin-top:10px;">
                            <a href="">
                                <i class='fas fa-phone-volume' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Dịch vụ, du lịch</div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <!-- post-new-with-category -->


        </div>
    </div>
</div>

@endsection
<!-- ==================================================== -->