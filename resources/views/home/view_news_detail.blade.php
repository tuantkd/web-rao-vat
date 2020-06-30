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

    .responsive {
        max-width: 100%;
        height: auto;
        border-radius: 3px;
    }

</style>


<div class="container container-index">
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-3">

                    @foreach ($new as $key => $value)

                    <!-- Title -->
                    <h2 class="mt-1 p-0 text-justify">
                        <b>{!! $value->title !!}</b>
                    </h2>
                    <hr>

                    <!-- Date/Time -->
                    <p class="lead">
                        <i class="fa fa-calendar"></i>
                        Ngày {!! date('d/m/Y - H:i', strtotime($value->created_at)) !!} phút</p>
                    <hr>


                    <!-- Preview Image -->
                    <img src="{{ url('public/upload/image_new/'.$value->image) }}" class="responsive" width="700" height="400">

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
</div>

@endsection
<!-- ==================================================== -->
