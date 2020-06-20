@extends('layout.layout_home')
@section('title', 'Xem chi tiết tin tức')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<style type="text/css" media="screen">
    /* =================================== */
    .lead {
        font-style: italic;
        font-size: 16px;
    }

    /* =================================== */

    @media (max-width:600px) {
        .lead span {
            display: block;
        }
    }

</style>


<div class="container container-index">

    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <!-- Title -->
                    <h1 class="mt-1 p-0">
                        <b>Cách tính thuế thu nhập cá nhân khi bán hàng online</b>
                    </h1>

                    <hr>

                    <!-- Date/Time Author -->
                    <p class="lead text-nowrap">
                        <span><i class="far fa-calendar-alt"></i> Ngày đăng: 20-2-2020 12:00 PM &ensp;</span>
                        <span><i class="fas fa-user-alt"></i> Đăng bởi: Thanh Nhâm</span>
                    </p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="http://placehold.it/1200x500" alt="">

                    <hr>

                    <!-- Post Content -->
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
            </div>

        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection
<!-- ==================================================== -->
