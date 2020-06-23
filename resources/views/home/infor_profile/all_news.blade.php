@extends('home.infor_profile.layout_manage_news')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('content_news')

@foreach($all_news as $key => $all_new)
<a href="{{ url('view-category-detail/'.Str::slug($all_new->title).'/'.$all_new->id) }}" style="text-decoration:none;color:#ff3333;">
    <div class="media border manage-post-new">
        <img src="{{ url('public/images/car-1.jpg') }}" class="align-self-center mr-3" style="max-width:100%;height:60px;border-radius:5px;margin-top:0px;">
        <div class="media-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                    <h4 class="h4-title">Xe Kia Morning 2020 - thời trang -hiện đại thời trang -hiện đại</h4>
                    <p class="p-content-text"><i class="far fa-clock"></i> 06/06/2020 - <b>09/06/2020</b></p>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Nâng cấp tin">
                        <i class="fas fa-crown" style="color:orange;"></i>
                    </a>

                    <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Chỉnh sửa">
                        <i class="fas fa-edit"></i>
                    </a>

                    <a class="btn btn-default" href="#" role="button" data-toggle="tooltip" title="Xóa">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</a>
@endforeach

{{-- ========================================== --}}

{{-- Thông báo thành công  --}}
@if (Session::has('session_success'))
<script>
    Swal.fire({
        position: 'center'
        , icon: 'success'
        , title: 'Đã đăng tin. Vui lòng chờ duyệt!'
        , showConfirmButton: false
        , timer: 4000
    });

</script>
@endif
{{-- Thông báo thành công  --}}


@endsection
{{-- =============================================================================== --}}
