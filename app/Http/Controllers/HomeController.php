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
}
