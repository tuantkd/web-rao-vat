@extends('home.infor_profile.layout_infor_profile') 
@section('title', 'Thông tin cá nhân') 
{{-- ==================================================== --}} 

{{-- ==================================================== --}} 
@section('col-9-content')

  <div class="card">
     <div class="card-header" style="padding:5px;">
        <div class="clearfix">
           <span class="float-left">
              <h5>Quản lý tin</h5>
           </span>
           <span class="float-right">
              <div class="input-group">
                 <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                 <div class="input-group-append">
                    <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                 </div>
              </div>
           </span>
        </div>
     </div>

     <div class="card-body" style="padding:10px;">
        <span class="badge badge-pill badge-secondary">
           <a href="" >Tất cả tin</a>
        </span>
        <span class="badge badge-pill badge-info">
           <a href="" >Tin dịch vụ</a>
        </span>
        <span class="badge badge-pill badge-warning">
           <a href="" >Tin hết hạn</a>
        </span>
        <hr>

        <a href="{{ url('view-category-detail') }}" style="text-decoration:none;color:#ff3333;">
          <div class="media border manage-post-new">
            <img src="{{ url('public/images/car-1.jpg') }}" class="align-self-center mr-3" 
            style="max-width:100%;height:60px;border-radius:5px;margin-top:0px;">
            <div class="media-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                  <h4 class="h4-title">Xe Kia Morning 2020 - thời trang -hiện đại thời trang -hiện đại</h4>
                  <p class="p-content-text"><i class="far fa-clock"></i> 06/06/2020 - <b>09/06/2020</b></p>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Nâng cấp tin">
                     <i class="fas fa-crown" style="color:orange;"></i>
                  </a>

                  <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Chỉnh sửa">
                     <i class="fas fa-edit"></i>
                  </a>

                  <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Xóa">
                     <i class="fas fa-trash-alt"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </a>

     </div>
  </div>

@endsection {{-- ==================================================== --}}