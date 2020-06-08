@extends('home.infor_profile.layout_infor_profile') 
@section('title', 'Phương thức thanh toán') 
{{-- ==================================================== --}} 

{{-- ==================================================== --}} 
@section('col-9-content')

  <style type="text/css">
    /* ========================================= */
    @media (max-width:600px) {
      .form-group .row .col-md-4{
        color:black;
        font-size:12px;
      }
      .form-group .row .col-md-8 input{
        color:black;
        font-size:11px;
      }
      .badge-light i{
        font-size:13px;
      }
      .form-group .row .col-md-8{
        color:black;
        font-size:11px;
      }
    }
    /* ========================================= */

    .badge-light{
      width:30px;
    }
    .badge-light i{
      font-size:15px;
    }
    .form-group .row .col-12 .row .col-md-3{
      margin-bottom:10px;
    }
    .form-group .row .col-12 .row .col-md-3 img {
      filter: gray;
      -webkit-filter: grayscale(1);
      -webkit-transition: all .3s ease-in-out;  
      border:1.5px solid gray;
      border-radius:5px;
      padding:5px;
    }

    .form-group .row .col-12 .row .col-md-3 img:hover {
      filter: none;
      -webkit-filter: grayscale(0);
      -webkit-transform: scale(1);
    }
  </style>

  <div class="card">
     <div class="card-header" style="padding:5px;">
        <div class="clearfix">
           <span class="float-left">
              <h5>
                <i class="fas fa-key"></i> Thay đổi mật khẩu
              </h5>
           </span>
        </div>
     </div>

     <div class="card-body" style="padding:10px;">
      
      <form action="#" class="needs-validation" novalidate>

        <div class="form-group">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-key"></i>
              </span> Mật khẩu cũ (hiện tại):
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <div class="input-group mb-3" id="show_hide_password1">
                  <input class="form-control" type="password" placeholder="Mật khẩu cũ" name="txt_password" required>
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button">
                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                      </button>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-key"></i>
              </span> Mật khẩu mới:
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <div class="input-group mb-3" id="show_hide_password2">
                  <input class="form-control" type="password" placeholder="Mật khẩu mới" name="txt_password" required>
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button">
                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                      </button>
                  </div>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-key"></i>
              </span> Nhập lại mật khẩu mới:
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-left">
              <div class="input-group mb-3" id="show_hide_password3">
                  <input class="form-control" type="password" placeholder="Nhập lại mật khẩu mới" 
                  name="txt_password" required>
                  <div class="input-group-append">
                      <button class="btn btn-secondary" type="button">
                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                      </button>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </form>

     </div>
  </div>
  

  <script type="text/javascript">
    $(document).ready(function() {
        $("#show_hide_password1 a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password1 input').attr("type") == "text") {
                $('#show_hide_password1 input').attr('type', 'password');
                $('#show_hide_password1 i').addClass("fa-eye-slash");
                $('#show_hide_password1 i').removeClass("fa-eye");
            } else if ($('#show_hide_password1 input').attr("type") == "password") {
                $('#show_hide_password1 input').attr('type', 'text');
                $('#show_hide_password1 i').removeClass("fa-eye-slash");
                $('#show_hide_password1 i').addClass("fa-eye");
            }
        });

        $("#show_hide_password2 a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password2 input').attr("type") == "text") {
                $('#show_hide_password2 input').attr('type', 'password');
                $('#show_hide_password2 i').addClass("fa-eye-slash");
                $('#show_hide_password2 i').removeClass("fa-eye");
            } else if ($('#show_hide_password2 input').attr("type") == "password") {
                $('#show_hide_password2 input').attr('type', 'text');
                $('#show_hide_password2 i').removeClass("fa-eye-slash");
                $('#show_hide_password2 i').addClass("fa-eye");
            }
        });

        $("#show_hide_password3 a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password3 input').attr("type") == "text") {
                $('#show_hide_password3 input').attr('type', 'password');
                $('#show_hide_password3 i').addClass("fa-eye-slash");
                $('#show_hide_password3 i').removeClass("fa-eye");
            } else if ($('#show_hide_password3 input').attr("type") == "password") {
                $('#show_hide_password3 input').attr('type', 'text');
                $('#show_hide_password3 i').removeClass("fa-eye-slash");
                $('#show_hide_password3 i').addClass("fa-eye");
            }
        });
    });
  </script>

@endsection
{{-- ==================================================== --}}
