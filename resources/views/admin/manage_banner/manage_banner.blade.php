@extends('layout.master_admin')
@section('title', 'Manage banner')
@section('link_css')
<link rel="stylesheet" href="{{ url('public/css/manage_banner.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
@endsection

{{-- ================================================================================== --}}

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Quản lý ảnh bìa</h1>
</div>

<hr>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center" style="color: red;">Danh sách ảnh bìa</h5>

                @foreach ($banner as $value)
                    <div class="anhbia">
                        <img src="{{ url('public/upload/banner/'.$value->image) }}" alt="" />
                        {{-- <p class="title">{{ $value->title }}</p> --}}
                        <div class="overlay"></div>
                        <div class="button"><a href="{{ route('delete_banner', $value->id) }}" onclick="return confirm('Bạn có chắc xóa không?')"> DELETE </a></div>
                    </div>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
    <!-- end col 6 -->

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="card">
            <form class="needs-validation" enctype="multipart/form-data" action="{{ route('add_banner') }}" 
                  method="POST" novalidate>
                @csrf

                <div class="card-body">
                    <h5 class="card-title text-center" style="color: red;">Upload ảnh bìa</h5>
                    <div class="panel">
                        <div class="button_outer">
                            <div class="btn_upload">
                                <input type="file" id="upload_file" name="upload_file" required>
                                Upload Image
                            </div>
                            <div class="processing_bar"></div>
                            <div class="success_box"></div>
                        </div>
                    </div>
                    <div class="error_msg"></div>
                    <div class="uploaded_file_view" id="uploaded_view">
                        <span class="file_remove">X</span>
                    </div>

                    <br><br><br><br><br><br>

                    <div class="form-group post_banner">
                        <label for="post_id">Thuộc bài đăng</label>
                        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="post_id" id="post_id">
                            @foreach ($post_new as $value)
                                <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                            <option value="1">Tiêu đề 1</option>
                            <option value="2">Tiêu đề 2</option>
                            <option value="3">Tiêu đề 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Nhập tiêu đề" required>
                        <small class="invalid-feedback">Vui lòng nhập tiêu đề</small>
                    </div>

                    <button type="submit" class="btn btn-success btn-block" style="margin: 10px auto;">Thêm ảnh bìa</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
@if (Session::has('add_banner'))    
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã thêm ảnh bìa thành công',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@if (Session::has('delete_banner'))    
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Đã xóa ảnh bìa thành công',
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@endsection

@section('link_js')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script>
    var btnUpload = $("#upload_file"),
        btnOuter = $(".button_outer");
    btnUpload.on("change", function (e) {
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $(".error_msg").text("Not an Image...");
        } else {
            $(".error_msg").text("");
            btnOuter.addClass("file_uploading");
            setTimeout(function () {
                btnOuter.addClass("file_uploaded");
            }, 3000);
            var uploadedFile = URL.createObjectURL(e.target.files[0]);
            setTimeout(function () {
                $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");
            }, 3500);
        }
    });
    $(".file_remove").on("click", function (e) {
        $("#uploaded_view").removeClass("show");
        $("#uploaded_view").find("img").remove();
        btnOuter.removeClass("file_uploading");
        btnOuter.removeClass("file_uploaded");
    });
</script>
@endsection