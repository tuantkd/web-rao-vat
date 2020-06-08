@extends('layout.layout_home')
@section('title', 'Xem trang cá nhân')
<!-- ==================================================== -->


<!-- ==================================================== -->
@section('content')

<div class="container" style="padding-top:15px;margin-top:70px;padding:5px;">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <div class="card rounded-5">
                <div class="card-body show pt-0">
                    <h3>
                        <b>Chọn danh mục tin đăng</b>
                    </h3>
                    <div class="radio-group row justify-content-between px-3">

                        <div class="card-block radio">
                            <a href="{{ url('post-new') }}">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-home'></i> Bất động sản</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="post_new_first.html">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-car'></i> Xe cộ</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="post_new_first.html">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-mobile-alt'></i> Đồ điện tử</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-business-time'></i> Việc làm</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-dog'></i> Thú cưng</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-hamburger'></i> Đồ ăn, thực phẩm và các loại khác</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-subway'></i> Tủ lạnh, máy lạnh, máy giặt</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-baby'></i> Mẹ và bé</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-couch'></i> Đồ gia dụng, nội thất, cây cảnh</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-tshirt'></i> Thời trang, đồ dùng cá nhân</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-book'></i> Đồ văn phòng, công nông nghiệp</span>
                                </div>
                            </a>
                        </div>

                        <div class="card-block radio">
                            <a href="">
                                <div class="row d-flex px-3">
                                    <span><i class='fas fa-phone-volume'></i> Dịch vụ, du lịch</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

@endsection
<!-- ==================================================== -->
