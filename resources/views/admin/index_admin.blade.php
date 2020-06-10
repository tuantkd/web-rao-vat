@extends('layout.master_admin')
@section('title','Admin - Trang chủ')
@section('link_css')
   <link rel="stylesheet" href="{{ url('public/css/media.css') }}">
@endsection
{{-- =============================================================================== --}}

@section('content')
   
   <!-- ============================================== -->
   <style>
      
   </style>
   <!-- ============================================== -->





   <!-- Content Row -->
   <!-- ============================================== -->
   <div class="row" id="row-list">
       <!-- Earnings (Monthly) Card Example -->
       <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
           <div class="card-body">
             <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Quản trị viên</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
              </div>
              <div class="col-auto">
                 <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                 <i class="fa fa-user fa-2x text-gray-300" aria-hidden="true"></i>
              </div>
           </div>
        </div>
      </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
           <div class="card-body">
             <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Thành viên</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
              </div>
              <div class="col-auto">
                 <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                 <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
              </div>
           </div>
        </div>
      </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
             <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Bài đăng</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
              </div>
              <div class="col-auto">
                 <i class="fa fa-newspaper fa-2x text-gray-300" aria-hidden="true"></i>
              </div>
           </div>
        </div>
      </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Danh mục đăng</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                  </div>
                  <div class="col-auto">
                     <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                     <i class="fa fa-list fa-2x text-gray-300" aria-hidden="true"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ============================================== -->



   <!-- ============================================== -->
   <div class="row">
      <div class="col-xl-12 col-md-12 mb-4">
         <div class="card shadow h-100">
            <div class="card-header">
               <h4>Bài đăng mới nhất</h4>
            </div>
            <div class="card-body p-2">
            
               <div class="media border p-2">
                  <img src="{{ url('public/images/car-2.jpg') }}" class="img-fluid mr-3 image-post-new">
                  <div class="media-body">
                    <div class="row">
                       <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                          <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                          <p>
                              <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                              <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> | 
                              <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                          </p>
                       </div>

                       <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                           <a class="btn btn-outline-success btn-sm" href="#" role="button"
                           data-toggle="tooltip" title="Chưa duyệt">
                              <i class="far fa-check-square"></i>
                           </a>
                           <a class="btn btn-outline-danger btn-sm" href="#" role="button">
                              <i class="far fa-trash-alt"></i>
                           </a>
                       </div>
                    </div>
                  </div>
               </div>

              <div class="media border p-2">
                  <img src="{{ url('public/images/car-3.jpg') }}" class="img-fluid mr-3 image-post-new">
                  <div class="media-body">
                    <div class="row">
                       <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                          <a href=""><b>Bán xe Land Rover Range Sport HSE Supercharged 3.0 model 2019.</b></a>
                          <p>
                              <strong><i class="fa fa-money" aria-hidden="true"></i> 2.000.000.000 đ</strong> <br>
                              <small><i class="fa fa-calendar" aria-hidden="true"></i> 06/08/2020</small> | 
                              <small><i class="fas fa-map-marker-alt"></i> Hậu Giang - Vị Thủy</small>
                          </p>
                       </div>

                       <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-right">
                           <a class="btn btn-outline-success btn-sm" href="#" role="button"
                           data-toggle="tooltip" title="Chưa duyệt">
                              <i class="far fa-check-square"></i>
                           </a>
                           <a class="btn btn-outline-danger btn-sm" href="#" role="button">
                              <i class="far fa-trash-alt"></i>
                           </a>
                       </div>
                    </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- ============================================== -->



   <!-- ============================================== -->
   <div class="row">
      <div class="col-xl-12 col-md-12 mb-4">
         <div class="card shadow h-100">
            <div class="card-header">
               <h4>Thành viên tham gia mới</h4>
            </div>
            <div class="card-body p-1">
            
               <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                  <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                    <thead class="thead-dark|thead-light">
                      <tr>
                        <th scope="col"><input type="checkbox" id="check_all"></th>
                        <th scope="col">STT</th>
                        <th scope="col">Tên liên hệ</th>
                        <th scope="col">Điện thoại</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col" colspan="2">Tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Chọn">
                          <input type="checkbox" class="sub_check" data-id="">
                        </td>
                        <td data-label="STT">1</td>
                        <td data-label="Tên liên hệ">
                           <a href="">Tuan TKD</a>
                        </td>
                        <td data-label="Điện thoại">03268273273</td>
                        <td data-label="Giới tính">Nam</td>
                        <td data-label="Ngày sinh">23/5/1998</td>
                        <td data-label="Email">tuan@gmail.com</td>
                        <td data-label="Địa chỉ">Hậu Giang - Vị Thủy</td>
                        <td data-label="Tùy chọn">
                           <a class="btn btn-outline-primary btn-sm" href="#" role="button">
                              <i class="fas fa-info"></i>
                           </a>
                        </td>
                        <td data-label="Tùy chọn">
                           <a class="btn btn-outline-danger btn-sm" href="#" role="button">
                              <i class="far fa-trash-alt"></i>
                           </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- ============================================== -->

@endsection