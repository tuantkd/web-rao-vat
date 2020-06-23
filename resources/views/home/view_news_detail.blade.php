@include('layout/slug')
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
<!-- /.container -->

@endsection
<!-- ==================================================== -->
