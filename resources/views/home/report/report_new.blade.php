@extends('layout.layout_home')
@section('title', 'Báo cáo vi phạm bản tin')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

	<div class="container" style="padding-top:15px;margin-top:70px;padding:5px;">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="container" style="padding:1px;">

        <form action="" method="POST" class="needs-validation" novalidate>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tôi muốn báo vi phạm</h4>
              <p class="card-text">
                Mã tin: <b>37207388</b> - Công ty ô Tô Phi Dung chuyên cho thuê ô tô đời mới tự lái, có tài Q 6
              </p>

              <ul class="list-group list-group-flush">

                <li class="list-group-item">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="" required> 
                    Tin sai nội dung
                  </label>
                </li>

                <li class="list-group-item">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="" required> 
                    Tin lặp lại nội dung
                  </label>
                </li>

                <li class="list-group-item">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="" required> 
                    Tin không liên hệ được người đăng
                  </label>
                </li>

                <li class="list-group-item">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="" required> 
                    Tin có dấu hiệu lừa đảo
                  </label>
                </li>

                <li class="list-group-item">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="" required> 
                    Tin đã giao dịch xong
                    <div class="invalid-feedback">Chưa chọn loại tin vi phạm</div>
                  </label>
                </li>
              </ul>

              <hr>

              <div class="form-group">
                <label for="uname">Tôi tên:</label>
                <input type="text" class="form-control" id="uname" placeholder="Nhập tên" name="uname" required>
                <div class="invalid-feedback">Chưa nhập tên</div>
              </div>
              <div class="form-group">
                <label for="phone">Email hoặc số điện thoại:</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhập email hoặc số điện thoại" name="phone" required>
                <div class="invalid-feedback">Chưa nhập email hoặc số điện thoại</div>
              </div>

              <div class="text-right">
                <button type="button" class="btn btn-warning" onclick="window.history.back();">
                  Quay lại
                </button>
                <button type="submit" class="btn btn-danger">Gửi báo cáo</button>
              </div>

            </div>
          </div>
        </form>

        </div>
      </div>
      <div class="col-sm-2"></div>
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

@endsection
<!-- ==================================================== -->