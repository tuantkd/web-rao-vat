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
                        <form id="msform">
                            {{-- <!-- progressbar --> --}}
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Chọn danh mục</strong></li>
                                <li id="personal"><strong>Thông tin danh mục</strong></li>
                                <li id="payment"><strong>Đăng tin</strong></li>
                                <li id="confirm"><strong>Hoàn tất</strong></li>
                            </ul>
                            {{-- <!-- progressbar --> --}}








                            {{-- ==============================================================================================  --}}
                            {{-- <!-- fieldsets danh mục --> --}}
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
                                                <input type="radio" class="form-check-input" value="{{ $category_child_1->id }}" name="category_firsts_id" id="check-box">
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
                            {{-- <!-- fieldsets danh mục --> --}}
                            {{-- ==============================================================================================  --}}










                            {{-- ==============================================================================================  --}}
                            {{-- <!-- fieldsets thông tin -->  --}}
                            <fieldset>
                                <div class="form-card">
                                    {{-- =====================================================  --}}
                                    {{-- Bất động sản  --}}
                                    @if($categorys_ids->id == 1)
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Loại bất động sản:</label><br>
                                            <select class="selectpicker form-control" data-live-search="true">
                                                <option value="">Biệt thự, Villa, Penthouse</option>
                                                <option value="">Nhà chung cư, tập thể</option>
                                                <option value="">Nhà mặt tiền, mặt phố</option>
                                                <option value="">Nhà hẻm, ngỏ nhỏ</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Địa chỉ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ đầy đủ">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên dự án: </label>
                                            <input type="text" class="form-control" placeholder="Nhập tên dự án">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Diện tích đất: </label>
                                            <input type="text" class="form-control" placeholder="Nhập diện tích đất">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Tầng/lầu: </label>
                                            <input type="text" class="form-control" placeholder="Nhập tầng/lầu">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phòng ngủ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập phòng ngủ">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phòng tắm: </label>
                                            <input type="text" class="form-control" placeholder="Nhập phòng tắm">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Pháp lý: </label>
                                            <input type="text" class="form-control" placeholder="Nhập pháp lý">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Diện tích sử dụng: </label>
                                            <input type="text" class="form-control" placeholder="Nhập diện tích sử dụng">
                                        </div>
                                    </div>
                                    {{-- =====================================================  --}}


                                    @elseif($categorys_ids->id == 2)
                                    {{-- =====================================================  --}}
                                    {{-- Xe cộ  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Màu xe: </label>
                                            <input type="text" class="form-control" placeholder="Nhập màu xe">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Phiên bản:</label><br>
                                            <select class="form-control">
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
                                            <input type="text" class="form-control" placeholder="Nhập xuất xứ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng:</label><br>
                                            <select class="form-control">
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
                                            <input type="text" class="form-control" placeholder="Nhập hãng xe">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dòng xe:</label>
                                            <input type="text" class="form-control" placeholder="Nhập dòng xe">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Năm sản xuất: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true" id="selectElementId">
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dòng xe:</label>
                                            <input type="text" class="form-control" placeholder="Nhập dòng xe">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Số Km đã đi: </label><br>
                                            <input type="number" class="form-control" placeholder="Nhập số Km đã đi">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nhiên liệu:</label>
                                            <input type="text" class="form-control" placeholder="Nhập nhiên liệu">
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
                                            <input type="text" class="form-control" placeholder="Nhập hãng sản xuất">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Dòng máy: </label>
                                            <input type="text" class="form-control" placeholder="Nhập dòng máy">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Màu sắc:</label><br>
                                            <input type="text" class="form-control" placeholder="Nhập màu sắc">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tình trạng:</label><br>
                                            <select class="form-control">
                                                <option value="">
                                                    - - Chọn - -
                                                </option>
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
                                            <select class="selectpicker form-control" data-live-search="true">
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
                                            <input type="number" class="form-control" placeholder="Nhập số tuổi">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Giới tính: </label><br>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio"> Nam
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optradio"> Nữ
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Bằng cấp: </label>
                                            <input type="text" class="form-control" placeholder="Nhập bằng cấp">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Ngoại ngữ: </label>
                                            <input type="text" class="form-control" placeholder="Nhập ngoại ngữ">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Vị trí: </label>
                                            <input type="text" class="form-control" placeholder="Nhập vị trí">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nghề nghiệp: </label><br>
                                            <select class="selectpicker form-control" data-live-search="true">
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
                                            <input type="text" class="form-control" placeholder="Nhập kinh nghiệm">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mức lương: </label>
                                            <input type="text" class="form-control" placeholder="Nhập mức lương">
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
                                            <input type="text" class="form-control" placeholder="Nhập xuất xứ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hạn sử dụng: </label>
                                            <input type="text" class="form-control" placeholder="Nhập hạn sử dụng">
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
                                            <select class="form-control">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hãng sản xuất: </label>
                                            <input type="text" class="form-control" placeholder="Nhập hãng sản xuất">
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
                                            <select class="form-control">
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
                                            <select class="form-control">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Loại sản phẩm: </label><br>
                                            <select class="form-control">
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
                                            <select class="form-control">
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
                                            <select class="form-control">
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
                                            <select class="selectpicker form-control" data-live-search="true">
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
                                            <input type="text" class="form-control" placeholder="Nhập kinh nghiệm làm việc">
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
                                            <select class="form-control">
                                                <option value="Mới">Mới</option>
                                                <option value="Đã sử dụng">Đã sử dụng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Loại sản phẩm: </label><br>
                                            <select class="form-control">
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
                                        <div class="form-group col-12 col-sm-12 col-md-5 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Tỉnh thành:</label>
                                            <select class="selectpicker form-control" data-live-search="true">
                                                <option value="">- - Chọn Tỉnh/TP - -</option>
                                                <option value="">TP Hồ Chí Minh</option>
                                                <option value="">Hà Nội</option>
                                                <option value="">Đà Nẵng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-4 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Quận huyện:</label>
                                            <select class="selectpicker form-control" data-live-search="true">
                                                <option value="">- - Chọn Huyện/Quận - -</option>
                                                <option value="">Quận 8</option>
                                                <option value="">Quận 9</option>
                                                <option value="">Quận 12</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Tiêu đề đăng tin: </label>
                                        </div>
                                        <div class="form-group col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Tiêu đề đăng tin: </label>
                                            <input type="text" class="form-control" placeholder="Nhập tiêu đề đăng tin">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Loại tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9 text-left" style="padding:2px;">
                                            <label class="label-title-mobile">Loại tin: </label>
                                            <select class="selectpicker form-control" data-live-search="true">
                                                <option value="">- - Chọn loại tin - -</option>
                                                <option value="">Cần bán</option>
                                                <option value="">Cần mua</option>
                                                <option value="">Hợp tác - Cộng tác</option>
                                                <option value="">Quảng cáo</option>
                                                <option value="">Rao vặt</option>
                                                <option value="">Sang nhượng</option>
                                                <option value="">Thuê - Cho thuê</option>
                                                <option value="">Việc làm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12 col-sm-12 col-md-3" style="padding:2px;">
                                            <label class="label-title">Giá: </label>
                                        </div>
                                        <div class="form-group col-8 col-sm-8 col-md-4" style="padding:2px;">
                                            <label class="label-title-mobile">Giá: </label>
                                            <input type="number" class="form-control" placeholder="Nhập giá">
                                        </div>
                                        <div class="form-group col-4 col-sm-4 col-md-2" style="padding:2px;">
                                            <label class="label-title-mobile">đơn vị</label>
                                            <select class="selectpicker form-control" data-live-search="true">
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
                                            <input type="text" class="form-control" placeholder="Nhập đơn vị tính" data-toggle="popover" data-trigger="hover" data-content="Cái, Chiếc, m2, Ngày, Giờ ...">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Nội dung đăng tin: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Nội dung đăng tin: </label>
                                            <textarea name="" class="form-control" rows="10" placeholder="Nhập nội dung miêu tả đầy đủ"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Từ khóa tìm kiếm: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Từ khóa tìm kiếm: </label>
                                            <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Thời hạn: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-5" style="padding:2px;">
                                            <label class="label-title-mobile">Thời hạn: </label>
                                            <select class="selectpicker form-control" data-live-search="true">
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
                                                        Chọn hình ảnh
                                                    </span>
                                                    <input type="file" name="files[]" id="files" multiple accept="image/jpeg, image/png, image/gif,"><br />
                                                </span><br><br>
                                                <output id="Filelist"></output>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="padding:2px;">
                                            <label class="label-title">Ẩn tin này: </label>
                                        </div>
                                        <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                            <label class="label-title-mobile">Ẩn tin này: </label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="1">
                                                <label class="form-check-label">(Khi xem các bản tin khác của
                                                    bạn)</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <input type="button" class="previous action-button-previous" value="Quay lại" />

                                <input type="button" name="next" class="next action-button" value="Tiếp tục" />
                            </fieldset>
                            {{-- ==============================================================================================  --}}








                            {{-- ==============================================================================================  --}}
                            {{-- <!-- fieldsets hoàn tất -->  --}}
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Hoàn tất</h2>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif">
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <h5>Bản tin của bạn sẽ được đăng ngay sau khi biên tập viên kiểm duyệt</h5>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <input type="submit" class="post-new-button" value="Đăng tin ngay" />
                                    </div>
                                </div>
                            </fieldset>
                            {{-- <!-- fieldsets hoàn tất -->  --}}
                            {{-- ==============================================================================================  --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- col-sm-10 -->
        <div class="col-sm-1"></div>
    </div>
</div>


<script>
    var max = new Date().getFullYear()
        , min = max - 20
        , select = document.getElementById('selectElementId');

    for (var i = max; i >= min; i--) {
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

</script>


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


<script>
    window.addEventListener("beforeunload", function(event) {
        event.returnValue = "Bạn có chắc chắc chắn";
    });

</script>


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

@endsection
<!-- ==================================================== -->
