<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quản trị - @yield('title')</title>

    <link rel="icon" type="image/png" href="{{ url('public/logo/title-icon.png') }}">

    <!-- Custom fonts for this template-->
    <link href="{{ url('public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- fonts.googleapis -->
    <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="{{ url('public/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/css/style_admin.css') }}">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <!-- định dạng table and select search -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <!-- alert bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


    @yield('link_css')


    <style type="text/css" media="screen">
        table {
            margin: 5;
            padding: 0;
            width: 100%;
            table-layout: auto;
            border-radius: 5px;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .10em;
        }

        table th,
        table td {
            padding: .200em;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        table th {
            font-size: 10px;
            text-transform: uppercase;
            color: black;
            font-weight: bold;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
                width: 100%;
            }

            table thead {
                clip: rect(0 0 0 0);
                height: 1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
            }

            table tr {
                display: block;
                margin-bottom: .100em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .6em;
                text-align: right;

            }

            table td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
                border: 1px solid #ddd;
            }

            body {
                font-family: Muli, sans-serif;
                background-color: #f1f1f1;
            }

            .breadcrumb .breadcrumb-item {
                font-size: 12px;
            }
        }

        .breadcrumb .breadcrumb-item a {
            text-decoration: none;
        }

        .breadcrumb {
            background-color: white;
        }


        /*====================================================*/
        .sidenav {
            height: 100%;
            width: 0%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(200, 50, 50, 0.5);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 5px;
            color: white;
            right: 5px;
            margin-bottom: 15px;
            font-size: 30px;
            margin-left: 50px;
            padding: 0px 10px;
            border-radius: 80%;
            background-color: #D33115;
            border: 2px solid white;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        /*================================================*/
        /* Dropdown Button */
        .dropbtn {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            max-width: 100%;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: rgba(0, 0, 0, 0.5);
            color: #2d6386;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            position: relative;
            background-color: rgba(0, 0, 0, 0.5);
            min-width: 80%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: #FFFFFF;
            padding: 12px;
            text-decoration: none;
            display: block;
            margin-left: 20px;
            font-size: 15px;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            color: #abb8c3;
        }

    </style>
</head>

<body id="page-top">

    <style type="text/css">
        @media (max-width:600px) {
            #accordionSidebar {
                display: none;
                font-size: 10px;
            }
        }

        @media (max-width: 768px) {
            #accordionSidebar {
                display: none;
                font-size: 10px;
            }
        }

        @media (max-width: 1024px) {
            #accordionSidebar {
                display: none;
            }
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }

    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index_admin')}}">
                <div class="mx-3">
                    <img src="{{ url('public/logo/cho24h.png') }}" class="responsive">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index_admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bản điều khiển</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Người dùng
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Danh sách người dùng</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy chọn</h6>
                        <a class="collapse-item" href="{{ route('manage_admin') }}">Quản trị viên</a>
                        <a class="collapse-item" href="{{ route('manage_member') }}">Thành viên</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-lock"></i>
                    <span>Quyền người dùng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy chọn</h6>
                        <a class="collapse-item" href="{{ route('manage_role') }}">Quyền người dùng</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Bài đăng
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý bài đăng</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy chọn</h6>
                        <a class="collapse-item" href="{{ route('manage_category') }}">Danh mục</a>
                        <a class="collapse-item" href="{{ route('manage_category_first') }}">Danh mục cấp 1</a>
                        <a class="collapse-item" href="{{ route('manage_post_new') }}">Bài đăng</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Tùy chọn khác</h6>
                        <a class="collapse-item" href="{{ route('manage_type_post_new') }}">Loại bài đăng</a>
                        <a class="collapse-item" href="{{ url('admin/manage-report') }}">Báo cáo vi phạm</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>Đơn vị hành chính</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tùy chọn</h6>
                        <a class="collapse-item" href="{{ route('manage_province') }}">Tỉnh/Thành phố</a>
                        <a class="collapse-item" href="{{ route('manage_district') }}">Quận/Huyện</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage_banner') }}">
                    <i class="far fa-images"></i>
                    <span>Slider quảng cáo</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage_new') }}">
                    <i class="far fa-newspaper"></i>
                    <span>Tin tức</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button class="btn btn-link d-md-none rounded-circle mr-3" onclick="openNav()">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">
                                    @php
                                    $count_new_uncheck = DB::table('post_news')->where('status',0)->count();
                                    @endphp
                                    {{ $count_new_uncheck }}+
                                </span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Bài đăng mới
                                </h6>
                                @php
                                $postNew_uncheck = DB::table('post_news')->where('status',0)->get();
                                @endphp
                                @forelse ($postNew_uncheck as $item_post_new)
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('view_post_new', [ Str::slug($item_post_new->title), $item_post_new->id]) }}">
                                    <div class="dropdown-list-image mr-3">
                                        @php
                                        $image_decode = (array)json_decode($item_post_new->images,true)
                                        @endphp
                                        @foreach ($image_decode as $picture)
                                        @if ($loop->first)
                                        <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="rounded" width="100" height="50">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">
                                            <i class="far fa-clock"></i> {{ date("d/m/Y-H:i", strtotime($item_post_new->created_at)) }}
                                        </div>
                                        <span class="font-weight-bold">
                                            {{ Str::limit($item_post_new->title,30,'...') }}
                                        </span>
                                    </div>
                                </a>
                                @empty
                                @endforelse
                                <a class="dropdown-item text-center small text-gray-500" href="{{ route('manage_post_new') }}">Xem tất cả</a>
                            </div>
                        </li>


                        @if(Auth::check())


                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user()->avatar != NULL)
                                <img src="{{ url('public/upload_images_avatar/'.Auth::user()->avatar) }}" class="img-profile rounded-circle" style="width: 30px; margin-right: 10px;"> ​
                                @else
                                <img src="{{ url('public/logo/user/user-icon-edit.png') }}" class="img-profile rounded-circle" style="width: 30px; margin-right: 10px;">
                                @endif
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->username }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('admin/profile-user/'.Str::slug(Auth::user()->username).'/'.Auth::user()->id) }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thông tin
                                </a>
                                <a class="dropdown-item" href="{{ url('admin/change-password') }}">
                                    <i class="fas fa-key mr-2 text-gray-400"></i> Đổi mật khẩu
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>

                        @endif

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                    <hr>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->



        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Scroll to Top Button-->


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn sẵn sàng thoát khỏi?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Chọn "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên hiện tại của
                        mình.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Đóng</button>
                        <a class="btn btn-danger btn-sm" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logout Modal-->





        {{-- mySidenav  --}}
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="dropdown">
                <a class="dropbtn" href="{{ url('admin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i> Bảng điều khiển
                </a>
            </div>

            <div class="dropdown">
                <a onclick="Function()" class="dropbtn" href="#">
                    <i class="fa fa-users"></i>
                    Quản lý người dùng
                </a>
                <div id="myDropdown" class="dropdown-content">
                    <a href="{{ url('admin/manage-admin') }}"><i class="fa fa-arrow-circle-right"></i> Quản trị viên</a>
                    <a href="{{ url('admin/manage-member') }}"><i class="fa fa-arrow-circle-right"></i> Thành viên</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="dropbtn" href="{{ url('admin/manage-role') }}">
                    <i class="fa fa-key"></i> Quyền người dùng
                </a>
            </div>

            <div class="dropdown">
                <a onclick="Function()" class="dropbtn" href="#">
                    <i class="fa fa-newspaper"></i>
                    Quản lý bài đăng
                </a>
                <div id="myDropdown" class="dropdown-content">
                    <a href="{{ route('manage_category') }}"><i class="fa fa-arrow-circle-right"></i> Danh mục</a>
                    <a href="{{ route('manage_category_first') }}"><i class="fa fa-arrow-circle-right"></i> Danh mục cấp 1</a>
                    <a href="{{ route('manage_post_new') }}"><i class="fa fa-arrow-circle-right"></i> Bài đăng</a>
                    <a href="{{ route('manage_type_post_new') }}"><i class="fa fa-arrow-circle-right"></i> Loại bài đăng</a>
                    <a href="{{ url('admin/manage-report') }}"><i class="fa fa-arrow-circle-right"></i> Báo cáo vi phạm</a>
                </div>
            </div>

            <div class="dropdown">
                <a onclick="Function()" class="dropbtn" href="#">
                    <i class="fa fa-map-o"></i>
                    Đơn vị hành chính
                </a>
                <div id="myDropdown" class="dropdown-content">
                    <a href="{{ route('manage_province') }}"><i class="fa fa-arrow-circle-right"></i> Tỉnh/Thành phố</a>
                    <a href="{{ route('manage_district') }}"><i class="fa fa-arrow-circle-right"></i> Huyện/Quận</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="dropbtn" href="{{ route('manage_banner') }}">
                    <i class="fa fa-file-image-o"></i> Slider quảng cáo
                </a>
            </div>

            <div class="dropdown">
                <a class="dropbtn" href="{{ route('manage_new') }}">
                    <i class="fa fa-paper-plane-o"></i> Tin tức cập nhật
                </a>
            </div>

        </div>
        {{-- mySidenav  --}}






























        <!-- Bootstrap core JavaScript-->
        <script src="{{ url('public/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ url('public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ url('public/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ url('public/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ url('public/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ url('public/js/demo/chart-pie-demo.js') }}"></script>

        <!-- select live search -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        {{-- Animated Sidenav  --}}
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0%";
            }

        </script>
        {{-- Animated Sidenav  --}}




        <script>
            function Function() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }

        </script>





        <script>
            $(document).ready(function() {
                // inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
                $('.table-responsive-stack').find("th").each(function(i) {

                    $('.table-responsive-stack td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">' + $(this).text() + ':</span> ');
                    $('.table-responsive-stack-thead').hide();
                });

                $('.table-responsive-stack').each(function() {
                    var thCount = $(this).find("th").length;
                    var rowGrow = 100 / thCount + '%';
                    //console.log(rowGrow);
                    $(this).find("th, td").css('flex-basis', rowGrow);
                });

                function flexTable() {
                    if ($(window).width() < 768) {

                        $(".table-responsive-stack").each(function(i) {
                            $(this).find(".table-responsive-stack-thead").show();
                            $(this).find('thead').hide();
                        });

                        // window is less than 768px
                    } else {


                        $(".table-responsive-stack").each(function(i) {
                            $(this).find(".table-responsive-stack-thead").hide();
                            $(this).find('thead').show();
                        });
                    }
                    // flextable
                }

                flexTable();

                window.onresize = function(event) {
                    flexTable();
                };
            });

        </script>

        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });

        </script>

        <script>
            // Self-executing function
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();

        </script>

        @yield('link_js')

</body>
</html>
