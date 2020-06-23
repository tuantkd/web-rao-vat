<?php

use Illuminate\Support\Facades\Route;

/*===============================================================================*/

/*HOME*/
//Trang chủ
Route::get('/', 'HomeController@index');

//----------------------------------------------------------------------------
//Xem danh mục
Route::get('danh-muc/{name}/{id}', 'HomeController@view_category');

//Xem danh mục chi tiết
Route::get('view-category-detail/{name}', 'HomeController@view_category_detail');
//----------------------------------------------------------------------------



//----------------------------------------------------------------------------
//Xem chi tiết tin tức đăng
Route::get('view-news-detail/{name}/{id}', 'HomeController@view_news_detail');
//----------------------------------------------------------------------------



//----------------------------------------------------------------------------
//Báo cáo vi phạm bản tin
Route::get('report-new', 'HomeController@report_new');
//----------------------------------------------------------------------------


//----------------------------------------------------------------------------
//Xem trang cá nhân người dùng
Route::get('profile-user', 'HomeController@profile_user');
//----------------------------------------------------------------------------



//----------------------------------------------------------------------------
//Đăng nhập
Route::get('page-login', 'HomeController@page_login')->name('page-login');

//Xử lý đăng nhập
Route::post('post-page-login', 'HomeController@post_page_login')->name('post_page_login');
//----------------------------------------------------------------------------

//----------------------------------------------------------------------------
//Xử lý đăng nhập mạng xã hội facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');
//----------------------------------------------------------------------------

//----------------------------------------------------------------------------
//Xử lý đăng nhập google
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');
//----------------------------------------------------------------------------

//----------------------------------------------------------------------------
//Đăng xuất
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//----------------------------------------------------------------------------


//----------------------------------------------------------------------------
//Quên mật khẩu
Route::post('postforgot', 'Auth\ForgotPasswordController@postforgot')->name('postforgot');

//Trang hiển thị nhập email
Route::get('page-input-email', 'Auth\ForgotPasswordController@page_input_email')->name('page-input-email');

//Xác minh mã token
Route::get('verifyToken', 'Auth\VerificationTokenController@verifyToken')->name('verifyToken');
Route::post('post-verifyToken', 'Auth\VerificationTokenController@post_verifyToken')->name('post-verifyToken');

//Thay đổi mật khẩu
Route::post('post-reset-password/{token}', 'Auth\ResetPasswordController@update_password')->name('post-reset-password');

//Hiển thị thay đổi mật khẩu
Route::get('page-reset-password/{token}', 'Auth\ResetPasswordController@page_reset_password');
//----------------------------------------------------------------------------


//----------------------------------------------------------------------------
//Đăng ký
Route::get('page-register', 'HomeController@page_register')->name('page-register');

//Xử lý đăng ký
Route::post('post-page-register', 'HomeController@post_page_register');

//Xác nhận mã token
Route::get('verify/{token}', 'VerifyController@VerifyEmail')->name('verify');
//----------------------------------------------------------------------------
/*===============================================================================*/







Route::middleware(['CheckViewInfor'])->group(function () {
    // ===========================================================================
    //ĐÃ ĐĂNG NHẬP VÀO TRANG KHÁCH (HOME)
    //----------------------------------------------------------------------------
    //Đăng tin cấp cha danh mục
    Route::get('post-new-category', 'HomeController@post_new_category');

    //Đăng tin
    Route::get('post-new/{name}/{id}', 'HomeController@post_new');

    //Xử lý đăng tin
    Route::post('post-post-new', 'HomeController@post_post_new');
    //----------------------------------------------------------------------------

    //----------------------------------------------------------------------------
    //-----------------------------
    //Trang tất cả tin
    Route::get('page-all-news', 'HomeController@page_all_news');
    //Trang tin dịch vụ
    Route::get('page-service-news', 'HomeController@page_service_news');
    //Trang tin hết hạn
    Route::get('page-expired-news', 'HomeController@page_expired_news');
    //-----------------------------

    //Trang thông tin tin đã lưu
    Route::get('page-news-save', 'HomeController@page_news_save');

    //Trang thông tin cá nhân tài khoản
    Route::get('page-infor-account', 'HomeController@page_infor_account');

    //Trang thông tin thanh toán phương thức
    Route::get('page-payment-method', 'HomeController@page_payment_method');

    //Trang thay đổi mật khẩu
    Route::get('page-change-password', 'HomeController@page_change_password');
    //----------------------------------------------------------------------------
    // ===========================================================================
});
















/*===============================================================================*/
/*ADMIN*/
Route::middleware(['checkStatus'])->group(function () {
    // ===========================================================================
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

    // Trang thêm admin
    Route::get('admin/add-admin-new', [
        'as' => 'add_admin-new',
        'uses' => 'AdminController@add_admin_new'
    ]);

    // Trang xem thông tin cá nhân
    Route::get('admin/profile-user/{name}/{id}', [
        'as' => 'profile-user',
        'uses' => 'AdminController@profile_user'
    ]);

    // Trang thay đổi mật khẩu
    Route::get('admin/change-password', [
        'as' => 'change-password',
        'uses' => 'AdminController@change_password'
    ]);

    // trang thêm admin
    Route::post('admin/manage-admin/add-admin', [
        'as' => 'add_admin',
        'uses' => 'AdminController@add_admin'
    ]);

    // tìm kiếm admin
    Route::get('admin/manage-admin/search-admin', [
        'as' => 'search_admin',
        'uses' => 'AdminController@search_admin'
    ]);


    // Trang quản lý thành viên
    Route::get('admin/manage-member', [
        'as' => 'manage_member',
        'uses' => 'AdminController@manage_member'
    ]);

    // xem thông tin thành viên
    Route::get('admin/manage-member/view-information/{name}-{id}', 'AdminController@view_information_member');

    // xóa tất cả thành viên
    Route::delete('admin/manage-member/delete-all-member', [
        'as' => 'delete_all_member',
        'uses' => 'AdminController@delete_all_member'
    ]);

    // tìm kiếm thành viên
    Route::get('admin/manage-member/search-member', [
        'as' => 'search_member',
        'uses' => 'AdminController@search_member'
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

    // tìm kiếm quyền truy cập
    Route::get('admin/manage-role/search-role', [
        'as' => 'search_role',
        'uses' => 'AdminController@search_role'
    ]);

    // xóa tất quả quyền truy cập
    Route::delete('admin/manage-role/delete-role', [
        'as' => 'delete_role',
        'uses' => 'AdminController@delete_role'
    ]);

    // trang quản lý bài đăng
    Route::get('admin/manage-post-new', [
        'as' => 'manage_post_new',
        'uses' => 'AdminController@manage_post_new'
    ]);

    // tìm kiếm bài đăng
    Route::get('admin/manage-post-new/search', [
        'as' => 'search_post_new',
        'uses' => 'AdminController@search_post_new'
    ]);

    // xóa bài đăng
    Route::get('admin/manage-post-new/delete-post-new/{id}', [
        'as' => 'delete_post_new',
        'uses' => 'AdminController@delete_post_new'
    ]);

    // xem chi tiết bài đăng
    Route::get('admin/manage-post-new/view-information/{id}', [
        'as' => 'view_post_new',
        'uses' => 'AdminController@view_post_new'
    ]);

    // trang quản lý loại bài đăng
    Route::get('admin/manage-type-post-new', [
        'as' => 'manage_type_post_new',
        'uses' => 'AdminController@manage_type_post_new'
    ]);

    // xóa tất cả loại bài đăng
    Route::delete('admin/manage-type-post-new/delete', [
        'as' => 'delete_all_type_post_new',
        'uses' => 'AdminController@delete_all_type_post_new'
    ]);

    // thêm loại bài đăng
    Route::post('admin/manage-type-post-new/add-type-post-new', [
        'as' => 'add_type_post_new',
        'uses' => 'AdminController@add_type_post_new'
    ]);

    // chỉnh sửa loại bài đăng
    Route::get('admin/manage-type-post-new/edit/{id}', [
        'as' => 'edit_type_post_new',
        'uses' => 'AdminController@edit_type_post_new'
    ]);

    Route::post('admin/manage-type-post-new/edit/{id}', [
        'as' => 'post_edit_type_post_new',
        'uses' => 'AdminController@post_edit_type_post_new'
    ]);

    // trang quản lý tỉnh thành
    Route::get('admin/manage-province', [
        'as' => 'manage_province',
        'uses' => 'AdminController@manage_province'
    ]);

    // tìm kiếm tỉnh thành
    Route::get('admin/manage-province/search', [
        'as' => 'search_province',
        'uses' => 'AdminController@search_province'
    ]);

    // thêm tỉnh thành
    Route::post('admin/manage-province/add-province', [
        'as' => 'add_province',
        'uses' => 'AdminController@add_province'
    ]);

    // chỉnh sửa tỉnh thành
    Route::get('admin/manage-province/edit-province/{id}', [
        'as' => 'edit_province',
        'uses' => 'AdminController@edit_province'
    ]);

    Route::post('admin/manage-province/edit-province/{id}', [
        'as' => 'post_edit_province',
        'uses' => 'AdminController@post_edit_province'
    ]);

    // xóa tất cả tỉnh thành
    Route::delete('admin/manage-province/delete', [
        'as' => 'delete_province',
        'uses' => 'AdminController@delete_province'
    ]);

    // trang quản lý quận huyện
    Route::get('admin/manage-district', [
        'as' => 'manage_district',
        'uses' => 'AdminController@manage_district'
    ]);

    // tìm kiếm quận huyện
    Route::get('admin/manage-district/search', [
        'as' => 'search_district',
        'uses' => 'AdminController@search_district'
    ]);

    // thêm quận huyện
    Route::post('admin/manage-district/add-district', [
        'as' => 'add_district',
        'uses' => 'AdminController@add_district'
    ]);

    // xóa quận huyện
    Route::delete('admin/manage-district/delete', [
        'as' => 'delete_district',
        'uses' => 'AdminController@delete_district'
    ]);

    // chỉnh sửa quận huyện
    Route::get('admin/manage-district/edit/{id}', [
        'as' => 'edit_district',
        'uses' => 'AdminController@edit_district'
    ]);

    Route::post('admin/manage-district/edit/{id}', [
        'as' => 'post_edit_district',
        'uses' => 'AdminController@post_edit_district'
    ]);

    // trang quản lý doanh mục
    Route::get('admin/manage-category', [
        'as' => 'manage_category',
        'uses' => 'AdminController@manage_category'
    ]);

    // tìm kiếm danh mục
    Route::get('admin/manage-category/search-category', [
        'as' => 'search_category',
        'uses' => 'AdminController@search_category'
    ]);

    // thêm doanh mục
    Route::post('admin/manage-category/add_category', [
        'as' => 'add_category',
        'uses' => 'AdminController@add_category'
    ]);

    // xóa tất cả doanh mục
    Route::delete('admin/manage-category/delete-category', [
        'as' => 'delete_category',
        'uses' => 'AdminController@delete_category'
    ]);

    // Chỉnh sửa doanh mục
    Route::get('admin/manage-category/edit-category/{id}', [
        'as' => 'get_edit_category',
        'uses' => 'AdminController@get_edit_category'
    ]);

    Route::post('admin/manage-category/edit-category/{id}', [
        'as' => 'put_edit_category',
        'uses' => 'AdminController@put_edit_category'
    ]);

    // trang quản lý doanh mục cấp 1
    Route::get('admin/manage-category-first', [
        'as' => 'manage_category_first',
        'uses' => 'AdminController@manage_category_first'
    ]);

    // tìm kiếm doanh mục cấp 1
    Route::get('admin/manage-category-first/search', [
        'as' => 'search_category_first',
        'uses' => 'AdminController@search_category_first'
    ]);

    // thêm doanh mục cấp 1
    Route::post('admin/manage-category-first/add-category-first', [
        'as' => 'add_category_first',
        'uses' => 'AdminController@add_category_first'
    ]);

    // xóa tất cả danh mục cấp 1
    Route::delete('admin/manage-category-first/delete', [
        'as' => 'delete_category_first',
        'uses' => 'AdminController@delete_category_first'
    ]);


    // trang quản lý ảnh bìa
    Route::get('admin/manage-banner', [
        'as' => 'manage_banner',
        'uses' => 'AdminController@manage_banner'
    ]);

    // thêm ảnh bìa
    Route::post('admin/manage-banner/add-banner', [
        'as' => 'add_banner',
        'uses' => 'AdminController@add_banner'
    ]);

    // xóa ảnh bìa
    Route::get('admin/manage-banner/delete-banner/{id}', [
        'as' => 'delete_banner',
        'uses' => 'AdminController@delete_banner'
    ]);

    // trang quản lý tin tức
    Route::get('admin/manage-new', [
        'as' => 'manage_new',
        'uses' => 'AdminController@manage_new'
    ]);

    // tìm kiếm tin tức
    Route::get('admin/manage-new/searrch', [
        'as' => 'search_new',
        'uses' => 'AdminController@search_new'
    ]);

    // thêm tin tức
    Route::get('admin/manage-new/add-new', [
        'as' => 'get_add_new',
        'uses' => 'AdminController@get_add_new'
    ]);

    Route::post('admin/manage-new/add-new', [
        'as' => 'add_new',
        'uses' => 'AdminController@add_new'
    ]);

    // xóa tin tức
    Route::get('admin/manage-new/delete/{id}', [
        'as' => 'delete_new',
        'uses' => 'AdminController@delete_new'
    ]);
});
