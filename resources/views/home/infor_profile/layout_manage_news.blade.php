@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Quản lý đăng tin')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('col-9-content')


<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5>Quản lý tin</h5>
            </span>
            <span class="float-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </span>
        </div>
    </div>

    <div class="card-body" style="padding:10px;">
        <span class="badge badge-pill badge-info">
            <a href="{{ url('page-all-news') }}">Tất cả tin</a>
        </span>
        <span class="badge badge-pill badge-warning">
            <a href="{{ url('page-service-news') }}">Tin dịch vụ</a>
        </span>
        <span class="badge badge-pill badge-danger">
            <a href="{{ url('page-expired-news') }}">Tin hết hạn</a>
        </span>
        <hr>

        {{-- Nội dung danh sách tin thừa kế --}}
        @yield('content_news')
        {{-- Nội dung danh sách tin thừa kế --}}

    </div>
</div>

@endsection
{{-- =============================================================================== --}}
