<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Trang chủ
    public function index()
    {
    	return view('layout.layout_home');
    }
}
