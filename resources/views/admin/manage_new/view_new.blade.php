@extends('layout.master_admin')
@section('title','Xem chi tiết tin tức')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('manage_new') }}">Tin tức</a>
        </li>
        <li class="breadcrumb-item active">Xem chi tiết</li>
    </ul>

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

@endsection