@extends('layout.layout_home')
@section('title', 'Xem danh mục')
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

            <div class="col-3 col-sm-3 col-md-3 col-lg-3" style="padding-left:1px;padding-right:1px;">
              <select class="selectpicker form-control" data-live-search="true" data-show-content="true">
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
                <option data-content="<i class='fas fa-hamburger'></i> Đồ ăn, thực phẩm và các loại khác">
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

                <option data-content="<i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích">
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
      <ul class="breadcrumb breadcrumb-mobile">
        <li class="breadcrumb-item">
          <a href="#" style="text-decoration:none;color:red;">Xe cộ</a>
        </li>
        <li class="breadcrumb-item active">Ô tô</li>
      </ul>
      <!-- breadcrumb -->

      <!-- new-detail -->
      <div class="card" style="margin-bottom:10px;">
        <div class="card-body" style="padding:5px;">
          <div class="row">
            <!-- col-8 -->
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-right">
              <!-- carousel -->
              <div id="demo" class="carousel slide" data-ride="carousel" style="border-radius:5px;">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner" style="border-radius:5px;">
                  <div class="carousel-item active">
                    ​<img src="public/images/car-1.jpg" class="img-fluid">
                  </div>
                  <div class="carousel-item">
                    <img src="public/images/car-2.jpg" class="img-fluid">
                  </div>
                  <div class="carousel-item">
                    <img src="public/images/car-3.jpg" class="img-fluid">
                  </div>
                  <div class="carousel-item">
                    <img src="public/images/car-4.jpg" class="img-fluid">
                  </div>
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

              <div class="text-left" style="margin:10px;">
                <h4 style="font-weight:bold;">
                  Volkswagen Polo Hb TẶNG 50% PHÍ TRƯỚC BẠ, TRẢ GÓP 0% 1 NĂM
                </h4>

                <div class="clearfix">
                  <span class="float-left">
                    <h5>
                      Giá: <b style="color:orange;">695,000,000 đ</b>
                    </h5>
                  </span>
                  <span class="float-right">
                    <a href="" class="btn btn-outline-danger">
                      Lưu tin <i class="far fa-heart"></i>
                    </a>
                  </span>
                </div>

                <p>
                  <i class="far fa-clock" style="color:orange;"></i>
                  <b>2/6/2020</b>
                  &emsp;
                  <i class="fas fa-eye" style="color:orange;"></i>
                  <b>123</b>
                  &emsp;
                  <i class="fas fa-map-marker-alt" style="color:orange;"></i>
                  <b>Hồ Chí Minh - Quận 12</b>
                </p>

                <div class="media p-3 user-icon">
                  <img src="{{ url('public/logo/icon-user.png') }}" class="mr-3 mt-3 rounded-circle"
                    style="max-width:100%;height:80px;">
                  <div class="media-body">
                    <h4>Thảo Volkswagen <br> <b>0936655612</b></h4>
                    <a class="btn btn-outline-warning btn-sm" href="{{ url('profile-user') }}" role="button">
                      Xem trang <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>

              <hr style="margin:10px;">

              <p style="text-align:justify-all;text-align:left;margin:10px;">
                Polo Hatchback – đơn giản nhưng không kém phần độc đáo. <br>
                ???? Bản thân Polo, một chiếc hatchback vốn rất độc đáo và luôn thu hút người bởi thiết kế 5
                cửa
                nhỏ gọn của mình. <br>
                - Tuy nhiên, Polo còn có nhiều chi tiết độc đáo, thú vị và cũng không kém phần cao cấp khác
                bên cạnh vẻ đơn giản, thực dụng của mình như: <br>
                - Camera lùi thiết kế ẩn sau logo ở phần đuôi xe. <br>
                - Ghế nội thất bọc da cao cấp. <br>
                - Ghế ngồi thiết kế khoa học, ôm sát cơ thể người lái.<br>
                - Polo không chỉ là một chiếc xe đơn giản mà còn được trang bị rất nhiều tiện ích, tính năng, chi
                tiết
                độc đáo, giúp hỗ trợ tối đa cho người lái.<br>
                Một chiếc xe nhỏ gọn rất đáng để sở hữu!
              </p>

              <div class="row list-info" style="margin:10px;">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="far fa-flag"></i> Hãng: LandRover
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="fas fa-tag"></i> Dòng xe: Range Rover Evoque
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="far fa-calendar-alt"></i> Năm đăng ký: 2003
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="fas fa-tachometer-alt"></i> Số Km đã đi: 123456
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="far fa-question-circle"></i> Tình trạng: Đã sử dụng
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-left" style="margin-bottom:10px;">
                  <i class="fas fa-crosshairs"></i> Loại xe: Xe số
                </div>
              </div>

              <hr style="margin:10px;">


              <!-- =================== -->
              <div class="social">
                <h5 style="margin:10px;text-align:left;color:gray;">
                  <b>Chia sẻ tin đăng này cho bạn bè:</b>
                </h5>
                <div class="text-left" style="margin:10px;">
                  ​<a href="">
                    <img src="public/icons/facebook.png" class="img-social">
                  </a>
                  <a href="">
                    ​<img src="public/icons/Messenger.png" class="img-social">
                  </a>
                  <a href="">
                    ​ <img src="public/icons/zalo.png" class="img-social">
                  </a>
                </div>
              </div>
              <!-- =================== -->


              <!-- =================== -->
              <div class="media p-2 user-icon">
                <img src="{{ url('public/logo/security.png') }}" class="mr-2 mt-2 rounded-circle"
                  style="max-width:100%;height:60px;">
                <div class="media-body text-left">
                  <h5>Mã bản tin <b>58282327</b> này đã được duyệt đăng.</h5>
                  <p>
                    Nếu bạn gặp vấn đề, vui lòng báo vi phạm. &emsp;
                    <a class="btn btn-outline-danger btn-sm" href="{{ url('report-new') }}" role="button">Báo vi
                      phạm</a>
                  </p>
                </div>
              </div>
              <!-- =================== -->

            </div>
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

                  <a href="" style="text-decoration:none;color:#ff3333;">
                    <div class="media">
                      <img src="{{ url('public/images/car-1.jpg') }}" class="align-self-start mr-3"
                        style="width:90px;height:60px;border-radius:5px;">
                      <div class="media-body">
                        <b>Xe Kia Morning 2020 - thời trang -hiện đại</b>
                        <p class="p-text">
                          <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh / Quận 12 <br>
                          <i class="far fa-clock"></i> 30p trước
                        </p>
                      </div>
                    </div>
                  </a>

                  <a href="" style="text-decoration:none;color:#ff3333;">
                    <div class="media">
                      <img src="{{ url('public/images/car-1.jpg') }}" class="align-self-start mr-3"
                        style="width:90px;height:60px;border-radius:5px;">
                      <div class="media-body">
                        <b>Xe Kia Morning 2020 - thời trang -hiện đại</b>
                        <p class="p-text">
                          <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh / Quận 12 <br>
                          <i class="far fa-clock"></i> 30p trước
                        </p>
                      </div>
                    </div>
                  </a>

                  <a href="" style="text-decoration:none;color:#ff3333;">
                    <div class="media">
                      <img src="{{ url('public/images/car-2.jpg') }}" class="align-self-start mr-3"
                        style="width:90px;height:60px;border-radius:5px;">
                      <div class="media-body">
                        <b>Xe Kia Morning 2020 - thời trang -hiện đại</b>
                        <p class="p-text">
                          <i class="fas fa-map-marker-alt"></i> Hồ Chí Minh / Quận 12 <br>
                          <i class="far fa-clock"></i> 30p trước
                        </p>
                      </div>
                    </div>
                  </a>

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
<!-- ==================================================== -->