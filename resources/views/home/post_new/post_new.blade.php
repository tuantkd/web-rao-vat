@extends('layout.layout_home')
@section('title', 'Xem trang cá nhân')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

    <div class="container" style="padding-top:15px;margin-top:70px;padding:5px;">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-1"></div>
            <!-- col-sm-10 -->
            <div class="col-sm-10">

            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                          <li class="active" id="account"><strong>Chọn danh mục</strong></li>
                          <li id="personal"><strong>Thông tin danh mục</strong></li>
                          <li id="payment"><strong>Đăng tin</strong></li>
                          <li id="confirm"><strong>Hoàn tất</strong></li>
                        </ul>

                        <!-- fieldsets danh mục -->
                        <fieldset>
                          <div class="form-card">
                            <div class="card-block">
                              <div class="form-check text-left">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="" name="optradio"
                                  style="width:20px;height:20px;">
                                  <span style="margin-left:10px;font-size:20px;">
                                    Mua nhà, bán nhà
                                  </span>
                                </label>
                              </div>
                            </div>

                            <div class="card-block">
                              <div class="form-check text-left">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="" name="optradio"
                                  style="width:20px;height:20px;">
                                  <span style="margin-left:10px;font-size:20px;">
                                    Căn hộ/Chung cư
                                  </span>
                                </label>
                              </div>
                            </div>

                            <div class="card-block">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="" name="optradio"
                                  style="width:20px;height:20px;">
                                  <span style="margin-left:10px;font-size:20px;">
                                    Phòng trọ
                                  </span>
                                </label>
                              </div>
                            </div>

                            <div class="card-block">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" value="" name="optradio"
                                  style="width:20px;height:20px;">
                                  <span style="margin-left:10px;font-size:20px;">
                                    Văn phòng, Mặt bằng kinh doanh
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <a class="a-previous" href="post_new_parent.html">Quay lại</a>

                          <input type="button" name="next" class="next action-button" value="Tiếp tục"/>
                        </fieldset>

                        <!-- fieldsets thông tin -->
                        <fieldset>
                          <div class="form-card">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Loại bất động sản</label><br>
                                <select class="selectpicker form-control" data-live-search="true">
                                  <option value="">Biệt thự, Villa, Penthouse</option>
                                  <option value="">Nhà chung cư, tập thể</option>
                                  <option value="">Nhà mặt tiền, mặt phố</option>
                                  <option value="">Nhà hẻm, ngỏ nhỏ</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" placeholder="Nhập địa chỉ đầy đủ">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Tên dự án</label>
                                <input type="text" class="form-control" placeholder="Nhập tên dự án">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Diện tích đất</label>
                                <input type="text" class="form-control" placeholder="Nhập diện tích đất">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label>Tầng/lầu</label>
                                <input type="text" class="form-control" placeholder="Nhập tầng/lầu">
                              </div>
                              <div class="form-group col-md-4">
                                <label>Phòng ngủ</label>
                                <input type="text" class="form-control" placeholder="Nhập phòng ngủ">
                              </div>
                              <div class="form-group col-md-4">
                                <label>Phòng tắm</label>
                                <input type="text" class="form-control" placeholder="Nhập phòng tắm">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Pháp lý</label>
                                <input type="text" class="form-control" placeholder="Nhập pháp lý">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Diện tích sử dụng</label>
                                <input type="text" class="form-control" placeholder="Nhập diện tích sử dụng">
                              </div>
                            </div>
                          </div>

                          <input type="button" name="previous" class="previous action-button-previous" value="Quay lại"/>
                          <input type="button" name="next" class="next action-button" value="Tiếp tục" />
                        </fieldset>

                        <!-- fieldsets đăng tin -->
                        <fieldset>
                          <div class="form-card">

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Chuyên mục đã chọn</label>
                              </div>
                              <div class="form-group col-md-9 text-left" style="padding:2px;">
                                <span class="category">
                                  Bất động sản / Mua nhà, bán nhà
                                </span>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Tỉnh thành/Quận huyện</label>
                              </div>
                              <div class="form-group col-md-5 text-left" style="padding:2px;">
                                <select class="selectpicker form-control" data-live-search="true">
                                  <option value="">- - Chọn Tỉnh/TP - -</option>
                                  <option value="">TP Hồ Chí Minh</option>
                                  <option value="">Hà Nội</option>
                                  <option value="">Đà Nẵng</option>
                                </select>
                              </div>
                              <div class="form-group col-md-4 text-left" style="padding:2px;">
                                <select class="selectpicker form-control" data-live-search="true">
                                  <option value="">- - Chọn Huyện/Quận - -</option>
                                  <option value="">Quận 8</option>
                                  <option value="">Quận 9</option>
                                  <option value="">Quận 12</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Tiêu đề đăng tin</label>
                              </div>
                              <div class="form-group col-md-9 text-left" style="padding:2px;">
                                <input type="text" class="form-control" placeholder="Nhập tiêu đề đăng tin">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Loại tin</label>
                              </div>
                              <div class="form-group col-md-9 text-left" style="padding:2px;">
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
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Giá</label>
                              </div>
                              <div class="form-group col-md-4" style="padding:2px;">
                                <input type="number" class="form-control" placeholder="Nhập giá">
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-2" style="padding:2px;">
                                <select class="selectpicker form-control" data-live-search="true">
                                  <option value="Đ">Đ</option>
                                  <option value="USD">USD</option>
                                  <option value="Lượng vàng">Lượng vàng</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Đơn vị tính</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-4" style="padding:2px;">
                                <input type="text" class="form-control" placeholder="Nhập đơn vị tính"
                                data-toggle="popover" data-trigger="hover" 
                                data-content="Cái, Chiếc, m2, Ngày, Giờ ...">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Nội dung đăng tin</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                <textarea name="" class="form-control" rows="10" 
                                placeholder="Nhập nội dung miêu tả đầy đủ"></textarea>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Từ khóa tìm kiếm</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                <input type="text" class="form-control"
                                placeholder="Nhập từ khóa tìm kiếm">
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Thời hạn</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-5" style="padding:2px;">
                                <select class="selectpicker form-control" data-live-search="true">
                                  <option value="1">1 Ngày</option>
                                  <option value="2">2 Ngày</option>
                                  <option value="3">3 Ngày</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Chọn hình ảnh</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                <input type="file" id="myFile" class="custom-file-upload" multiple size="50"
                                onchange="myFunction()">
                                <p id="demo"></p>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-3" style="padding:2px;">
                                <label>Ẩn tin này</label>
                              </div>
                              <div class="form-group col-12 col-sm-12 col-md-9" style="padding:2px;">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox"value="1">
                                  <label class="form-check-label">(Khi xem các bản tin khác của bạn)</label>
                                </div>
                              </div>
                            </div>

                          </div>

                          <input type="button" class="previous action-button-previous" value="Quay lại"/> 

                          <input type="button" name="next" class="next action-button" value="Tiếp tục"/>
                        </fieldset>

                        <!-- fieldsets hoàn tất -->
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
                                    <input type="submit" class="post-new-button" value="Đăng tin ngay"/>
                                </div>
                            </div>
                        </fieldset>
                      <!-- fieldsets hoàn tất -->
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <!-- col-sm-10 -->
            <div class="col-sm-1"></div>
        </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 600
        });
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 600
        });
        });

        $('.radio-group .radio').click(function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function(){
            return false;
        })

        });
    </script>

@endsection
<!-- ==================================================== -->