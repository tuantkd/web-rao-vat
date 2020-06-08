@extends('layout.master_admin')
@section('title', 'Manage banner')
<link rel="stylesheet" href="{{ url('public/css/manage_banner.css') }}">
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

                <div class="anhbia">
                    <img src="https://images.unsplash.com/photo-1488628075628-e876f502d67a?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg="
                        alt="" />
                    <p class="title">card title</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="#"> DELETE </a></div>
                </div>

                <div class="anhbia">
                    <img src="https://images.unsplash.com/photo-1488628075628-e876f502d67a?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg="
                        alt="" />
                    <p class="title">card title</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="#"> DELETE </a></div>
                </div>

                <div class="anhbia">
                    <img src="https://images.unsplash.com/photo-1488628075628-e876f502d67a?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg="
                        alt="" />
                    <p class="title">card title</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="#"> DELETE </a></div>
                </div>

                <div class="anhbia">
                    <img src="https://images.unsplash.com/photo-1488628075628-e876f502d67a?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg="
                        alt="" />
                    <p class="title">card title</p>
                    <div class="overlay"></div>
                    <div class="button"><a href="#"> DELETE </a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col 6 -->

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="card">
            <form>
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: red;">Upload ảnh bìa</h5>
                    <div class="panel">
                        <div class="button_outer">
                            <div class="btn_upload">
                                <input type="file" id="upload_file" name="">
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
                </div>
                <br><br><br><br>

                <button type="submit" class="btn btn-success btn-block" style="margin: 10px auto;">Thêm ảnh bìa</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
@endsection

@section('link_js')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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