<?php

use Illuminate\Support\Facades\Route;

// =======================================
// Phần trang quản trị
// Trang chủ admin
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

//Đăng tin cấp cha danh mục
Route::get('post-new-category', 'HomeController@post_new_category');

//Đăng tin
Route::get('post-new', 'HomeController@post_new');
/*============================================================*/






/*============================================================*/
/*ADMIN*/
// trang chủ admin
Route::get('admin', [
    'as' => 'index_admin',
    'uses' => 'AdminController@index'
]);

// Trang quản lý admin
Route::get('admin/manage-admin', [
    'as' => 'manage_admin',
    'uses' => 'AdminController@manage_admin'
]);


// Trang quản lý thành viên
Route::get('admin/manage-member', [
    'as' => 'manage_member',
    'uses' => 'AdminController@manage_member'
]);
/*============================================================*/

// Trang quản lý quyền truy cập
Route::get('admin/manage-role', [
    'as' => 'manage_role',
    'uses' => 'AdminController@manage_role'
]);

// trang quản lý bài đăng
Route::get('admin/manage-post-new', [
    'as' => 'manage_post_new',
    'uses' => 'AdminController@manage_post_new'
]);

// trang quản lý loại bài đăng
Route::get('admin/manage-type-post-new', [
    'as' => 'manage_type_post_new',
    'uses' => 'AdminController@manage_type_post_new'
]);

// trang quản lý tỉnh thành
Route::get('admin/manage-province', [
    'as' => 'manage_province',
    'uses' => 'AdminController@manage_province'
]);

// trang quản lý quận huyện
Route::get('admin/manage-district', [
    'as' => 'manage_district',
    'uses' => 'AdminController@manage_district'
]);

// trang quản lý doanh mục
Route::get('admin/manage-category', [
    'as' => 'manage_category',
    'uses' => 'AdminController@manage_category'
]);

// trang quản lý doanh mục cấp 1
Route::get('admin/manage-category-first', [
    'as' => 'manage_category_first',
    'uses' => 'AdminController@manage_category_first'
]);

// trang quản lý doanh mục cấp 2
Route::get('admin/manage-category-second', [
    'as' => 'manage_category_second',
    'uses' => 'AdminController@manage_category_second'
]);

// trang quản lý ảnh bìa
Route::get('admin/manage-banner', [
    'as' => 'manage_banner',
    'uses' => 'AdminController@manage_banner'
]);

// trang quản lý tin tức
Route::get('admin/manage-new', [
    'as' => 'manage_new',
    'uses' => 'AdminController@manage_new'
]);

/*HOME*/
//Trang chủ
Route::get('/', 'HomeController@index');



