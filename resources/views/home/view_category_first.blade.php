@extends('layout.layout_home') @section('title', 'Xem danh mục cấp 1')
<!-- ==================================================== -->

<!-- ==================================================== -->
@section('content')

<div class="container" style="padding-top:15px;margin-top:60px;padding:5px;">
    <div class="row">
        <div class="col-sm-12">
            <!-- search -->
            <div class="card search-quick" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    <b><i class='fas fa-search' style="font-size:18px;"></i>&ensp;Tìm kiếm nhanh</b>
                </div>
                <div class="card-body" style="padding:5px;">
                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-2 col-lg-2" style="padding-right:1px;">
                            <select id="state" class="form-control selectpicker" data-live-search="true">
                                <option>Chọn tỉnh</option>
                                @foreach ($province as $item_province)
                                <option value="{{ $item_province->province_name }}">{{ $item_province->province_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 district" style="padding-left:1px;">
                            <select id="city" class="form-control">
                                @foreach ($province as $item_province)
                                @php
                                $district_id = DB::table('districts')->where('province_id',
                                $item_province->id)->get();
                                @endphp

                                @foreach ($district_id as $item_district)
                                <option value="{{ $item_district->district_name }}"> {{ $item_province->province_name }}-{{ $item_district->district_name }}
                                </option>
                                @endforeach

                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 category" style="padding-left:1px;padding-right:1px;">
                            <select class="selectpicker form-control" data-live-search="true" data-show-content="true" style="z-index:5;">
                                <option data-content="<i class='far fa-list-alt'></i> Tất cả danh mục">
                                    Tất cả danh mục
                                </option>
                                @foreach ($allCategory as $item_category)
                                @if($item_category->id == 1)
                                <option data-content="<i class='fas fa-home'></i> Bất động sản" value="{{ $item_category->id }}">
                                    Bất động sản
                                </option>
                                @elseif($item_category->id == 2)
                                <option data-content="<i class='fas fa-car'></i> Xe cộ">
                                    Xe cộ
                                </option>
                                @elseif($item_category->id == 3)
                                <option data-content="<i class='fas fa-mobile-alt'></i> Đồ điện tử">
                                    Đồ điện tử
                                </option>
                                @elseif($item_category->id == 4)
                                <option data-content="<i class='fas fa-business-time'></i> Việc làm">
                                    Việc làm, tuyển sinh
                                </option>
                                @elseif($item_category->id == 5)
                                <option data-content="<i class='fas fa-dog'></i> Thú cưng">
                                    Thú cưng
                                </option>
                                @elseif($item_category->id == 6)
                                <option data-content="<i class='fas fa-hamburger'>
                                            </i> Đồ ăn, thực phẩm và các loại khác">
                                    Đồ ăn, thực phẩm và các loại khác
                                </option>
                                @elseif($item_category->id == 7)
                                <option data-content="<i class='fas fa-subway'></i> Tủ lạnh, máy lạnh, máy giặt">
                                    Tủ lạnh, máy lạnh, máy giặt
                                </option>
                                @elseif($item_category->id == 8)
                                <option data-content="<i class='fas fa-couch'></i> Đồ gia dụng, nội thất, cây cảnh">
                                    Đồ gia dụng, nội thất, cây cảnh
                                </option>
                                @elseif($item_category->id == 9)
                                <option data-content="<i class='fas fa-tshirt'></i> Thời trang, đồ dùng cá nhân">
                                    Thời trang, đồ dùng cá nhân
                                </option>
                                @elseif($item_category->id == 10)
                                <option data-content="<i class='fas fa-volleyball-ball'></i> Giải trí, thể thao, sở thích">
                                    Giải trí, thể thao, sở thích
                                </option>
                                @elseif($item_category->id == 11)
                                <option data-content="<i class='fas fa-book'></i> Đồ văn phòng, công nông nghiệp">
                                    Đồ văn phòng, công nông nghiệp
                                </option>
                                @else
                                <option data-content="<i class='fas fa-phone-volume'></i> Dịch vụ, du lịch">
                                    Dịch vụ, du lịch
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 search" style="padding-left:1px;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm ...">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- search -->

            <!-- breadcrumb -->
            @foreach ($category as $key => $value)
            <ul class="breadcrumb breadcrumb-mobile" style="background-color:white;">
                <li class="breadcrumb-item">
                    <a href="#" style="text-decoration:none;color:red;">{{ $value->category_name }}</a>
                </li>
                @foreach ($category_first as $item_category_first)
                <li class="breadcrumb-item active">{{ $item_category_first->category_child_name }}</li>
                @endforeach
            </ul>
            <!-- breadcrumb -->

            <!-- category-child -->
            <div class="card category-mobile" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    @foreach ($category_first as $item_category_first)
                    @if($value->id == 1)
                    <b><i class='fas fa-home' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 2)
                    <b><i class='fas fa-car' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 3)
                    <b><i class='fas fa-mobile-alt' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 4)
                    <b><i class='fas fa-business-time' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 5)
                    <b><i class='fas fa-dog' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 6)
                    <b><i class='fas fa-hamburger' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 7)
                    <b><i class='fas fa-subway' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 8)
                    <b><i class='fas fa-couch' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 9)
                    <b><i class='fas fa-tshirt' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 10)
                    <b><i class='fas fa-volleyball-ball' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @elseif($value->id == 11)
                    <b><i class='fas fa-book' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @else
                    <b><i class='fas fa-phone-volume' style="font-size:20px;"></i>&ensp;{{ $value->category_name }} / {{ $item_category_first->category_child_name }}</b>
                    @endif
                    @endforeach
                </div>
                <div class="card-body" style="padding:10px;">
                    <div class="row">

                        @foreach ($allCategoryFirst as $item_allCategoryFirst)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="{{ route('view_category_first', [ Str::slug($item_allCategoryFirst->category_child_name),$item_allCategoryFirst->id]) }}" style="text-decoration:none;">
                                <b style="color:red;">{{ $item_allCategoryFirst->category_child_name}}</b>
                            </a> 10,123
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @endforeach
            <!-- category-child -->


            <!-- post-new -->
            <div class="card post-new" style="margin-bottom:10px;z-index:2px;">
                <div class="card-header" style="background-color:white;padding:10px;">
                    <b class="b-text">
                        <i class="far fa-newspaper"></i>
                        @foreach ($category_first as $item_category_first)
                        Tin rao bán mới nhất / {{ $item_category_first->category_child_name }}
                        @endforeach
                    </b>
                </div>
                <div class="card-body" style="padding:5px;">
                    <div class="row">

                        @foreach ($postNewCategoryFirst as $item_postNewCategoryFirst)
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <a href="{{ url('view-category-detail/'.Str::slug('Xe Kia Morning 2020 thời trang hiện đại')) }}" style="text-decoration:none;color:#ff3333;">
                                <div class="media">
                                    @php
                                    $image_decode = (array)json_decode($item_postNewCategoryFirst->images,true)
                                    @endphp
                                    @foreach ($image_decode as $picture)
                                    @if ($loop->first)
                                    <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="align-self-start mr-3">
                                    @endif
                                    @endforeach

                                    <div class="media-body">
                                        <b>{{ $item_postNewCategoryFirst->title }}</b>
                                        <p class="p-text">
                                            @php
                                            $province = DB::table('provinces')->where('id', $item_postNewCategoryFirst->province_id)->get();
                                            $district = DB::table('districts')->where('id', $item_postNewCategoryFirst->district_id)->get();
                                            @endphp
                                            @foreach ($province as $item_province)
                                            @foreach ($district as $item_district)
                                            <i class="fas fa-map-marker-alt"></i> {{ $item_province->province_name }} / {{ $item_district->district_name }} <br>
                                            @endforeach
                                            @endforeach

                                            <i class="far fa-clock"></i> {{ date("d/m/Y", strtotime($item_postNewCategoryFirst->created_at )) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>

                    <br>

                    <!-- pagination -->
                    <ul class="pagination justify-content-center">
                        {{-- <li class="page-item"><a class="page-link" href="#" style="color:red;">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#"
                                style="background-color:red;color:white;border-color:red;">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" style="color:red;">Next</a></li> --}}
                        {{ $postNewCategoryFirst->links() }}
                    </ul>
                    <!-- pagination -->
                </div>
            </div>
            <!-- post-new -->

            <!-- post-new-with-category -->
            <div class="card post-new-category" style="margin-bottom:10px;">
                <div class="card-header" style="background-color:white;padding:10px;text-align:center;">
                    <b class="b_text">
                        <i class="far fa-arrow-alt-circle-up arrow-up"></i>
                        ĐĂNG TIN THEO DANH MỤC
                    </b>
                </div>
                <div class="card-body text-center" style="padding:15px;padding-top:5px;">
                    <div class="row">
                        <!-- ========================== -->
                        @foreach($allCategory as $key => $value)
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3" style="padding:3px;margin-bottom:10px;margin-top:10px;">

                            @if($value->id == 1)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class="fas fa-home" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Bất động sản</div>
                            </a>
                            @elseif($value->id == 2)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class="fas fa-motorcycle" style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Xe cộ</div>
                            </a>
                            @elseif($value->id == 3)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-mobile-alt' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ điện tử</div>
                            </a>
                            @elseif($value->id == 4)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-business-time' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Việc làm</div>
                            </a>
                            @elseif($value->id == 5)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-dog' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thú cưng</div>
                            </a>
                            @elseif($value->id == 6)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-hamburger' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;"> Đồ ăn, thực phẩm và các loại khác</div>
                            </a>
                            @elseif($value->id == 7)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-subway' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Tủ lạnh, máy lạnh, máy giặt</div>
                            </a>
                            @elseif($value->id == 8)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-couch' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ gia dụng, nội thất, cây cảnh</div>
                            </a>
                            @elseif($value->id == 9)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-tshirt' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Thời trang, đồ dùng cá nhân</div>
                            </a>
                            @elseif($value->id == 10)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-volleyball-ball' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Giải trí, thể thao, sở thích</div>
                            </a>
                            @elseif($value->id == 11)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-book' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Đồ văn phòng, công nông nghiệp</div>
                            </a>
                            @elseif($value->id == 12)
                            <a href="{{ url('post-new/'.Str::slug($value->category_name).'/'.$value->id )}}" style="text-decoration:none;">
                                <i class='fas fa-phone-volume' style="font-size:30px;color:red;"></i>
                                <div style="font-size:12px;color:red;">Dịch vụ, du lịch</div>
                            </a>
                            @endif

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- post-new-with-category -->


        </div>
    </div>
</div>

@endsection

@section('link_js')

{{-- <script>
    $(document).ready(function () {
        $('#provinceSelect').change(function () {
            if ($(this).val() != '') {

                var value = $(this).val();
                var dependent = $(this).data('dependent');

                $.ajax({
                    url: "{{ route('filter_district') }}",
type: "GET",
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
data: {value: value, dependent: dependent },
success: function (result) {
$('#' + dependent).html(result);
}

})
}
});

$('#provinceSelect').change(function () {
$('#districtSelect').val('');
});


});
</script> --}}

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
@endsection
<!-- ==================================================== -->
