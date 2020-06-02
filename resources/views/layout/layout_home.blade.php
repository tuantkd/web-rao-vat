<!DOCTYPE html>
<html lang="en">

<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="public/logo/logo-title.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" 
  integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

  <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('public/css/style_post_new.css') }}">

</head>

<body style="font-family: 'Muli', sans-serif;background-color:#E2E4E5;">

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-mobile" style="background-color:#dd3420;">
      <a class="navbar-brand" href="#" style="padding:0px;">
        ​<img src="public/logo/transparent-text.png" class="image-logo">
      </a>

      <div class="clearfix">
        <span class="float-right">
          <a class="navbar-toggler bg-warning" type="button" data-toggle="collapse" style="border:none;color:white;">
            <i class="fas fa-edit" style="font-size:20px;"></i> Đăng tin
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleForm"
            style="border:none;">
            <i class="fas fa-search" style="color:white;font-size:20px;"></i>
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
            style="border:none;">
            <i class="fas fa-user" style="color:white;font-size:20px;"></i>
            <!-- Nếu chưa đăng nhập thì hiện icon login -->
          </button>
        </span>
      </div>

      <div class="collapse navbar-collapse in" id="collapsibleForm">
        <form class="form-inline ml-auto form-reponsive">
          <input type="text" class="form-control mr-sm-5 input-search" placeholder="Tìm kiếm trên Raovat">
        </form>
      </div>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <!-- Search form -->
        <form class="form-inline ml-auto form-search">
          <input type="text" class="form-control mr-sm-5" placeholder="Tìm kiếm trên Raovat"
            style="width:500px;border:none;">
        </form>

        <ul class="nav justify-content-end register-login">

          <li class="nav-item" style="margin-right:5px;">
            <a class="btn btn-warning" href="#" role="button">
              <i class="fas fa-sign-in-alt"></i> Đăng nhập
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-warning" href="#" role="button">
              <b style="color:white;"><i class="fas fa-edit"></i> ĐĂNG TIN</b>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar -->

    <!-- content -->
    <div class="container" style="padding-top:15px;margin-top:60px;padding:5px;">
      <div class="row">
        <div class="col-sm-3">

          <!-- card-desktop -->
          <div class="card desktop" style="border:1px solid #dd3420;margin-bottom:10px;">
            <div class="card-header" style="background-color:#dd3420;border:none;">
              <b style="color:white;">DANH MỤC</b>
            </div>
            <div class="card-body" style="padding:5px;padding-top:5px;">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="view_category.html">Xe cộ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Bất động sản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Đồ điện tử</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Giải trí, thể thao, sở thích</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Tủ lạnh, máy lạnh, máy giặt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Thời trang, đồ dùng, cá nhân</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">Đồ ăn, thực phẩm, các loại khác</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Nhà</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Phụ kiện</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- card-desktop -->

          <!-- card-moblie -->
          <div class="card moblie" style="border:1px solid #dd3420;margin-bottom:10px;">
            <div class="card-header" style="background-color:#dd3420;padding:5px;border:none;">
              <b style="color:white;">DANH MỤC</b>
            </div>
            <div class="card-body text-center" style="padding:15px;padding-top:5px;">
              <div class="row">
                <!-- ========================== -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-home" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Bất động sản</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-motorcycle" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Xe cộ</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-plug" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Đồ điện tử</div>
                  </a>
                </div>
                <!-- ========================== -->

                <!-- ========================== -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-business-time" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Việc làm</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-dog" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Thú cưng</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-hamburger" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Đồ ăn, thực phẩm</div>
                  </a>
                </div>
                <!-- ========================== -->

                <!-- ========================== -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-crosshairs" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Tủ lạnh, máy lạnh, máy giặt</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-baby" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Mẹ và bé</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-couch" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Đồ gia dụng, nội thất, cây cảnh</div>
                  </a>
                </div>
                <!-- ========================== -->

                <!-- ========================== -->
                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-tshirt" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Thời trang, đồ dùng, cá nhân</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-swimmer" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Giải trí, thể thao, sở thích</div>
                  </a>
                </div>

                <div class="col-4 col-sm-4 col-md-4 col-lg-4" style="padding:3px;">
                  <a href="">
                    <i class="fas fa-tractor" style="font-size:30px;color:red;"></i>
                    <div style="font-size:12px;color:red;">Đồ văn phòng, công nông nghiệp</div>
                  </a>
                </div>
                <!-- ========================== -->
              </div>
            </div>
          </div>
          <!-- card-moblie -->
        </div>

        <div class="col-sm-9">
          <div class="container" style="padding:1px;">
            <!-- news -->
            <div class="card" style="margin-bottom:10px;">
              <img src="public/images/banner_1.png" class="img-fluid" style="border-radius:5px;">
              <div class="card-body">
                <h3 class="card-title">
                  <b>Cách tính thuế thu nhập cá nhân khi bán hàng online</b>
                </h3>
                <p class="card-text">
                  Người bán hàng online phải nộp thuế thu nhập cá nhân nếu tổng doanh thu đạt mức theo quy định. Để biết
                  số thuế phải nộp là bao nhiêu hãy xem quy định về cách tính thuế thu nhập cá nhân khi bán hàng online
                </p>
                <a href="#" class="btn btn-warning btn-sm">Xem chi tiết ...</a>
              </div>
            </div>
            <!-- news -->

            <!-- option -->
            <div class="card" style="margin-bottom:10px;">
              <div class="card-body" style="padding:5px;">

                <div class="row">
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:5px;margin-top:5px;">
                    <button type="button" class="btn btn-danger">
                      <i class="fas fa-money-check-alt"></i> Nạp đồng xu
                    </button>
                  </div>

                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center" style="margin-bottom:5px;margin-top:5px;">
                    <button type="button" class="btn btn-danger">
                      <i class="fas fa-star"></i> Raovat ưu đãi
                    </button>
                  </div>

                  <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-right" style="margin-bottom:5px;margin-top:5px;">
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
                <div class="carousel-item active">
                  ​<img src="public/images/banner_1.png" class="img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="public/images/banner_2.png" class="img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="public/images/banner_3.png" class="img-fluid">
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

          </div>



        </div>
      </div>
    </div>
    <!-- content -->


    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4"></div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <ul class="list-unstyled list-inline social">
              <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item">
                <a href="" target="_blank">
                  <i class="fa fa-envelope"></i></a>
              </li>

              <li class="list-inline-item">
                <a href="" target="_blank">
                  <img src="public/images/tra_dang_ky.jpg" style="max-width:100%;height:70px;">
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4"></div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
            <p style="color: #E94B3C;font-size:14px;">
              CÔNG TY TNHH RAOVAT - Địa chỉ: Phòng 20, Tầng 18, Mê Linh Point Tower, 02 Ngô Đức Kế, Phường Bến Nghé,
              Quận 12, TP Hồ Chí Minh <br> Giấy chứng nhận đăng ký doanh nghiệp số 01234678 do Sở Kế Hoạch và Đầu Tư
              TPHCM cấp ngày 20/3/2020
              <br> Email: trogiup@raovat.vn - Đường dây nóng: (028)12364589
            </p>
          </div>
          <hr>
        </div>
      </div>
    </section>
    <!-- ./Footer -->

  </body>

</html>