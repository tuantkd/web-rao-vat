@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Bản tin đã lưu')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('col-9-content')

<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5>Tin đã lưu, đánh dấu</h5>
            </span>
            <span class="float-right">
                <form action="{{ url('page-news-save') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm ..." name="txt_search">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </span>
        </div>
    </div>

    <div class="card-body" style="padding:10px;">

        @if($show_post_new_saves->count() != NULL)
        @foreach($show_post_new_saves as $key => $show_post_new_save)
        <a href="{{ url('view-category-detail/'.Str::slug($show_post_new_save->title).'/'.$show_post_new_save->id) }}" style="text-decoration:none;color:#ff3333;">
            <div class="media border manage-post-new">

                @php($image_decode = (array)json_decode($show_post_new_save->images,true))
                @foreach ($image_decode as $picture)
                @if($loop->first)
                <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="align-self-center mr-3" style="width:100px;height:70px;border-radius:5px;margin-top:0px;">
                @endif
                @endforeach

                <div class="media-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9" id="col-mobile-9">
                            <h4 class="h4-title">{{ $show_post_new_save->title }}</h4>
                            <p class="p-content-text">
                                <span style="color:#808080;font-size:11px;">
                                    <i class="far fa-clock"></i>&ensp;{{ date("d/m/Y", strtotime($show_post_new_save->created_at)) }}
                                </span>
                                &ensp;
                                <span style="color:#808080;font-size:11px;">
                                    <i class="fas fa-map-marker-alt"></i>&ensp;

                                    @php($get_provinces = DB::table('provinces')->where('id',$show_post_new_save->province_id)->get())
                                    @foreach($get_provinces as $key => $get_province)
                                    {{ $get_province->province_name }}
                                    @endforeach
                                    /
                                    @php($get_districts = DB::table('districts')->where('id',$show_post_new_save->district_id)->get())
                                    @foreach($get_districts as $key => $get_district)
                                    {{ $get_district->district_name }}
                                    @endforeach

                                </span>
                            </p>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3" id="col-mobile-3">
                            <div class="clearfix">
                                <span class="float-right">
                                    <a class="btn btn-default" href="{{ url('none-news-save/'.$show_post_new_save->id) }}" title="Xóa" onclick="return confirm('Bạn có chắc chắn xóa không?');">
                                        <i class="fas fa-trash-alt" style="color:red;"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </a>
        @endforeach

        <!-- Center-aligned -->
        <ul class="pagination justify-content-center pagination-sm" style="margin:20px 0">
            {{ $show_post_new_saves->links() }}
        </ul>

        @else
        <div class="alert alert-danger" role="alert">
            <strong>Bạn không có bản tin được lưu nào.</strong>
        </div>
        @endif
    </div>
</div>

@endsection {{-- ==================================================== --}}
