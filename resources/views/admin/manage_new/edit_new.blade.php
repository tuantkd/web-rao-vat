@extends('layout.master_admin')
@section('title','Chỉnh sửa tin tức')

<!-- ============================= -->


<!-- ============================= -->
@section('content')

<style type="text/css">
    .breadcrumb .breadcrumb-item a {
        text-decoration: none;
    }

    .breadcrumb {
        background-color: white;
    }
</style>

<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/manage-new') }}">Tin tức</a>
    </li>
    <li class="breadcrumb-item active">Chỉnh sửa</li>
</ul>

<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 mt-0">
        <div class="card shadow h-100">
            <div class="card-header text-center">
                <h4 class="h4 mb-0 text-gray-800" style="font-weight: 700;">Chỉnh sửa tin tức</h4>
            </div>
            <div class="card-body p-3">

                @foreach ($new as $item_new)
                    <form class="needs-validation" action="{{ route('edit_new', [Str::slug($item_new->title), $item_new->id]) }}" method="POST" novalidate
                    enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                <label for="">Tiêu đề</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                                    placeholder="Nhập tiêu đề" required value="{{ $item_new->title }}">
                                <small class="invalid-feedback">Vui lòng nhập tiêu đề tin tức</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                <label for="content">Nội dung</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor" 
                                value="{!! $item_new->content !!}" ></textarea>
                                <small class="invalid-feedback">Vui lòng nhập nội dung</small>
                            </div>
                        </div>

                        <style>
                            .panel {
                                /* margin: 100px auto 40px; */
                                /* max-width: 500px; */
                                text-align: center;
                            }

                            .button_outer {
                                background: #83ccd3;
                                border-radius: 30px;
                                text-align: center;
                                height: 50px;
                                width: 200px;
                                display: inline-block;
                                transition: .2s;
                                position: relative;
                                overflow: hidden;
                            }

                            .btn_upload {
                                /* padding: 17px 30px 12px; */
                                padding-top: 12px;
                                color: #fff;
                                text-align: center;
                                position: relative;
                                display: inline-block;
                                overflow: hidden;
                                z-index: 3;
                                white-space: nowrap;
                            }

                            .btn_upload input {
                                position: absolute;
                                width: 100%;
                                left: 0;
                                top: 0;
                                width: 100%;
                                height: 105%;
                                cursor: pointer;
                                opacity: 0;
                            }

                            .file_uploading {
                                width: 100%;
                                height: 10px;
                                margin-top: 20px;
                                background: #ccc;
                            }

                            .file_uploading .btn_upload {
                                display: none;
                            }

                            .processing_bar {
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 0;
                                height: 100%;
                                border-radius: 30px;
                                background: #83ccd3;
                                transition: 3s;
                            }

                            .file_uploading .processing_bar {
                                width: 100%;
                            }

                            .success_box {
                                display: none;
                                width: 50px;
                                height: 50px;
                                position: relative;
                            }

                            .success_box:before {
                                content: '';
                                display: block;
                                width: 9px;
                                height: 18px;
                                border-bottom: 6px solid #fff;
                                border-right: 6px solid #fff;
                                -webkit-transform: rotate(45deg);
                                -moz-transform: rotate(45deg);
                                -ms-transform: rotate(45deg);
                                transform: rotate(45deg);
                                position: absolute;
                                left: 17px;
                                top: 10px;
                            }

                            .file_uploaded .success_box {
                                display: inline-block;
                            }

                            .file_uploaded {
                                margin-top: 0;
                                width: 50px;
                                background: #83ccd3;
                                height: 50px;
                            }

                            .uploaded_file_view {
                                max-width: 300px;
                                max-height: 250px;
                                margin-top: 10px;
                                margin-bottom: 50px;
                                margin-left: auto;
                                margin-right: auto;
                                text-align: center;
                                position: relative;
                                transition: .2s;
                                opacity: 0;
                                border: 2px solid #ddd;
                            }

                            .file_remove {
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                display: block;
                                position: absolute;
                                background: #aaa;
                                line-height: 30px;
                                color: #fff;
                                font-size: 12px;
                                cursor: pointer;
                                right: -15px;
                                top: -15px;
                            }

                            .file_remove:hover {
                                background: #222;
                                transition: .2s;
                            }

                            .uploaded_file_view img {
                                max-width: 100%;
                            }

                            .uploaded_file_view.show {
                                opacity: 1;
                            }

                            .error_msg {
                                text-align: center;
                                color: #f00
                            }
                        </style>

                        <div class="form-group row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                <label for="">Hình ảnh</label>
                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ url('public/upload/image_new/'.$item_new->image) }}" class="img-fluid" alt="" style="max-height: 200px;">
                                            <p style="font-weight: 500;">{{ $item_new->image }}</p>
                                        </div>
                                        <div class="panel mt-2">
                                            <div class="button_outer">
                                                <div class="btn_upload">
                                                    <input type="file" id="upload_file" name="upload_file" required>
                                                    Change Image
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
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Chỉnh sửa</button>
                    </form>
                @endforeach
                

            </div>
        </div>
    </div>
</div>

@endsection
<!-- ============================= -->


<!-- ============================= -->
@section('link_js')
<script src="{{ url('public/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
</script>

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
<!-- ============================= -->