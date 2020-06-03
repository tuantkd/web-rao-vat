<?php

use Illuminate\Support\Facades\Route;
/*============================================================*/
/*HOME*/
//Trang chủ
Route::get('/', 'HomeController@index');

//Xem danh mục
Route::get('view-category', 'HomeController@view_category');

//Xem danh mục chi tiết
Route::get('view-category-detail', 'HomeController@view_category_detail');

//Báo cáo vi phạm bản tin
Route::get('report-new', 'HomeController@report_new');

//Xem trang cá nhân người dùng
Route::get('profile-user', 'HomeController@profile_user');
/*============================================================*/






/*============================================================*/
/*ADMIN*/
// trang chủ admin
Route::get('admin', [
    'as' => 'index_admin',
    'uses' => 'AdminController@index'
]);

// trang quản lý admin
Route::get('admin/manage-admin', [
    'as' => 'manage_admin',
    'uses' => 'AdminController@manage_admin'
]);


// trang quản lý thành viên
Route::get('admin/manage-member', [
    'as' => 'manage_member',
    'uses' => 'AdminController@manage_member'
]);
/*============================================================*/




