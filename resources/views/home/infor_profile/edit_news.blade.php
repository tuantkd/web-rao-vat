@extends('layout.layout_home')
@section('title', 'Chỉnh sửa tin')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<style type="text/css">
    /*Copied from bootstrap to handle input file multiple*/
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    /*Also */
    .btn-success {
        border: 1px solid #c5dbec;
        background: #d0e5f5;
        font-weight: bold;
        color: #2e6e9e;
    }

    /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */
    .fileinput-button {
        position: relative;
        overflow: hidden;
    }

    .fileinput-button input {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        opacity: 0;
        -ms-filter: "alpha(opacity=0)";
        font-size: 200px;
        direction: ltr;
        cursor: pointer;
    }

    .thumb {
        max-width: 100%;
        height: 80px;
        border: 1px solid #000;
    }

    ul.thumb-Images li {
        width: 120px;
        float: left;
        display: inline-block;
        vertical-align: top;
        height: 120px;
    }

    .img-wrap {
        position: relative;
        display: inline-block;
        font-size: 0;
    }

    .img-wrap .close {
        position: absolute;
        top: 2px;
        right: 2px;
        z-index: 100;
        background-color: #d0e5f5;
        padding: 5px 2px 2px;
        color: #000;
        font-weight: bolder;
        cursor: pointer;
        opacity: 0.5;
        font-size: 23px;
        line-height: 10px;
        border-radius: 50%;
    }

    .img-wrap:hover .close {
        opacity: 1;
        background-color: #ff0000;
    }

    .FileNameCaptionStyle {
        font-size: 12px;
    }

    .form-check-inline .form-check-label {
        font-weight: normal;
        font-size: 14px;
    }

</style>


<div class="container" style="padding-top:15px;margin-top:70px;padding:5px;">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-1"></div>
        <!-- col-sm-10 -->
        <div class="col-sm-10">

            <div class="card">
                <div class="row">
                    <div class="col-md-12">

                        {{-- form  --}}
                        <form id="msform" method="POST" action="{{ url('update-news/'.$edit_new->id) }}" enctype="multipart/form-data" name="myForm" onsubmit="return validateFormEdit()" novalidate>
                            @csrf
                            @method('PUT')
                            {{-- ==============================================================================================  --}}
                            {{-- <!-- fieldsets đăng tin -->  --}}
                            <fieldset>
                                <div class="form-card">

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Chuyên mục đã chọn: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Chuyên mục đã chọn:</label>
                                            <span class="category">
                                                @php($category_child_firsts = DB::table('category_child_firsts')
                                                ->where('id',$edit_new->category_first_id)->get())

                                                @foreach($category_child_firsts as $key => $category_first)
                                                @php($categorys = DB::table('categorys')
                                                ->where('id',$category_first->category_id)->get())
                                                @foreach($categorys as $key => $category)
                                                {{ $category->category_name }}
                                                @endforeach
                                                @endforeach
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Tỉnh thành/Quận huyện: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-3 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Tỉnh thành:</label>
                                            <select id="state" class="form-control selectpicker" data-live-search="true" name="txt_province">
                                                @php($province_edits = DB::table('provinces')
                                                ->where('id', $edit_new->province_id)->get())
                                                @foreach ($province_edits as $province_edit)
                                                <option value="{{ $province_edit->province_name }}">
                                                    {{ $province_edit->province_name }}
                                                </option>
                                                @endforeach

                                                @php($province = DB::table('provinces')->get())
                                                @foreach ($province as $item_province)
                                                <option value="{{ $item_province->province_name }}">
                                                    {{ $item_province->province_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-6 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Quận huyện:</label>
                                            <select id="city" class="form-control" name="txt_district">
                                                @foreach ($province as $item_province)
                                                @php($district_id = DB::table('districts')
                                                ->where('province_id',$item_province->id)->get())
                                                @foreach ($district_id as $item_district)
                                                <option value="{{ $item_district->district_name }}">
                                                    {{ $item_province->province_name }} - {{ $item_district->district_name }}
                                                </option>
                                                @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Tiêu đề đăng tin: </label>
                                        </div>
                                        <div class="form-group col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Tiêu đề đăng tin: </label>
                                            <input type="text" class="form-control" value="{{ $edit_new->title }}" name="txt_title" id="txt_title">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Loại tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Loại tin: </label>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_post_type_id" id="txt_post_type_id">
                                                @php($post_type_edits = DB::table('post_types')
                                                ->where('id',$edit_new->post_type_id)->get())
                                                @foreach($post_type_edits as $post_type_edit)
                                                <option value="{{ $post_type_edit->id }}">{{ $post_type_edit->post_type_name }}</option>
                                                @endforeach

                                                @php($post_types = DB::table('post_types')->get())
                                                @foreach($post_types as $key => $post_type)
                                                <option value="{{ $post_type->id }}">{{ $post_type->post_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Giá: </label>
                                        </div>
                                        <div class="form-group col-8 col-sm-8 col-md-4" style="padding:2px;">
                                            <label class="label-title-mobile">Giá: </label>
                                            <input type="number" class="form-control" value="{{ $edit_new->price }}" name="txt_price" id="txt_price" maxlength="20">
                                        </div>
                                        <div class="form-group col-4 col-sm-4 col-md-2" style="padding:2px;">
                                            <label class="label-title-mobile">đơn vị</label>
                                            <select class="selectpicker form-control" data-live-search="true" required name="txt_currency">
                                                <option value="Đ">Đ</option>
                                                <option value="USD">USD</option>
                                                <option value="Lượng vàng">Lượng vàng</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Đơn vị tính: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-4" style="padding:2px;">
                                            <label class="label-title-mobile">Đơn vị tính: </label>
                                            <input type="text" class="form-control" value="{{ $edit_new->unit_price }}" data-toggle="popover" data-trigger="hover" data-content="Cái, Chiếc, m2, Ngày, Giờ ..." name="txt_unit_price" id="txt_unit_price">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Nội dung đăng tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Nội dung đăng tin: </label>
                                            <textarea class="form-control" rows="10" name="txt_content" id="txt_content">
                                            {{ $edit_new->content }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Từ khóa tìm kiếm: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Từ khóa tìm kiếm: </label>
                                            <input type="text" class="form-control" value="{{ $edit_new->tag_search }}" name="txt_tag_search">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Thời hạn: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-5" style="padding:2px;">
                                            <label class="label-title-mobile">Thời hạn: </label>
                                            <select class="selectpicker form-control" data-live-search="true" required name="txt_date_expired">
                                                <option value="{{ $edit_new->number_date_expired }}">
                                                    {{ $edit_new->number_date_expired }} Ngày
                                                </option>
                                                <option value="1">1 Ngày</option>
                                                <option value="2">2 Ngày</option>
                                                <option value="3">3 Ngày</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Chọn hình ảnh: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Chọn hình ảnh: </label>
                                            <div>
                                                <span class="btn btn-success fileinput-button">
                                                    <span>
                                                        <i class="fas fa-camera"></i>
                                                        Chọn thay đổi ảnh
                                                    </span>
                                                    <input type="file" name="txt_images[]" id="files" multiple accept="image/jpeg, image/png, image/gif," value="{{ $edit_new->images }}">
                                                </span>
                                                <br><br>
                                                @php($image_decode = (array)json_decode($edit_new->images,true))
                                                @foreach ($image_decode as $picture)
                                                <div class="img-wrap">
                                                    <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="align-self-center mr-3 thumb" style="width:100px;height:70px;border-radius:5px;margin-top:0px;">
                                                </div>
                                                @endforeach
                                                <output id="Filelist"></output>
                                            </div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Ẩn tin này: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Ẩn tin này: </label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1" name="txt_hiden_new">
                                                <label class="form-check-label">
                                                    (Khi xem các bản tin khác của bạn)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" name="next" class="post-new-button action-button" value="Đăng tin ngay" id="btn" />
                            </fieldset>
                            {{-- ==============================================================================================  --}}


                        </form>
                        {{-- form  --}}

                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- col-sm-10 --> --}}
        <div class="col-sm-1"></div>
    </div>
</div>

{{-- =====================================================================================================  --}}
<script>
    function validateFormEdit() {
        var content = document.forms["myForm"]["txt_content"].value;
        var province = document.forms["myForm"]["txt_province"].value;
        var district = document.forms["myForm"]["txt_district"].value;
        var title = document.forms["myForm"]["txt_title"].value;
        var post_type_id = document.forms["myForm"]["txt_post_type_id"].value;
        var price = document.forms["myForm"]["txt_price"].value;
        var unit_price = document.forms["myForm"]["txt_unit_price"].value;

        if (province == "") {
            alert("Bạn chưa chọn Tỉnh/TP!");
            document.getElementById('state').focus();
            return false;
        }
        if (district == "") {
            alert("Bạn chưa chọn Huyện!");
            document.getElementById('city').focus();
            return false;
        }
        if (title == "") {
            alert("Bạn chưa nhập Tiêu Đề!");
            document.getElementById('txt_title').focus();
            return false;
        }
        if (post_type_id == "") {
            alert("Bạn chưa chọn Loại Tin!");
            document.getElementById('txt_post_type_id').focus();
            return false;
        }
        if (price == "") {
            alert("Bạn chưa nhập Giá!");
            document.getElementById('txt_price').focus();
            return false;
        }
        if (unit_price == "") {
            alert("Bạn chưa nhập Đơn Vị Tính!");
            document.getElementById('txt_unit_price').focus();
            return false;
        }
        if (content == "") {
            alert("Bạn chưa nhập Nội Dung!");
            document.getElementById('txt_content').focus();
            return false;
        }
    }

</script>


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




<script src="{{ url('public/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('txt_content');

</script>

{{-- Hiện hover ra xem text  --}}
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });

</script>
{{-- Hiện hover ra xem text  --}}


{{-- Tỉnh thành - huyện  --}}
<script>
    $(function() {
        var showCity = function(selectedState) {
            $('#city option').hide();
            $('#city').find('option').filter(function() {
                var city = $(this).text();
                return city.indexOf(selectedState) != -1;
            }).show();
            //set default value
            var defaultCity = $('#city option:visible:first').text();
            $('#city').val(defaultCity);
        };

        //set default state
        var state = $('#state').val();
        showCity(state);
        $('#state').change(function() {
            showCity($(this).val());
        });
    });

</script>
{{-- Tỉnh thành - huyện  --}}



{{-- Lấy danh sách năm   --}}
<script>
    var max = new Date().getFullYear()
        , min = max - 40
        , select = document.getElementById('selectElementId');

    for (var i = max; i >= min; i--) {
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

</script>
{{-- Lấy danh sách năm   --}}



{{-- Form fieldsets đăng tin   --}}
<script type="text/javascript">
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none'
                        , 'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                }
                , duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none'
                        , 'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                }
                , duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });

</script>
{{-- Form fieldsets đăng tin   --}}



{{-- Thoát khỏi trang nút quay về trên trình duyệt  --}}
<script>
    window.addEventListener("beforeunload", function(event) {
        event.returnValue = "Bạn có chắc chắc chắn";
    });

</script>
{{-- Thoát khỏi trang nút quay về trên trình duyệt  --}}



{{-- Upload file hình ảnh  --}}
<script type="text/javascript">
    //I added event handler for the file upload control to access the files properties.
    document.addEventListener("DOMContentLoaded", init, false);

    //To save an array of attachments
    var AttachmentArray = [];

    //counter for attachment array
    var arrCounter = 0;

    //to make sure the error message for number of files will be shown only one time.
    var filesCounterAlertStatus = false;

    //un ordered list to keep attachments thumbnails
    var ul = document.createElement("ul");
    ul.className = "thumb-Images";
    ul.id = "imgList";

    function init() {
        //add javascript handlers for the file upload event
        document
            .querySelector("#files")
            .addEventListener("change", handleFileSelect, false);
    }

    //the handler for file upload event
    function handleFileSelect(e) {
        //to make sure the user select file/files
        if (!e.target.files) return;

        //To obtaine a File reference
        var files = e.target.files;

        // Loop through the FileList and then to render image files as thumbnails.
        for (var i = 0, f;
            (f = files[i]); i++) {
            //instantiate a FileReader object to read its contents into memory
            var fileReader = new FileReader();

            // Closure to capture the file information and apply validation.
            fileReader.onload = (function(readerEvt) {
                return function(e) {
                    //Apply the validation rules for attachments upload
                    ApplyFileValidationRules(readerEvt);

                    //Render attachments thumbnails.
                    RenderThumbnail(e, readerEvt);

                    //Fill the array of attachment
                    FillAttachmentArray(e, readerEvt);
                };
            })(f);

            // Read in the image file as a data URL.
            // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
            // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
            fileReader.readAsDataURL(f);
        }
        document
            .getElementById("files")
            .addEventListener("change", handleFileSelect, false);
    }

    //To remove attachment once user click on x button
    jQuery(function($) {
        $("div").on("click", ".img-wrap .close", function() {
            var id = $(this)
                .closest(".img-wrap")
                .find("img")
                .data("id");

            //to remove the deleted item from array
            var elementPos = AttachmentArray.map(function(x) {
                return x.FileName;
            }).indexOf(id);
            if (elementPos !== -1) {
                AttachmentArray.splice(elementPos, 1);
            }

            //to remove image tag
            $(this)
                .parent()
                .find("img")
                .not()
                .remove();

            //to remove div tag that contain the image
            $(this)
                .parent()
                .find("div")
                .not()
                .remove();

            //to remove div tag that contain caption name
            $(this)
                .parent()
                .parent()
                .find("div")
                .not()
                .remove();

            //to remove li tag
            var lis = document.querySelectorAll("#imgList li");
            for (var i = 0;
                (li = lis[i]); i++) {
                if (li.innerHTML == "") {
                    li.parentNode.removeChild(li);
                }
            }
        });
    });

    //Apply the validation rules for attachments upload
    function ApplyFileValidationRules(readerEvt) {
        //To check file type according to upload conditions
        if (CheckFileType(readerEvt.type) == false) {
            alert(
                "Hình ảnh (" +
                readerEvt.name +
                ") không khớp với điều kiện tải lên, Bạn chỉ có thể tải lên đuôi tệp (.jpg/ .png/ .gif)"
            );
            e.preventDefault();
            return;
        }

        //To check file Size according to upload conditions
        if (CheckFileSize(readerEvt.size) == false) {
            alert(
                "Hình ảnh (" +
                readerEvt.name +
                ") không phù hợp với điều kiện tải lên, Kích thước hình ảnh tối đa cho tải lên không được vượt quá 3MB"
            );
            e.preventDefault();
            return;
        }

        //To check files count according to upload conditions
        if (CheckFilesCount(AttachmentArray) == false) {
            if (!filesCounterAlertStatus) {
                filesCounterAlertStatus = true;
                alert(
                    "Bạn đã thêm hơn 5 hình ảnh. Theo điều kiện tải lên, bạn có thể tải lên tối đa 5 hình ảnh"
                );
            }
            e.preventDefault();
            return;
        }
    }

    //To check file type according to upload conditions
    function CheckFileType(fileType) {
        if (fileType == "image/jpeg") {
            return true;
        } else if (fileType == "image/png") {
            return true;
        } else if (fileType == "image/gif") {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check file Size according to upload conditions
    function CheckFileSize(fileSize) {
        if (fileSize < 3000000) {
            return true;
        } else {
            return false;
        }
        return true;
    }

    //To check files count according to upload conditions
    function CheckFilesCount(AttachmentArray) {
        //Since AttachmentArray.length return the next available index in the array,
        //I have used the loop to get the real length
        var len = 0;
        for (var i = 0; i < AttachmentArray.length; i++) {
            if (AttachmentArray[i] !== undefined) {
                len++;
            }
        }
        //To check the length does not exceed 10 files maximum
        if (len > 4) {
            return false;
        } else {
            return true;
        }
    }

    //Render attachments thumbnails.
    function RenderThumbnail(e, readerEvt) {
        var li = document.createElement("li");
        ul.appendChild(li);
        li.innerHTML = [
            '<div class="img-wrap"> <span class="close">&times;</span>' +
            '<img class="thumb" src="'
            , e.target.result
            , '" title="'
            , escape(readerEvt.name)
            , '" data-id="'
            , readerEvt.name
            , '"/>' + "</div>"
        ].join("");

        var div = document.createElement("div");
        div.className = "FileNameCaptionStyle";
        li.appendChild(div);
        div.innerHTML = [readerEvt.name].join("");
        document.getElementById("Filelist").insertBefore(ul, null);
    }

    //Fill the array of attachment
    function FillAttachmentArray(e, readerEvt) {
        AttachmentArray[arrCounter] = {
            AttachmentType: 1
            , ObjectType: 1
            , FileName: readerEvt.name
            , FileDescription: "Attachment"
            , NoteText: ""
            , MimeType: readerEvt.type
            , Content: e.target.result.split("base64,")[1]
            , FileSizeInBytes: readerEvt.size
        };
        arrCounter = arrCounter + 1;
    }

</script>
{{-- Upload file hình ảnh  --}}

@endsection
<!-- ==================================================== -->
