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


    <!-- fontawesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- fontawesome 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts.googleapis -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


    <!-- select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- select -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>

    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/style_post_new.css') }}">

    <style type="text/css" media="screen">
        .register-login .nav-item .link-image {
            text-decoration: none;
            margin-right: 10px;
        }

        .register-login .nav-item .link-image img {
            max-width: 100%;
            height: 40px;
            border-radius: 50%;
        }

    </style>

</head>

<body style="font-family: 'Muli', sans-serif;background-color:#f1f1f1;">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-mobile" style="background-color:#dd3420;">
        <a class="navbar-brand" href="{{ url('/') }}" style="padding:0px;">
            ​<img src="{{ url('public/logo/transparent-text.png') }}" class="image-logo">
        </a>

        <div class="clearfix">
            <span class="float-right">
                <a class="navbar-toggler bg-warning button-post-new" style="border:none;color:white;" href="{{ url('post-new-category') }}">
                    <i class="fas fa-edit" style="font-size:15px;"></i> Đăng tin
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleForm" style="border:none;">
                    <i class="fas fa-search" style="color:white;font-size:15px;"></i>
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border:none;">
                    <i class="fas fa-user" style="color:white;font-size:15px;"></i>
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
                <input type="text" class="form-control mr-sm-5" placeholder="Tìm kiếm trên Raovat" style="width:500px;border:none;">
            </form>

            <ul class="nav justify-content-end register-login">
                @if(Auth::check())
                <li class="nav-item" style="margin-right:5px;">
                    <a href="{{ url('page-manage-news') }}" class="link-image">
                        @if(Auth::user()->avatar != NULL)
                        <img src="{{ Auth::user()->avatar }}"> ​
                        @else
                        <img src="{{ url('public/logo/user/user-icon-edit.png') }}">
                        @endif
                        <span style="color:white;">{{ Auth::user()->username }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning" href="{{ url('post-new-category') }}" role="button">
                        <b style="color:white;"><i class="fas fa-edit"></i> ĐĂNG TIN</b>
                    </a>
                </li>
                @else
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
                @endif
            </ul>
        </div>
    </nav>
    <!-- navbar -->

    <!-- content -->
    @yield('content')
    <!-- content -->


    <!-- Footer -->
    <br><br><br>
    <br><br><br>
    <section id="footer">
        <div class="container">
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
