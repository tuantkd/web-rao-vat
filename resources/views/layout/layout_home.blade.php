<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ url('public/logo/title-icon.png') }}">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

    {{-- paypal  --}}
    <script src="https://www.paypal.com/sdk/js?client-id=AXcExZnHLRwtPKY5dbGu-jZPm8gJpA0buQ77OuHWFFs-QxmPazecch-_MjN3hpN26B2rU8b2udWi7-VH&currency=USD" data-sdk-integration-source="button-factory"></script>



    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=298814801290514&autoLogAppEvents=1" nonce="TGaxrB8c"></script>

    {{-- zalo  --}}
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

    {{-- jquery-validate  --}}
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>


    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/style_post_new.css') }}">

    {{-- sweetalert2  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

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

        /*===============================*/
        #scroll {
            position: fixed;
            right: 25px;
            bottom: 25px;
            cursor: pointer;
            width: 40px;
            height: 40px;
            background-color: #3498db;
            text-indent: -9999px;
            display: none;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            border-radius: 60px
        }

        #scroll span {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -12px;
            height: 0;
            width: 0;
            border: 8px solid transparent;
            border-bottom-color: #ffffff;
        }

        #scroll:hover {
            background-color: #e74c3c;
            opacity: 1;
            filter: "alpha(opacity=100)";
            -ms-filter: "alpha(opacity=100)";
        }

    </style>

</head>

<body style="font-family: Verdana, sans-serif;background-color:#f1f1f1;">

    {{-- Mobile  --}}
    <style>
        /*FOOTER*/
        footer {
            background: gray;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            color: #ffdf00;
            margin-top: 20px;
        }

        footer a {
            color: #ffdf00;

            font-size: 14px;
            transition-duration: 0.2s;
        }

        footer a:hover {
            color: #FA944B;
            text-decoration: none;
        }

        .copy {
            font-size: 12px;
            padding: 10px;
            border-top: 1px solid white;

            ;
        }

        .footer-middle {
            padding-top: 2em;
            color: white;
        }


        /*SOCİAL İCONS*/

        /* footer social icons */

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0;
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }

        .footer-pad h5 strong {
            color: #ffdf00;
        }

        /* footer social icons */

        .social-network a.icoFacebook:hover {
            background-color: #3B5998;
        }

        .social-network a.icoLinkedin:hover {
            background-color: #007bb7;
        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoLinkedin:hover i {
            color: #fff;
        }

        .social-network a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD;
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            width: 30px;
            height: 30px;
            font-size: 15px;
        }

        .social-circle li i {
            margin: 0;
            line-height: 30px;
            text-align: center;
        }

        .social-circle li a:hover i,
        .triggeredHover {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }

        .social-circle i {
            color: #595959;
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            -ms-transition: all 0.8s;
            transition: all 0.8s;
        }

        .social-network a {
            background-color: #F9F9F9;
        }

        .navbar-mobile .navbar-brand .image-logo {
            max-width: 100%;
            height: 40px;
            padding: 1px;
        }

        #collapsibleNavbar .list-infor-account-user {
            display: none;
        }

        @media screen and (max-width: 600px) {
            #collapsibleNavbar .list-infor-account-user {
                display: inline-block;
            }

            .list-group-flush .list-group-item {
                padding-top: 5px;
                padding-bottom: 0px;
            }

            .list-group-flush .list-group-item .btn-link .d-flex {
                border-radius: 5px;
            }

            .list-group-flush .list-group-item .btn-link {
                text-decoration: none;
            }

            .list-group-flush .list-group-item .btn-link:hover {
                color: #e57373;
            }

            .footer-pad .list-unstyled li a {
                font-size: 12px;
            }

            .footer-pad h5 {
                font-size: 14px;
                font-weight: bold;
            }

            .col-md-3 h5 {
                font-size: 14px;
                font-weight: bold;
            }

            .navbar-mobile .navbar-brand .image-logo {
                max-width: 100%;
                height: 30px;
                padding: 1px;
            }
        }

        .nav-item .btn {
            border: 2px solid #ffdf00;
            color: #ffdf00;
            font-weight: bold;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .nav-item .btn:hover {
            color: gray;
            background-color: #ffdf00;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

    </style>
    {{-- Mobile  --}}


    <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-mobile" style="background-color:gray;color:#ffdf00;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);transition: all 0.3s cubic-bezier(.25,.8,.25,1);">
        <a class="navbar-brand" href="{{ url('/') }}" style="padding:0px;">
            ​<img src="{{ url('public/logo/cho24h.png') }}" class="image-logo">
        </a>

        {{-- Display mobile  --}}
        <div class="clearfix">
            <span class="float-right">
                <a class="navbar-toggler button-post-new pr-1 pl-2" style="border: 1px solid #ffdf00;
            color: #ffdf00;
            font-weight: bold;
            box-shadow: 0 1px 1px #ffdf00, 0 1px 1px #ffdf00;" href="{{ url('post-new-category') }}">
                    <i class="fas fa-edit" style="font-size:12px;"></i>
                    Đăng tin
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleForm" style="border:none;">
                    <i class="fas fa-search" style="color:#ffdf00;font-size:16px;"></i>
                </button>

                @if(Auth::check() )
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border:none;">
                    <i class="fas fa-user" style="color:#ffdf00;font-size:16px;"></i>
                </button>
                @else
                <a class="navbar-toggler" href="{{ url('page-login') }}" style="border:none;">
                    <i class="fa fa-sign-in" style="color:#ffdf00;font-size:18px;"></i>
                </a>
                @endif
            </span>
        </div>

        <div class="collapse navbar-collapse in" id="collapsibleForm">
            <form class="form-inline ml-auto form-reponsive" action="{{ url('search-quick-category') }}" method="GET">
                <input type="text" class="form-control mr-sm-5 input-search" placeholder="Tìm kiếm trên cho24h.net" name="input_search" style="border:2px solid #ffdf00;">
            </form>
        </div>


        <div class="collapse navbar-collapse in" id="collapsibleNavbar">
            <ul class="list-group list-group-flush mt-3 mr-0 p-1 list-infor-account-user">
                <li class="list-group-item" style="border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;">
                    <a class="btn-link" href="{{ url('post-new-category') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="fas fa-edit" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Đăng tin rao bán</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="btn-link" href="{{ url('page-all-news') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="far fa-file-alt" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Quản lý tin, nâng cấp tin</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="btn-link" href="{{ url('page-payment-method') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="fas fa-dollar-sign" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Nạp tiền vào tài khoản</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="btn-link" href="{{ url('page-news-save') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="far fa-flag" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Bản tin đã lưu</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="btn-link" href="{{ url('page-infor-account') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="fas fa-user" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Thông tin tài khoản</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="btn-link" href="{{ url('page-change-password') }}">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="fas fa-key" style="font-size:16px;"></i></div>
                            <div class="p-2" style="width:220px;">Đổi mật khẩu</div>
                        </div>
                    </a>
                </li>

                <li class="list-group-item" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-bottom:10px;">
                    <a class="btn-link" href="#" data-toggle="modal" data-target="#exampleModalLogout">
                        <div class="d-flex p-0 bg-secondary text-white">
                            <div class="p-2" style="width:22px;"><i class="fas fa-sign-out-alt" style="font-size:16px;color:red;"></i></div>
                            <div class="p-2" style="width:220px;">Đăng xuất</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        {{-- Display mobile  --}}


        {{-- Display desktop  --}}
        <div class="collapse navbar-collapse">
            <!-- Search form -->
            <form class="form-inline ml-auto form-search" action="{{ url('search-quick-category') }}" method="GET">
                <input type="text" class="form-control mr-sm-5" placeholder="Tìm kiếm trên cho24h.net" style="width:500px;border:2px solid #ffdf00;" name="input_search">
            </form>

            <ul class="nav justify-content-end register-login">
                @if(Auth::check())
                <li class="nav-item" style="margin-right:5px;">
                    <a href="{{ url('page-all-news') }}" class="link-image">

                        @if(Auth::user()->facebook_id != NULL)
                        <img src="{{ Auth::user()->avatar }}"> ​
                        @elseif(Auth::user()->google_id != NULL)
                        <img src="{{ Auth::user()->avatar }}">
                        @elseif(Auth::user()->avatar != NULL)
                        <img src="{{ url('public/upload_images_avatar/'.Auth::user()->avatar) }}">
                        @else
                        <img src="{{ url('public/logo/user/user-icon-edit.png') }}">
                        @endif
                        <span style="color:#ffdf00;">{{ Auth::user()->username }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="{{ url('post-new-category') }}" role="button">
                        <i class="fas fa-edit"></i> ĐĂNG TIN
                    </a>
                </li>
                @else
                <li class="nav-item" style="margin-right:5px;">
                    <a class="btn" href="{{ url('page-login') }}" role="button">
                        <i class="fas fa-sign-in-alt"></i> Đăng nhập
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="{{ url('page-login') }}" role="button">
                        <i class="fas fa-edit"></i> ĐĂNG TIN
                    </a>
                </li>
                @endif
            </ul>
        </div>
        {{-- Display desktop  --}}

    </nav>
    <!-- navbar -->



    <!-- content -->
    @yield('content')
    <!-- content -->


    <!-- Footer -->
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><strong>Liên hệ Chợ24h.net</strong></h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i class='fas fa-map-marker-alt' style="font-size:16px;"></i>
                                        Đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ.
                                    </a>
                                </li>
                                <li><a href="https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F"><i class="fa fa-phone-square" style="font-size:16px;"></i> 0326827373 (Zalo)</a></li>
                                <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope" style="font-size:14px;"></i> cho24gio.net@gmail.com</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><strong>Thông tin</strong></h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('page-operation-regulation') }}">Quy định sử dụng</a></li>
                                <li><a href="{{ url('page-security-information') }}">Chính sách bảo mật thông tin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h5><strong>Hướng dẫn</strong></h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('page-tutorial-register') }}">Hướng dẫn đăng ký thành viên</a></li>
                                <li><a href="{{ url('page-tutorial-post-new') }}">Hướng dẫn đăng tin</a></li>
                                <li><a href="{{ url('page-tutorial-payment') }}">Hướng dẫn thanh toán nạp tiền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <div class="footer-pad">
                            <h5><strong>Liên kết xã hội</strong></h5>
                            <ul class="social-network social-circle">
                                <li>
                                    <a href="https://www.facebook.com/" class="icoFacebook" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a </li>
                                <li><a href="https://mail.google.com" class="icoLinkedin" title="Gmail"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center" style="color: #ffdf00;">
                            &copy; Copyright <span id="year"></span> - cho24h.net All rights reserved.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <!-- ./Footer -->

    {{-- button-back-to-top  --}}
    <a href="#" id="scroll" style="display: none;" data-toggle="tooltip" title="Lên đầu trang"><span></span></a>
    {{-- button-back-to-top  --}}

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();

    </script>


    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });

    </script>

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


    @yield('link_js')

    <script src="{{ url('public/notify_js/notify.js') }}"></script>
    <script src="{{ url('public/notify_js/notify.min.js') }}"></script>

</body>
</html>
