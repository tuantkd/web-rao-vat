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
}
