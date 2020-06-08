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
    <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">

    <!-- fontawesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>

    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/style_post_new.css') }}">

</head>

<body style="font-family: 'Muli', sans-serif;background-color:#f1f1f1;">

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-mobile" style="background-color:#dd3420;">
        <a class="navbar-brand" href="{{ url('/') }}" style="padding:0px;">
            ​<img src="{{ url('public/logo/transparent-text.png') }}" class="image-logo">
        </a>

        <div class="clearfix">
            <span class="float-right">
                <a class="navbar-toggler bg-warning button-post-new" style="border:none;color:white;" href="{{ url('post-new-category') }}">
                    <i class="fas fa-edit" style="font-size:15px;"></i> Đăng tin
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleForm" style="border:none;" id="button-user-search">
                    <i class="fas fa-search" style="color:white;font-size:15px;"></i>
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleDropdown" style="border:none;" id="button-user">
                    <i class="fas fa-user" style="color:white;font-size:15px;"></i>
                    <!-- Nếu chưa đăng nhập thì hiện icon login -->
                </button>
            </span>
        </div>

        {{-- collapsibleDropdowns --}}
        <div class="collapse navbar-collapse" id="collapsibleDropdown" style="padding-top:15px;">
            <ul class="list-group list-group-flush" id="collapDropdown">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
        {{-- collapsibleDropdowns --}} {{-- collapsibleForm --}}
        <div class="collapse navbar-collapse" id="collapsibleForm">
            <form class="form-inline ml-auto form-reponsive" id="collapForm">
                <input type="text" class="form-control mr-sm-5 input-search" placeholder="Tìm kiếm trên Raovat">
            </form>
        </div>
        {{-- collapsibleForm --}}


        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- Search form -->
            <form class="form-inline ml-auto form-search">
                <input type="text" class="form-control mr-sm-5" placeholder="Tìm kiếm trên Raovat" style="width:500px;border:none;">
            </form>

            <ul class="nav justify-content-end register-login">

                {{-- <li class="nav-item" style="margin-right:5px;">
                    <div class="dropdown">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 2px solid orange;border-radius:10px;">
                            <i class="far fa-smile-beam"></i> Tôi bán
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <span><i class="fas fa-edit" style="font-size:16px;"></i></span>
                                &ensp;Đăng tin rao bán
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><i class="far fa-file-alt" style="font-size:16px;"></i></span>
                                &ensp;Quản lý tin
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><i class="fas fa-dollar-sign" style="font-size:16px;"></i></span>
                                &ensp;Nạp tiền vào tài khoản
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><i class="far fa-flag" style="font-size:16px;"></i></span>
                                &ensp;Bản tin đã lưu
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><i class="fas fa-user" style="font-size:16px;"></i></span>
                                &ensp;Thông tin tài khoản
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><i class="fas fa-key" style="font-size:16px;"></i></span>
                                &ensp;Đổi mật khẩu
                            </a>
                        </div>
                    </div>
                </li>  --}}
                <li class="nav-item" style="margin-right:5px;">
                    <a class="btn btn-warning" href="{{ url('page-login') }}" role="button">
                        <i class="fas fa-sign-in-alt"></i> Đăng nhập
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning" href="{{ url('post-new-category') }}" role="button">
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
                        <li class="list-inline-item"><a href=""><i class="fab fa-facebook"></i></a></li>

                        <li class="list-inline-item"><a href=""><i class="fab fa-google-plus"></i></a></li>

                        <li class="list-inline-item">
                            <a href="" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
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
                <div class="col-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                    <p>
                        CÔNG TY TNHH RAOVAT - Địa chỉ: Phòng 20, Tầng 18, Mê Linh Point Tower, 02 Ngô Đức Kế, Phường Bến Nghé, Quận 12, TP Hồ Chí Minh <br> Giấy chứng nhận đăng ký doanh nghiệp số 01234678 do Sở Kế Hoạch và Đầu Tư TPHCM cấp ngày 20/3/2020
                        <br> Email: trogiup@raovat.vn - Đường dây nóng: (028)12364589
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->

    <script>
        $(document).ready(function() {
            $("#button-user").click(function() {
                $("#collapForm").hide();
                $("#collapDropdown").show();
            });

            $("#button-user-search").click(function() {
                $("#collapDropdown").hide();
                $("#collapForm").show();
            });
        });

    </script>


</body>

</html>
