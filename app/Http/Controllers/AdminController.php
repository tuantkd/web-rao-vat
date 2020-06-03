<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.manage_role.manage_role');
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
