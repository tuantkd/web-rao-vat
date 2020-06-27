@extends('home.infor_profile.layout_manage_news')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('content_news')

@foreach($service_news as $key => $all_new)
@if ($all_new->updated_at)
@continue
@endif

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

                                $date_current = date("d/m/Y");
                            ?>
                        </b>
                        <span class="badge badge-pill badge-danger">Hết hạn</span>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3" id="col-mobile-3">
                    <div class="clearfix">
                        <span class="float-right">
                            <a class="btn btn-default" href="#" role="button" title="Nâng cấp tin">
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

@if ($newdate1 < $date_current) @break @endif @endforeach <ul class="pagination justify-content-center pagination-sm" style="margin:20px 0">
    {{ $service_news->links() }}
    </ul>



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

    @endsection
    {{-- =============================================================================== --}}
