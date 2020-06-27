@extends('home.infor_profile.layout_manage_news')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('content_news')

@foreach($all_news as $key => $all_new)
<a href="{{ url('view-category-detail/'.Str::slug($all_new->title).'/'.$all_new->id) }}" style="text-decoration:none;color:#ff3333;">
    <div class="media border manage-post-new">
        @php($image_decode = (array)json_decode($all_new->images,true))
        @foreach ($image_decode as $picture)
        @if($loop->first)
        <img src="{{ url('public/upload_images_post_new/'.$picture) }}" class="align-self-center mr-3" style="width:100px;height:70px;border-radius:5px;margin-top:0px;">
        @endif
        @endforeach
        <div class="media-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9" id="col-mobile-9">
                    <h4 class="h4-title">{{ $all_new->title }}</h4>
                    <p class="p-content-text"><i class="far fa-clock"></i>
                        {{ date("d/m/Y", strtotime($all_new->created_at)) }}
                        -
                        <b>
                            <?php
                                $date1 = $all_new->created_at;
                                $newdate1 = strtotime ($all_new->number_date_expired.'day', strtotime ( $date1 ));
                                $newdate1 = date ( 'd/m/Y' , $newdate1 );
                                echo $newdate1;

                                //Lấy ngày hiện tại
                                $date_current = date("d/m/Y");
                                if ($newdate1 < $date_current){
                                    echo '&ensp;<span class="badge badge-pill badge-danger">Hết hạn</span>';
                                }else{}
                            ?>
                        </b>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3" id="col-mobile-3">
                    <div class="clearfix">
                        <span class="float-right">
                            <a class="btn btn-default" href="{{ url('upgrade-news/'.$all_new->id) }}" role="button" title="Nâng cấp tin">
                                <i class="fas fa-crown" style="color:orange;"></i>
                            </a>

                            <a class="btn btn-default" href="{{ url('edit-news/'.$all_new->id) }}" title="Chỉnh sửa">
                                <i class="fas fa-edit" style="color:blue;"></i>
                            </a>

                            <a class="btn btn-default" href="{{ url('delete-news/'.$all_new->id) }}" title="Xóa" onclick="return confirm('Bạn có chắc chắn xóa không?');">
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


{{-- pagination --}}
<ul class="pagination justify-content-center pagination-sm" style="margin:20px 0">
    {{ $all_news->links() }}
</ul>
{{-- pagination --}}


{{-- ========================================== --}}


{{-- Thông báo thành công  --}}
@if (Session::has('session_success'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã đăng tin. Vui lòng chờ duyệt!'
        , showConfirmButton: false
        , timer: 3000
    });

</script>
@php(Session::forget('session_success'))
@endif


@if (Session::has('session_update'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã cập nhật tin!'
        , showConfirmButton: false
        , timer: 3000
    });

</script>
@php(Session::forget('session_update'))
@endif


@if (Session::has('delete_new'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã xóa tin!'
        , showConfirmButton: false
        , timer: 2000
    });

</script>
@php(Session::forget('delete_new'))
@endif
{{-- Thông báo thành công  --}}


@endsection
{{-- =============================================================================== --}}
