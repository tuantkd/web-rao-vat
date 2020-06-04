@extends('layout.layout_home')
@section('title', 'Xem trang cá nhân')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<div class="container" style="padding-top:5px;margin-top:50px;padding:5px;">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      
      <!-- breadcrumb -->
      <ul class="breadcrumb breadcrumb-mobile">
          <li class="breadcrumb-item">
              <a href="#" style="text-decoration:none;color:red;">Trang chủ</a>
          </li>
          <li class="breadcrumb-item active">Trang cá nhân của Văn luận</li>
      </ul>
      <!-- breadcrumb -->
      
      <!-- infor-user -->
      <div class="card">
        <div class="card-body" style="padding:1px;">
          <div class="media p-4 user-icon-profile">
            <img src="{{ url('public/logo/icon-user.png') }}" class="mr-3 mt-3 rounded-circle"
              style="max-width:100%;height:80px;">
            <div class="media-body">
              <p><b>Thảo Volkswagen</b> <br> Ngày tham gia Tham gia ngày 31-05-2018</p>
              <a class="btn btn-outline-warning btn-sm phonecell" href="#" role="button">
                <i class="fas fa-phone"></i> 0936655612
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- infor-user -->

      <!-- list-new -->
      <div class="card" style="margin-top:10px;">
        <div class="card-header"><b>Đang bán - 1 tin</b></div>
        <div class="card-body" style="padding:1px;">

          <div class="list">
            <a href="">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                  <img src="{{ url('public/images/car-1.jpg') }}" class="rounded">
                </div>
                <div class="col-8 col-sm-8 col-md-10 col-lg-10 text-left">
                  <h5>ĐÈN cầu xoay LOA bluetooth cảm ứng nhạc</h5>
                  <h5><b>173.000 đ</b></h5>
                  
                  <div class="row row-cols-1">
                    <div class="col-12 col-sm-12 col-md-6">
                      <i class="far fa-clock" style="color:orange;"></i>
                      2/6/2020
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                      <i class="fas fa-map-marker-alt" style="color:orange;"></i>
                      Hồ Chí Minh - Quận 12
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="list">
            <a href="">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                  <img src="{{ url('public/images/car-1.jpg') }}" class="rounded">
                </div>
                <div class="col-8 col-sm-8 col-md-10 col-lg-10 text-left">
                  <h5>ĐÈN cầu xoay LOA bluetooth cảm ứng nhạc</h5>
                  <h5><b>173.000 đ</b></h5>
                  
                  <div class="row row-cols-1">
                    <div class="col-12 col-sm-12 col-md-6">
                      <i class="far fa-clock" style="color:orange;"></i>
                      2/6/2020
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                      <i class="fas fa-map-marker-alt" style="color:orange;"></i>
                      Hồ Chí Minh - Quận 12
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
      <!-- list-new -->
      
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>


  <script>
    $(function() {
      $('.phonecell').click(function() {
        var PhoneNumber = $(this).text();
        PhoneNumber = PhoneNumber.replace('Phone:', '0936655612');
        window.location.href = 'tel://' + PhoneNumber;
      });
    });
  </script>

@endsection
<!-- ==================================================== -->