@extends('admin.profile_admin.layout_profile_user')

<!-- ============================================== -->
@section('tab-content')

  <div class="tab-pane active" id="settings">
    <form class="form-horizontal">
      <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label"><b>Họ và tên:</b></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputName" value="Nguyễn Văn Tuấn">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label"><b>Tên liên hệ:</b></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputName2" value="Tuan TKD">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label"><b>Email:</b></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" value="tuan@gmail.com">
        </div>
      </div>
      
      <div class="form-group row">
        <label for="inputExperience" class="col-sm-2 col-form-label"><b>Điện thoại:</b></label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputSkills" value="0326825698">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputSkills" class="col-sm-2 col-form-label"><b>Địa chỉ:</b></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputSkills" value="Hậu giang - Vị Thủy">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-danger">Cập nhật</button>
        </div>
      </div>
    </form>
  </div>

@endsection
<!-- ============================================== -->