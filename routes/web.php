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

// trang thêm admin
Route::post('admin/manage-admin/add-admin', [
    'as' => 'add_admin',
    'uses' => 'AdminController@add_admin'
]);

// delete admin
Route::get('manage-admin/delete-admin/{id}', [
    'as' => 'delete_admin',
    'uses' => 'AdminController@delete_admin'
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

// thêm quyền truy cập
Route::post('admin/manage-role/add-role', [
    'as' => 'add_role',
    'uses' => 'AdminController@add_role'
]);

// xóa quyền truy cập
Route::get('admin/manage-role/delete/{id}', [
    'as' => 'delete_role',
    'uses' => 'AdminController@delete_role'
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

// thêm loại bài đăng
Route::post('admin/manage-type-post-new/add-type-post-new', [
    'as' => 'add_type_post_new',
    'uses' => 'AdminController@add_type_post_new'
]);

// xóa loại bài đăng
Route::get('admin/manage-type-post-new/delete-type-post-new/{id}', [
    'as' => 'delete_type_post_new',
    'uses' => 'AdminController@delete_type_post_new'
]);

// trang quản lý tỉnh thành
Route::get('admin/manage-province', [
    'as' => 'manage_province',
    'uses' => 'AdminController@manage_province'
]);

// thêm tỉnh thành 
Route::post('admin/manage-province/add-province', [
    'as' => 'add_province',
    'uses' => 'AdminController@add_province'
]);

// xóa tỉnh thành
Route::get('admin/manage-province/delete-province/{id}', [
    'as' => 'delete_province',
    'uses' => 'AdminController@delete_province'
]);

// trang quản lý quận huyện
Route::get('admin/manage-district', [
    'as' => 'manage_district',
    'uses' => 'AdminController@manage_district'
]);

// thêm quận huyện
Route::post('admin/manage-district/add-district', [
    'as' => 'add_district',
    'uses' => 'AdminController@add_district'
]);

// xóa quận huyện
Route::get('admin/manage-district/delete-district/{id}', [
    'as' => 'delete_district',
    'uses' => 'AdminController@delete_district'
]);

// trang quản lý doanh mục
Route::get('admin/manage-category', [
    'as' => 'manage_category',
    'uses' => 'AdminController@manage_category'
]);

// thêm doanh mục 
Route::post('admin/manage-category/add_category', [
    'as' => 'add_category',
    'uses' => 'AdminController@add_category'
]);

// xóa doanh mục
Route::get('admin/manage-category/delete_category/{id}', [
    'as' => 'delete_category',
    'uses' => 'AdminController@delete_category'
]);

// trang quản lý doanh mục cấp 1
Route::get('admin/manage-category-first', [
    'as' => 'manage_category_first',
    'uses' => 'AdminController@manage_category_first'
]);

// thêm doanh mục cấp 1
Route::post('admin/manage-category-first/add-category-first', [
    'as' => 'add_category_first',
    'uses' => 'AdminController@add_category_first'
]);

// xóa doanh mục cấp 1
Route::get('admin/manage-category-first/delete-category-first/{id}', [
    'as' => 'delete_category_first',
    'uses' => 'AdminController@delete_category_first'
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



