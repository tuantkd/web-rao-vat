<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\levels;
use DB;

class AdminController extends Controller
{
    public function __invoke(Request $request)
    {
        //
    }

    // trang chủ admin
    public function index(Request $request){
        return view('admin.index_admin');
    }

    // trang quản lý admin
    public function manage_admin(Request $request){
        return view('admin.manage_admin.manage_admin');
    }

    // trang quản lý thành viên
    public function manage_member(Request $request){
        return view('admin.manage_member.manage_member');
    }

    // Trang quản lý quyền truy cập
    public function manage_role(Request $request){
        $role = DB::table('levels')->get();
        return view('admin.manage_role.manage_role')->with([
            'role' => $role
        ]);
    }

    // thêm quyền truy cập
    public function add_role(Request $request){
        $this->validate($request, 
        [
            // 'txt_fullname' => 'required',
            // 'txt_username' => 'required|unique:users,ten_tai_khoan',
            // 'txt_password' => 'required|min:6|max:10',
            // 'txt_sex' => 'required',
            // 'txt_birthday' => 'required',
            // 'txt_email' => 'required|email',
            // 'txt_phone' => 'required',
            // 'txt_address' => 'required',
            // 'txt_role_id' => 'required'
        ],
        [
            // 'txt_fullname.required' => 'Chưa nhập họ và tên',

            // 'txt_username.required' => 'Chưa nhập tên tài khoản',
            // 'txt_username.unique' => 'Tên tài khoản này đã tồn tại',

            // 'txt_password.required' => 'Chưa nhập mật khẩu',
            // 'txt_password.min' => 'Mật khẩu ít nhất 6 ký tự',
            // 'txt_password.max' => 'Mật khẩu tối đa 10 ký tự',

            // 'txt_sex.required' => 'Chưa chọn giới tính',
            // 'txt_birthday.required' => 'Chưa chọn ngày sinh',

            // 'txt_email.required' => 'Chưa nhập địa chỉ email',
            // 'txt_email.email' => 'Vui lòng nhập đúng định dạng email',

            // 'txt_phone.required' => 'Chưa nhập số điện thoại',
            // 'txt_address.required' => 'Chưa nhập địa chỉ cư trú',
            // 'txt_role_id.required' => 'Chưa chọn quyền truy cập'
        ]);

        $role = new levels();
        $role->name_level = $request->input('roleName');
        $role->discribe = $request->input('description');
        $role->save();

        $add_role = $request->session()->get('add_role');
        session()->put('add_role');

        return redirect()->back()->with('add_role','');
    }

    // trang xóa quyền truy cập
    public function delete_role(Request $request, $id){
        levels::destroy($id);

        $delete_role = $request->session()->get('delete_role');
        session()->put('delete_role');

        return redirect()->back()->with('delete_role','');

    }

    // trang quản lý bài đăng
    public function manage_post_new(Request $request){
        return view('admin.manage_post_new.manage_post_new');
    }

    // trang quản lý loại bài đăng
    public function manage_type_post_new(Request $request){
        return view('admin.manage_type_post_new.manage_type_post_new');
    }

    // trang quản lý tỉnh thành
    public function manage_province(Request $request){
        return view('admin.manage_province.manage_province');
    }

    // trang quản lý quận huyện
    public function manage_district(Request $request){
        return view('admin.manage_district.manage_district');
    }

    // trang quản lý danh mục
    public function manage_category(Request $request){
        return view('admin.manage_category.manage_category');
    }

    // trang quản lý danh mục cấp 1
    public function manage_category_first(Request $request){
        return view('admin.manage_category_first.manage_category_first');
    }

    // trang quản lý danh mục cấp 2
    public function manage_category_second(Request $request){
        return view('admin.manage_category_second.manage_category_second');
    }

    // trang quản lý ảnh bìa
    public function manage_banner(Request $request){
        return view('admin.manage_banner.manage_banner');
    }

    // trang quản lý tin tức
    public function manage_new(Request $request){
        return view('admin.manage_new.manage_new');
    }
}
