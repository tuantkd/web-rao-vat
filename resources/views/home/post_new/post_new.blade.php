@extends('layout.layout_home')
@section('title', 'Đăng tin')
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
                        <form id="msform" method="POST" action="{{ url('post-post-new') }}" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" novalidate>

                            @csrf
                            {{-- progressbar --}}
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Chọn danh mục</strong></li>
                                <li id="personal"><strong>Thông tin danh mục</strong></li>
                                <li id="payment"><strong>Đăng tin</strong></li>
                            </ul>
                            {{-- progressbar --}}

                            {{-- ==============================================================================================  --}}
                            {{-- fieldsets danh mục cấp 1  --}}
                            <fieldset>
                                <div class="form-card">
                                    @php
                                    $category_firsts_1s = DB::table('category_child_firsts')
                                    ->where('category_id', $categorys_ids->id)->get()
                                    @endphp

                                    @foreach($category_firsts_1s as $category_child_1)
                                    <div class="card-block">
                                        <div class="form-check text-left">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" value="{{ $category_child_1->id }}" name="txt_category_firsts_id" id="check-box" required>
                                                <span id="span-text">
                                                    {{ $category_child_1->category_child_name }}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <a class="a-previous" href="{{ url('post-new-category') }}">Quay lại</a>
                                <input type="button" name="next" class="next action-button" value="Tiếp tục" />
                            </fieldset>
                            {{-- fieldsets danh mục cấp 1  --}}
                            {{-- ==============================================================================================  --}}










                            {{-- ==============================================================================================  --}}
                            {{-- fieldsets thông tin --}}
                            <fieldset>
                                <div class="form-card">
                                    {{-- =====================================================  --}}
                                    {{-- Bất động sản  --}}
                                    @if($categorys_ids->id == 1)
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Loại bất động sản:</label><br>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_estate_category">
                                                <option value="Biệt thự, Villa, Penthouse">Biệt thự, Villa, Penthouse</option>
                                                <option value="Nhà chung cư, tập thể">Nhà chung cư, tập thể</option>
                                                <option value="Nhà mặt tiền, mặt phố">Nhà mặt tiền, mặt phố</option>
                                                <option value="Nhà hẻm, ngỏ nhỏ">Nhà hẻm, ngỏ nhỏ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Địa chỉ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ đầy đủ" name="txt_estate_address">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên dự án: </label>
                                            <input type="text" class="form-control" placeholder="Nhập tên dự án" name="txt_estate_name_project">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Diện tích đất: </label>
                                            <input type="text" class="form-control" placeholder="Nhập diện tích đất" name="txt_estate_land_area">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Tầng/lầu: </label>
                                            <input type="text" class="form-control" placeholder="Nhập tầng/lầu" name="txt_estate_floor">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phòng ngủ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập phòng ngủ" name="txt_estate_bedroom">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phòng tắm: </label>
                                            <input type="text" class="form-control" placeholder="Nhập phòng tắm" name="txt_estate_bathroom">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Pháp lý: </label>
                                            <input type="text" class="form-control" placeholder="Nhập pháp lý" name="txt_estate_juridical">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Diện tích sử dụng: </label>
                                            <input type="text" class="form-control" placeholder="Nhập diện tích sử dụng" name="txt_estate_area_used">
                                        </div>
                                    </div>
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 2)
                                    {{-- =====================================================  --}}
                                    {{-- Xe cộ  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Màu xe: </label>
                                            <input type="text" class="form-control" placeholder="Nhập màu xe" name="txt_car_color">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phiên bản:</label><br>
                                            <select class="form-control" name="txt_car_version">
                                                <option value="">
                                                    - - Chọn - -
                                                </option>
                                                <option value="2.2 DAT Tự động, Dầu, Minivan (MPV)">
                                                    2.2 DAT Tự động, Dầu, Minivan (MPV)
                                                </option>
                                                <option value="2.2 DATHTự động, Dầu, Minivan (MPV)">
                                                    2.2 DATH Tự động, Dầu, Minivan (MPV)
                                                </option>
                                                <option value="3.3 GAT Tự động, Xăng, Minivan (MPV)">
                                                    3.3 GAT Tự động, Xăng, Minivan (MPV)
                                                </option>
                                                <option value="3.3 GATH Tự động, Xăng, Minivan (MPV)">
                                                    3.3 GATH Tự động, Xăng, Minivan (MPV)
                                                </option>
                                                <option value="Tôi không rõ">
                                                    Tôi không rõ
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Xuất xứ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập xuất xứ" name="txt_car_origin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng:</label><br>
                                            <select class="form-control" name="txt_car_status">
                                                <option value="">
                                                    - - Chọn - -
                                                </option>
                                                <option value="Đã sử dụng">
                                                    Đã sử dụng
                                                </option>
                                                <option value="Mới">
                                                    Mới
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Hãng xe: </label>
                                            <input type="text" class="form-control" placeholder="Nhập hãng xe" name="txt_car_produce_name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dòng xe:</label>
                                            <input type="text" class="form-control" placeholder="Nhập dòng xe" name="txt_car_model_name">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Năm đăng ký: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true" id="selectElementId" name="txt_car_register_year">
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Loại xe:</label><br>
                                            <select class="form-control" name="txt_car_category">
                                                <option value="">- - Chọn - -</option>
                                                <option value="Xe số">Xe số</option>
                                                <option value="Tay ga">Tay ga</option>
                                                <option value="Tay côn/Moto">Tay côn/Moto</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Số Km đã đi: </label><br>
                                            <input type="number" class="form-control" placeholder="Nhập số Km đã đi" name="txt_car_number_kilometer">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nhiên liệu:</label>
                                            <input type="text" class="form-control" placeholder="Nhập nhiên liệu" name="txt_car_fuel">
                                        </div>
                                    </div>
                                    {{-- Xe cộ  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 3)
                                    {{-- =====================================================  --}}
                                    {{-- Đồ điện tử  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Hãng sản xuất:</label><br>
                                            <input type="text" class="form-control" placeholder="Nhập hãng sản xuất" name="txt_electron_manufacturer">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dòng máy: </label>
                                            <input type="text" class="form-control" placeholder="Nhập dòng máy" name="txt_electron_model_machine">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Màu sắc:</label><br>
                                            <input type="text" class="form-control" placeholder="Nhập màu sắc" name="txt_electron_color">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng:</label><br>
                                            <select class="form-control" name="txt_electron_status">
                                                <option value="">- - Chọn - -</option>
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng (chưa sửa chữa)">Đã sử dụng (chưa sửa chữa)</option>
                                                <option value="Đã sử dụng (qua sửa chữa)">Đã sử dụng (qua sửa chữa)</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Đồ điện tử  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 4)
                                    {{-- =====================================================  --}}
                                    {{-- Việc làm tuyển sinh  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Loại hình làm việc: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_work_type">
                                                <option value="Toàn thời gian cố định">Toàn thời gian cố định</option>
                                                <option value="Toàn thời gian tạm thời">Toàn thời gian tạm thời</option>
                                                <option value="Bán thời gian cố định">Bán thời gian cố định</option>
                                                <option value="Bán thời gian tạm thời">Bán thời gian tạm thời</option>
                                                <option value="Cộng tác viên">Cộng tác viên</option>
                                                <option value="Làm việc từ xa">Làm việc từ xa</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tuổi: </label>
                                            <input type="number" class="form-control" placeholder="Nhập số tuổi" name="txt_work_old">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Giới tính: </label><br>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="txt_work_sex" value="Nam"> Nam
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="txt_work_sex" value="Nữ"> Nữ
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Bằng cấp: </label>
                                            <input type="text" class="form-control" placeholder="Nhập bằng cấp" name="txt_work_certificate">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Ngoại ngữ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập ngoại ngữ" name="txt_work_foreign_language">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Vị trí: </label>
                                            <input type="text" class="form-control" placeholder="Nhập vị trí" name="txt_work_position">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nghề nghiệp: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_work_job">
                                                <option value="An ninh, bảo vệ">An ninh, bảo vệ</option>
                                                <option value="Bán hàng">Bán hàng</option>
                                                <option value="Bếp, pha chế">Bếp, pha chế</option>
                                                <option value="Cắt tóc, gội đầu, làm móng">Cắt tóc, gội đầu, làm móng</option>
                                                <option value="Giám đốc, Quản lý, Trưởng phòng">Giám đốc, Quản lý, Trưởng phòng</option>
                                                <option value="Giao chở hàng">Giao chở hàng</option>
                                                <option value="Giáo viên, Gia sư">Giáo viên, Gia sư</option>
                                                <option value="Kế toán, Thu ngân">Kế toán, Thu ngân</option>
                                                <option value="Kinh doanh">Kinh doanh</option>
                                                <option value="Kỹ sư điện, Điện tử, Công nghệ thông tin">Kỹ sư điện, Điện tử, Công nghệ thông tin</option>
                                                <option value="Kỹ sư cơ khí, Xây dựng, Mỹ thuật, In">Kỹ sư cơ khí, Xây dựng, Mỹ thuật, In</option>
                                                <option value="Lái xe, Phụ xe">Lái xe, Phụ xe</option>
                                                <option value="Lao động phổ thông khác">Lao động phổ thông khác</option>
                                                <option value="Massage, Mỹ Phẩm">Massage, Mỹ Phẩm</option>
                                                <option value="May mặc, Giày da">May mặc, Giày da</option>
                                                <option value="NV Văn phòng, Hành chính, Nhân sự">NV Văn phòng, Hành chính, Nhân sự</option>
                                                <option value="Người giúp việc, tạp vụ">Người giúp việc, tạp vụ</option>
                                                <option value="Nhân viên Nhà Hàng, Khách Sạn, Quán">Nhân viên Nhà Hàng, Khách Sạn, Quán</option>
                                                <option value="Tuyển Ngành nghề khác">Tuyển Ngành nghề khác</option>
                                                <option value="Tư vấn chăm sóc khách hàng">Tư vấn chăm sóc khách hàng</option>
                                                <option value="Thợ mộc, Điện, Xây dựng, Cơ khí">Thợ mộc, Điện, Xây dựng, Cơ khí</option>
                                                <option value="Làm việc bán thời gian">Làm việc bán thời gian</option>
                                                <option value="Y dược">Y dược</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Kinh nghiệm: </label>
                                            <input type="text" class="form-control" placeholder="Nhập kinh nghiệm" name="txt_work_experience">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mức lương: </label>
                                            <input type="text" class="form-control" placeholder="Nhập mức lương" name="txt_work_salary_level">
                                        </div>
                                    </div>
                                    {{-- Việc làm tuyển sinh  --}}
                                    {{-- =====================================================  --}}

                                    {{-- =====================================================  --}}
                                    {{-- thu-cung số 5 không có danh mục cấp 2  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 6)
                                    {{-- =====================================================  --}}
                                    {{-- do-an-thuc-pham-va-loai-khac  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Xuất xứ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập xuất xứ" name="txt_food_origin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hạn sử dụng: </label>
                                            <input type="text" class="form-control" placeholder="Nhập hạn sử dụng" name="txt_food_expiration">
                                        </div>
                                    </div>
                                    {{-- do-an-thuc-pham-va-loai-khac  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 7)
                                    {{-- =====================================================  --}}
                                    {{-- tu-lanh-may-lanh-may-giat  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_refrigerator_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hãng sản xuất: </label>
                                            <input type="text" class="form-control" placeholder="Nhập hãng sản xuất" name="txt_refrigerator_manufacturer">
                                        </div>
                                    </div>
                                    {{-- tu-lanh-may-lanh-may-giat  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 8)
                                    {{-- =====================================================  --}}
                                    {{-- do-gia-dung-noi-that-cay-canh  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_furniture_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        </div>
                                    </div>
                                    {{-- do-gia-dung-noi-that-cay-canh  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 9)
                                    {{-- =====================================================  --}}
                                    {{-- thoi-trang-do-dung-ca-nhan  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_fashion_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Loại sản phẩm: </label><br>
                                            <select class="form-control" name="txt_fashion_type_product">
                                                <option value="Đồ Nam">Đồ Nam</option>
                                                <option value="Đồ Nữ">Đồ Nữ</option>
                                                <option value="Cả hai">Cả hai</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- thoi-trang-do-dung-ca-nhan  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 10)
                                    {{-- =====================================================  --}}
                                    {{-- giai-tri-the-thao-so-thich  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_sport_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        </div>
                                    </div>
                                    {{-- giai-tri-the-thao-so-thich  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 11)
                                    {{-- =====================================================  --}}
                                    {{-- do-van-phong-cong-nong-nghiep  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_office_furniture_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        </div>
                                    </div>
                                    {{-- do-van-phong-cong-nong-nghiep  --}}
                                    {{-- =====================================================  --}}

                                    @elseif($categorys_ids->id == 12)
                                    {{-- =====================================================  --}}
                                    {{-- dich-vu-du-lich  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Loại hình làm việc: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_service_type_work">
                                                <option value="Toàn thời gian cố định">Toàn thời gian cố định</option>
                                                <option value="Toàn thời gian tạm thời">Toàn thời gian tạm thời</option>
                                                <option value="Bán thời gian cố định">Bán thời gian cố định</option>
                                                <option value="Bán thời gian tạm thời">Bán thời gian tạm thời</option>
                                                <option value="Cộng tác viên">Cộng tác viên</option>
                                                <option value="Làm việc từ xa">Làm việc từ xa</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kinh nghiệm làm việc: </label>
                                            <input type="text" class="form-control" placeholder="Nhập kinh nghiệm làm việc" name="txt_service_experience_work">
                                        </div>
                                    </div>
                                    {{-- dich-vu-du-lich --}}
                                    {{-- =====================================================  --}}
                                    @elseif($categorys_ids->id == 13)
                                    {{-- =====================================================  --}}
                                    {{-- me-va-be  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng: </label><br>
                                            <select class="form-control" name="txt_mom_baby_status">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Loại sản phẩm: </label><br>
                                            <select class="form-control" name="txt_mom_baby_type_product">
                                                <option value="Đồ cho bé">Đồ cho bé</option>
                                                <option value="Đồ cho mẹ">Đồ cho mẹ</option>
                                                <option value="Cả hai">Cả hai</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- me-va-be  --}}
                                    {{-- =====================================================  --}}
                                    @endif
                                </div>

                                <input type="button" name="previous" class="previous action-button-previous" value="Quay lại" />
                                <input type="button" name="next" class="next action-button" value="Tiếp tục" />
                            </fieldset>
                            {{-- <!-- fieldsets thông tin -->  --}}
                            {{-- ==============================================================================================  --}}






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
                                                {{ $categorys_ids->category_name }}
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
                                                <option value="">Chọn Tỉnh/TP</option>
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
                                                <option value="">Chọn Huyện</option>
                                                @foreach ($province as $item_province)
                                                @php($district_id = DB::table('districts')->where('province_id',$item_province->id)->get())
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
                                            <input type="text" class="form-control" placeholder="Nhập tiêu đề đăng tin" name="txt_title" id="txt_title">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Loại tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Loại tin: </label>
                                            <select class="selectpicker form-control" data-live-search="true" name="txt_post_type_id" id="txt_post_type_id">
                                                <option value="">- - Chọn loại tin - -</option>
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
                                            <input type="number" class="form-control" placeholder="Nhập giá" name="txt_price" id="txt_price" maxlength="20">
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
                                            <input type="text" class="form-control" placeholder="Nhập đơn vị tính" data-toggle="popover" data-trigger="hover" data-content="Cái, Chiếc, m2, Ngày, Giờ ..." name="txt_unit_price" id="txt_unit_price">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Nội dung đăng tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Nội dung đăng tin: </label>
                                            <textarea class="form-control" name="txt_content" id="txt_content"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Từ khóa tìm kiếm: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Từ khóa tìm kiếm: </label>
                                            <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="txt_tag_search">
                                        </div>
                                    </div>

                                    {{-- <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Thời hạn: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-5" style="padding:2px;">
                                            <label class="label-title-mobile">Thời hạn: </label>
                                            <select class="selectpicker form-control" data-live-search="true" required name="txt_date_expired">
                                                <option value="3">3 Ngày</option>
                                                <option value="5">5 Ngày</option>
                                                <option value="7">7 Ngày</option>
                                            </select>
                                        </div>
                                    </div> --}}

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
                                                        Chọn hình ảnh
                                                    </span>
                                                    <input type="file" name="txt_images[]" id="files" multiple accept="image/jpeg, image/png, image/gif,">
                                                </span><br><br>
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

                                <input type="button" class="previous action-button-previous" value="Quay lại" />
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
    function validateForm() {
        var category_firsts_id = document.forms["myForm"]["txt_category_firsts_id"].value;
        var content = document.forms["myForm"]["txt_content"].value;
        var images = document.forms["myForm"]["txt_images[]"].value;
        var province = document.forms["myForm"]["txt_province"].value;
        var district = document.forms["myForm"]["txt_district"].value;
        var title = document.forms["myForm"]["txt_title"].value;
        var post_type_id = document.forms["myForm"]["txt_post_type_id"].value;
        var price = document.forms["myForm"]["txt_price"].value;
        var unit_price = document.forms["myForm"]["txt_unit_price"].value;


        if (category_firsts_id == "") {
            alert("Bạn chưa chọn Danh Mục. Vui lòng quay lại!");
            return false;
        }
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
        if (images == "") {
            alert("Bạn chưa chọn Hình Ảnh!");
            document.getElementById('files').focus();
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
