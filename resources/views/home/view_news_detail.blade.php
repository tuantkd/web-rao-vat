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

                    @foreach ($new as $key => $value)

                    <!-- Title -->
                    <h3 class="mt-1 p-0">
                        <b>{!! $value->title !!}</b>
                    </h3>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{ url('public/upload/image_new/'.$value->image) }}" alt="">

                    <hr>

                    <!-- Post Content -->
                    <p class="text-justify">
                        {!! $value->content !!}
                    </p>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Title -->
                    <h3 class="mt-1 p-0">
                        <b>Tin tức khác</b>
                    </h3>
                    <hr>

                    @foreach ($newDifferent as $item_newDifferent)
                        <div class="card border-danger">
                            <a href="">
                                <img class="card-img-top" src="{{ url('public/upload/image_new/')}}" alt="">
                            </a>
                            <div class="card-body">
                                <a href=""><h5 class="card-title">{{ $item_newDifferent->title }}</h5></a>
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="card border-danger">
                                <a href="">
                                    <img class="card-img-top" src="{{ url('public/upload/image_new/car-2.jpg')}}" alt="" style="max-height: 200px;">
                                </a>
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">Xe Trung Quốc Hanteng X5 đổ bộ Việt Nam, giá chỉ 600 triệu</h6></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12 col-md-3">
                            <div class="card border-danger">
                                <a href="">
                                    <img class="card-img-top" src="{{ url('public/upload/image_new/car-2.jpg')}}" alt="" style="max-height: 200px;">
                                </a>
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">Xe Trung Quốc Hanteng X5 đổ bộ Việt Nam, giá chỉ 600 triệu</h6></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="card border-danger">
                                <a href="">
                                    <img class="card-img-top" src="{{ url('public/upload/image_new/car-2.jpg')}}" alt="" style="max-height: 200px;">
                                </a>
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">Xe Trung Quốc Hanteng X5 đổ bộ Việt Nam, giá chỉ 600 triệu</h6></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="card border-danger">
                                <a href="">
                                    <img class="card-img-top" src="{{ url('public/upload/image_new/car-2.jpg')}}" alt="" style="max-height: 200px;">
                                </a>
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">Xe Trung Quốc Hanteng X5 đổ bộ Việt Nam, giá chỉ 600 triệu</h6></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    @endsection
    <!-- ==================================================== -->