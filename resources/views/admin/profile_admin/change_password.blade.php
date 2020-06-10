@extends('admin.profile_admin.layout_profile_user')

<!-- ============================================== -->
@section('tab-content')

  <style type="text/css" media="screen">
    .invalid-feedback{
      font-style: italic;
    }
    .input-group-append #button-eye{
      border-top-right-radius:5px;
      border-bottom-right-radius:5px;
    }
  </style>

  <div class="tab-pane active" id="settings">
    <form class="needs-validation" novalidate>

      <div class="form-group row">
        <label for="inputName" class="col-sm-4 col-form-label"><b>Mật khẩu cũ:</b></label>
        <div class="col-sm-8">
          <div class="input-group mb-3" id="show_hide_password_old">
              <input class="form-control" type="password" placeholder="Nhập mật khẩu cũ"
              name="txt_password" required>
              <div class="input-group-append">
                  <button class="btn btn-danger" type="button" id="button-eye">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                  </button>
              </div>
              <div class="invalid-feedback">Chưa nhập mật khẩu cũ</div>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputName2" class="col-sm-4 col-form-label"><b>Mật khẩu mới:</b></label>
        <div class="col-sm-8">
          <div class="input-group mb-3" id="show_hide_password_new">
              <input class="form-control" type="password" placeholder="Nhập mật khẩu mới" 
              name="txt_password" required>
              <div class="input-group-append">
                  <button class="btn btn-danger" type="button" id="button-eye">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                  </button>
              </div>
              <div class="invalid-feedback">Chưa nhập mật khẩu mới</div>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label"><b>Xác nhận mật khẩu mới:</b></label>
        <div class="col-sm-8">
          <div class="input-group mb-3" id="show_hide_password_comfirm_new">
              <input class="form-control" type="password" placeholder="Nhập xác nhận mật khẩu mới" 
              name="txt_password" required>
              <div class="input-group-append">
                  <button class="btn btn-danger" type="button" id="button-eye">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:white;"></i></a>
                  </button>
              </div>
              <div class="invalid-feedback">Chưa nhập xác nhận mật khẩu mới</div>
          </div>
        </div>
      </div>
      
      <div class="form-group row">
        <div class="offset-sm-4 col-sm-8">
          <button type="submit" class="btn btn-danger">Cập nhật</button>
        </div>
      </div>

    </form>
  </div>



  <script type="text/javascript">
    $(document).ready(function() {
        $("#show_hide_password_old a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password_old input').attr("type") == "text") {
                $('#show_hide_password_old input').attr('type', 'password');
                $('#show_hide_password_old i').addClass("fa-eye-slash");
                $('#show_hide_password_old i').removeClass("fa-eye");
            } else if ($('#show_hide_password_old input').attr("type") == "password") {
                $('#show_hide_password_old input').attr('type', 'text');
                $('#show_hide_password_old i').removeClass("fa-eye-slash");
                $('#show_hide_password_old i').addClass("fa-eye");
            }
        });

        $("#show_hide_password_new a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password_new input').attr("type") == "text") {
                $('#show_hide_password_new input').attr('type', 'password');
                $('#show_hide_password_new i').addClass("fa-eye-slash");
                $('#show_hide_password_new i').removeClass("fa-eye");
            } else if ($('#show_hide_password_new input').attr("type") == "password") {
                $('#show_hide_password_new input').attr('type', 'text');
                $('#show_hide_password_new i').removeClass("fa-eye-slash");
                $('#show_hide_password_new i').addClass("fa-eye");
            }
        });

        $("#show_hide_password_comfirm_new a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password_comfirm_new input').attr("type") == "text") {
                $('#show_hide_password_comfirm_new input').attr('type', 'password');
                $('#show_hide_password_comfirm_new i').addClass("fa-eye-slash");
                $('#show_hide_password_comfirm_new i').removeClass("fa-eye");
            } else if ($('#show_hide_password_comfirm_new input').attr("type") == "password") {
                $('#show_hide_password_comfirm_new input').attr('type', 'text');
                $('#show_hide_password_comfirm_new i').removeClass("fa-eye-slash");
                $('#show_hide_password_comfirm_new i').addClass("fa-eye");
            }
        });
    });



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

@endsection
<!-- ============================================== -->