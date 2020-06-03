<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|php artisan make:controller ShowProfilephp artisan make:controller ShowProfile
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*HOME*/
//Trang chủ
Route::get('/', 'HomeController@index');

//Xem danh mục
Route::get('view-category', 'HomeController@view_category');

//Xem danh mục chi tiết
Route::get('view-category-detail', 'HomeController@view_category_detail');

//Báo cáo vi phạm bản tin
Route::get('report-new', 'HomeController@report_new');
