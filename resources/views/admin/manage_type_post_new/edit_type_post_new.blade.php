@extends('layout.master_admin')
@section('title','Chỉnh sửa loại bài đăng')
<!-- ============================= -->


<!-- ============================= -->
@section('content')
    
    <style type="text/css">
        .breadcrumb .breadcrumb-item a{
            text-decoration:none;
        }
        .breadcrumb{
            background-color:white;
        }
    </style>

    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/manage-type-post-new') }}">Loại bài đăng</a>
        </li>
         <li class="breadcrumb-item active">Chỉnh sửa</li>
    </ul>
    
    <div class="row">
      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-0"></div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-0">
         <div class="card shadow h-100">
            <div class="card-header">
               <h4 class="h4 mb-0 text-gray-800 text-center">Chỉnh sửa</h4>
            </div>
            <div class="card-body p-3">
                @foreach ($type_post as $value)
                    <form class="needs-validation" action="{{ route('post_edit_type_post_new', $value->id)}}" method="POST" novalidate>
                        @csrf
                            <div class="form-group row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <label for="">Tên loại bài đăng</label>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="typePostName" id="typePostName" 
                                    required value="{{ $value->post_type_name }}">
                                    <small class="invalid-feedback">Vui lòng nhập tên loại doanh mục</small>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-primary btn-block">CHỈNH SỬA</button>
                    </form>
                @endforeach

            </div>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-0"></div>
    </div>
    <br><br><br><br><br><br><br>   

@endsection
<!-- ============================= -->


<!-- ============================= -->
@section('link_js')

@endsection
<!-- ============================= -->