@extends('home.infor_profile.layout_infor_profile')
@section('title', 'Bản tin đã lưu')
{{-- ==================================================== --}}

{{-- ==================================================== --}}
@section('col-9-content')

<div class="card">
    <div class="card-header" style="padding:5px;">
        <div class="clearfix">
            <span class="float-left">
                <h5><i class="fas fa-crown"></i>&ensp;Nâng cấp mua dịch vụ bản tin</h5>
            </span>
        </div>
    </div>
    <div class="card-body" style="padding:10px;">
        <div class="alert alert-warning" role="alert">
            <span>Bản tin: <strong>{{ $upgrade->title }}</strong></span>
            <hr>
            <div class="clearfix">
                <span class="float-left">
                    <span style="width:60px;"><i class="fa fa-shopping-cart"></i></span> Loại tin <br>
                    <span style="width:60px;"><i class="fa fa-clock-o"></i></span> Ngày cập nhật <br>
                    <span style="width:60px;"><i class="fa fa-clock-o"></i></span> Ngày hết hạn <br>
                    <span style="width:60px;"><i class="fa fa-info-circle"></i></span> Trạng thái tin
                </span>
                <span class="float-right">
                    @if($upgrade->status == 0)
                    Miễn phí
                    @else
                    Dịch vụ
                    @endif
                    <br>

                    {{ date("d/m/Y", strtotime($upgrade->created_at)) }} <br>

                    <?php
                        $date1 = $upgrade->created_at;
                        $newdate1 = strtotime ($upgrade->number_date_expired.'day', strtotime ( $date1 ));
                        $newdate1 = date ( 'd/m/Y' , $newdate1 );
                        echo $newdate1;

                        $date_current = date("d/m/Y");
                        if ($newdate1 < $date_current){ 
                            echo '<br><span class="text-danger">Đã hết hạn</span>'; 
                        }else{
                            echo '<br><span class="text-success">Còn thời gian</span>'; 
                        }
                    ?>
                </span>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <b><i class="fa fa-gift"></i> Chọn gói dịch vụ cho bản tin</b>
            </div>
            <div class="card-body p-2">
                <div class="clearfix">
                    <span class="float-left"><b>Tài khoản của bạn</b></span>
                    <span class="float-right">
                        <span class="badge badge-pill badge-warning">0 đ</span>
                    </span>
                </div>
                <hr>

                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
</div>

@endsection {{-- ==================================================== --}}
