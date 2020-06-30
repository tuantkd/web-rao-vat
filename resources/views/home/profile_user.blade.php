@extends('layout.layout_home')
@section('title', 'Xem trang cá nhân')
{{-- <!-- ==================================================== --> --}}


{{-- <!-- ==================================================== --> --}}
@section('content')

<div class="container" style="padding-top:5px;margin-top:50px;padding:5px;">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            {{-- breadcrumb --}}
            <ul class="breadcrumb breadcrumb-mobile">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="text-decoration:none;color:red;">Trang chủ</a>
                </li>
                @foreach ($user as $name)
                <li class="breadcrumb-item active">
                    <span>Trang cá nhân của <span style="font-weight:bold;">{{ $name->username }}</span></b>
                </li>
                @endforeach
            </ul>
            {{-- breadcrumb --}}

            <!-- infor-user -->
            @foreach ($user as $item_user)
            <div class="card">
                <div class="card-body" style="padding:1px;">
                    <div class="media p-4 user-icon-profile">
                        @if($item_user->facebook_id != NULL)
                        <img src="{{ $item_user->avatar }}" class="mr-3 mt-3 rounded-circle" style="max-width:100%;height:80px;"> ​
                        @elseif($item_user->google_id != NULL)
                        <img src="{{ $item_user->avatar }}" class="mr-3 mt-3 rounded-circle" style="max-width:100%;height:80px;">
                        @elseif($item_user->avatar != NULL)
                        <img src="{{ url('public/upload_images_avatar/'.$item_user->avatar) }}" class="mr-3 mt-3 rounded-circle" style="max-width:100%;height:80px;">
                        @else
                        <img src="{{ url('public/logo/user/user-icon-edit.png') }}" class="mr-3 mt-3 rounded-circle" style="max-width:100%;height:80px;">
                        @endif

                        <div class="media-body">
                            <p><b>{{ $item_user->username }}</b> <br> Ngày tham gia {{ date("d/m/Y", strtotime($item_user->created_at)) }}</p>
                            <a class="btn btn-outline-warning btn-sm phonecell" href="#" role="button">
                                @if ($item_user->phone == null)
                                <i class="fas fa-phone"></i> Đang cập nhật
                                @else
                                <i class="fas fa-phone"></i> {{ $item_user->phone }}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- infor-user -->

            <!-- list-new -->
            <div class="card" style="margin-top:10px;">
                <div class="card-header"><b>Bài đăng - {{ $countPostNew}} tin</b></div>
                <div class="card-body" style="padding:1px;">

                    @foreach ($postNew as $item_postNew)
                    <div class="list">
                        <a href="{{ url('view-category-detail/'.Str::slug($item_postNew->title), $item_postNew->id) }}">
                            <div class="row">
                                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                                    @php
                                    $image_decode = (array)json_decode($item_postNew->images,true)
                                    @endphp
                                    @foreach ($image_decode as $picture)
                                    @if ($loop->first)
                                    <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="rounded" style="width: 100px;">
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-8 col-sm-8 col-md-10 col-lg-10 text-left">
                                    <h5>{{ $item_postNew->title }}</h5>
                                    <h5><b>{{ number_format($item_postNew->price) }} {{ $item_postNew->currency }}</b></h5>

                                    <div class="row row-cols-1">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <i class="far fa-clock" style="color:orange;"></i>
                                            {{ date("d/m/Y", strtotime($item_postNew->updated_at)) }}
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <i class="fas fa-map-marker-alt" style="color:orange;"></i>
                                            @php
                                            $province = DB::table('provinces')->where('id', $item_postNew->province_id)->get();
                                            $district = DB::table('districts')->where('id', $item_postNew->district_id)->get();
                                            @endphp
                                            @foreach ($province as $item_province)
                                            @foreach ($district as $item_district)
                                            {{ $item_province->province_name }} - {{ $item_district->district_name }} <br>
                                            @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>

                <ul class="pagination justify-content-center">
                    {{ $postNew->links() }}
                </ul>
            </div>
            <!-- list-new -->
        </div>
        <div class="col-sm-1"></div>

    </div>
</div>


<script>
    $(function() {
        $('.phonecell').click(function() {
            var PhoneNumber = $(this).text();
            PhoneNumber = PhoneNumber.replace('Phone:', '0936655612');
            window.location.href = 'tel://' + PhoneNumber;
        });
    });

</script>

@endsection
<!-- ==================================================== -->
