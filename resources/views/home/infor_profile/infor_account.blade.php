@extends('home.infor_profile.layout_infor_profile') 
@section('title', 'Thông tin cá nhân') 
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
  </style>

  <div class="card">
     <div class="card-header" style="padding:5px;">
        <div class="clearfix">
           <span class="float-left">
              <h5>Thông tin tài khoản</h5>
           </span>
        </div>
     </div>

     <div class="card-body" style="padding:10px;">
      
      <form action="/action_page.php" class="needs-validation" novalidate>
        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
              <span class="badge badge-pill badge-light">
                <i class="far fa-money-bill-alt"></i>
              </span> Số tiền:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
              <span class="badge badge-pill badge-warning">0 đ</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 text-left">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-user"></i>
              </span> Tên liên hệ:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8 text-left">
              <input type="text" class="form-control" value="Tuan TKD" name="uname" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
              <span class="badge badge-pill badge-light">
                <i class="far fa-envelope"></i>
              </span> Email:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
              <input type="text" class="form-control" value="nguyenvantuan9a7@gmail.com" name="uname" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-mars"></i>
              </span> Giới tính:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="txt_sex" value="Nam" id="sex">Nam
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="txt_sex" value="Nữ" id="sex">Nữ
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
              <span class="badge badge-pill badge-light">
                <i class="far fa-calendar-alt"></i>
              </span> Ngày sinh:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
              <input type="date" class="form-control" value="nguyenvantuan9a7@gmail.com" name="uname" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-map-marker-alt"></i>
              </span> Địa chỉ:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
              <input type="text" class="form-control" value="" name="uname" required placeholder="Địa chỉ">
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4">
              <span class="badge badge-pill badge-light">
                <i class="fas fa-phone"></i>
              </span> Điện thoại:
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8">
              <input type="text" class="form-control" value="" name="uname" required placeholder="Số điện thoại">
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
        </div>

        <div class="text-right">
          <button type="submit" class="btn btn-danger btn-sm">Cập nhật</button>
        </div>
      </form>

     </div>
  </div>

  <script>
  // Disable form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>

@endsection {{-- ==================================================== --}}
