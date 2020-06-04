<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="public/logo/logo-title.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- fonts.googleapis -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300&display=swap" rel="stylesheet">

    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- fontawesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- select -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- select -->
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
                <a class="navbar-toggler bg-warning" type="button" data-toggle="collapse"
                    style="border:none;color:white;">
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
    @yield('content')
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
                        CÔNG TY TNHH RAOVAT - Địa chỉ: Phòng 20, Tầng 18, Mê Linh Point Tower, 02 Ngô Đức Kế, Phường Bến
                        Nghé, Quận 12, TP Hồ Chí Minh <br> Giấy chứng nhận đăng ký doanh nghiệp số 01234678 do Sở Kế
                        Hoạch và Đầu Tư TPHCM cấp ngày 20/3/2020
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