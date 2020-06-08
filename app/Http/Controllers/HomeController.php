<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Trang chủ
    public function index()
    {
    	return view('home.index');
    }

    //Xem theo danh mục
    public function view_category()
    {
    	return view('home.view_category');
    }

    //Xem theo danh mục chi tiết
    public function view_category_detail()
    {
    	return view('home.view_category_detail');
    }

    //Xem theo danh mục chi tiết
    public function report_new()
    {
    	return view('home.report.report_new');
    }

    //Xem theo danh mục chi tiết
    public function profile_user()
    {
        return view('home.profile_user');
    }

    //Đăng tin cấp cha danh mục
    public function post_new_category()
    {
        return view('home.post_new.post_new_parent');
    }

    //Đăng tin
    public function post_new()
    {
        return view('home.post_new.post_new');
    }

    //Đăng nhập đăng ký
    public function page_login()
    {
        return view('home.page_login');
    }

    //Đăng ký
    public function page_register()
    {
        return view('home.page_register');
    }

    //------------------------------
    //Quản lý tin
    public function page_manage_news()
    {
        return view('home.infor_profile.manage_news');
    }

    //Quản lý tin lưu lại
    public function page_news_save()
    {
        return view('home.infor_profile.news_save');
    }

    //Quản lý thông tin tài khoản
    public function page_infor_account()
    {
        return view('home.infor_profile.infor_account');
    }

    //Quản lý thông tin tài khoản
    public function page_payment_method()
    {
        return view('home.infor_profile.payment_method');
    }

    //Thay đổi mật khẩu
    public function page_change_password()
    {
        return view('home.infor_profile.change_password');
    }
    //------------------------------
}
