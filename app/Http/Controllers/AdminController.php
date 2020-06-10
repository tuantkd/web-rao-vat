<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\levels;
use App\User;
use App\province;
use App\districts;
use App\post_type;
use App\banners;
use App\category_child_firsts;
use App\category_child_seconds;
use App\categorys;
use App\news;
use App\post_news;
use DB;
use Hash;

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
        $admin = DB::table('users')->where('level_id', 1)->get();
        return view('admin.manage_admin.manage_admin')->with([
            'admin' => $admin
        ]);
    }


    // trang thông tin cá nhân
    public function profile_user(Request $request){
        return view('admin.profile_admin.profile_user');
    }

    // trang thay đổi mật khẩu
    public function change_password(Request $request){
        return view('admin.profile_admin.change_password');
    }

    // trang thêm mới admin
    public function add_admin_new(Request $request){
        return view('admin.manage_admin.add_admin');
    }

    // thêm admin
    public function add_admin(Request $request){
        $this->validate($request,
        [
            'username' => 'unique:users,username',
            'email' => 'email|unique:users,email',
            'phone' => 'unique:users,phone'
        ],
        [
            'username.unique' => 'Tên tài khoản đã tồn tại',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'phone.unique' => 'Số điện thoại đã tồn tại'
        ]);

        $admin = new User();
        $admin->level_id = 1;
        $admin->fullname = $request->input('fullname');
        $admin->username = $request->input('username');
        $admin->email = $request->input('email');
        $admin->password = bcrypt($request->input('password'));
        $admin->sex = $request->input('sex');
        $admin->birthday = date('Y-m-d', strtotime($request->input('birthday')));
        $admin->phone = $request->input('phone');
        $admin->address = $request->input('address');
        $admin->save();

        $add_admin = $request->session()->get('add_admin');
        session()->put('add_admin');

        return redirect()->back()->with('add_admin','');
    }

    // delete admin
    public function delete_admin(Request $request, $id){
        User::destroy($id);
        $delete_admin = $request->session()->get('delete_admin');
        session()->put('delete_admin');
        return redirect()->back()->with('delete_admin', '');
    }

    // trang quản lý thành viên
    public function manage_member(Request $request){
        $member = DB::table('users')->where('level_id',2)->get();
        return view('admin.manage_member.manage_member')->with([
            'member' => $member
        ]);
    }

    // Trang quản lý quyền truy cập
    public function manage_role(Request $request){
        $role = DB::table('levels')->get();
        return view('admin.manage_role.manage_role')->with([
            'role' => $role
        ]);
    }

    // thêm quyền truy cập
    public function add_role(Request $request){
        $this->validate($request, 
        [
            // 'txt_fullname' => 'required',
            // 'txt_username' => 'required|unique:users,ten_tai_khoan',
            // 'txt_password' => 'required|min:6|max:10',
            // 'txt_sex' => 'required',
            // 'txt_birthday' => 'required',
            // 'txt_email' => 'required|email',
            // 'txt_phone' => 'required',
            // 'txt_address' => 'required',
            // 'txt_role_id' => 'required'
        ],
        [
            // 'txt_fullname.required' => 'Chưa nhập họ và tên',

            // 'txt_username.required' => 'Chưa nhập tên tài khoản',
            // 'txt_username.unique' => 'Tên tài khoản này đã tồn tại',

            // 'txt_password.required' => 'Chưa nhập mật khẩu',
            // 'txt_password.min' => 'Mật khẩu ít nhất 6 ký tự',
            // 'txt_password.max' => 'Mật khẩu tối đa 10 ký tự',

            // 'txt_sex.required' => 'Chưa chọn giới tính',
            // 'txt_birthday.required' => 'Chưa chọn ngày sinh',

            // 'txt_email.required' => 'Chưa nhập địa chỉ email',
            // 'txt_email.email' => 'Vui lòng nhập đúng định dạng email',

            // 'txt_phone.required' => 'Chưa nhập số điện thoại',
            // 'txt_address.required' => 'Chưa nhập địa chỉ cư trú',
            // 'txt_role_id.required' => 'Chưa chọn quyền truy cập'
        ]);

        $role = new levels();
        $role->name_level = $request->input('roleName');
        $role->discribe = $request->input('description');
        $role->save();

        $add_role = $request->session()->get('add_role');
        session()->put('add_role');

        return redirect()->back()->with('add_role','');
    }

    // trang xóa quyền truy cập
    public function delete_role(Request $request, $id){
        levels::destroy($id);

        $delete_role = $request->session()->get('delete_role');
        session()->put('delete_role');

        return redirect()->back()->with('delete_role','');

    }

    // trang quản lý bài đăng
    public function manage_post_new(Request $request){
        $type_post = DB::table('post_types')->get();
        $province = DB::table('provinces')->get();
        return view('admin.manage_post_new.manage_post_new')->with([
            'type_post' => $type_post,
            'province' => $province
        ]);
    }

    // trang quản lý loại bài đăng
    public function manage_type_post_new(Request $request){
        $allTypePost = DB::table('post_types')->get();
        return view('admin.manage_type_post_new.manage_type_post_new')->with([
            'allTypePost' => $allTypePost
        ]);
    }

    // thêm loại bài đăng
    public function add_type_post_new(Request $request){
        $type_post_new = new post_type();
        $type_post_new->post_type_name = $request->input('typeNamePost');
        $type_post_new->save();

        $add_type_post = $request->session()->get('add_type_post');
        session()->put('add_type_post');

        return redirect()->back()->with('add_type_post','');
    }

    // xóa loại bài đăng
    public function delete_type_post_new(Request $request, $id){
        post_type::destroy($id);

        $delete_type_post = $request->session()->get('delete_type_post');
        session()->put('delete_type_post');

        return redirect()->back()->with('delete_type_post','');
    }

    // trang quản lý tỉnh thành
    public function manage_province(Request $request){
        $allDistrict = DB::table('districts')->get();
        $allProvince = DB::table('provinces')->get();
        $province = DB::table('provinces')->paginate(10);
        return view('admin.manage_province.manage_province')->with([
            'province' => $province,
            'allProvince' => $allProvince,
            'allDistrict' => $allDistrict
        ]);
    }

    // thêm tỉnh thành
    public function add_province(Request $request){
        $province = new province();
        $province->province_name = $request->input('nameProvince');
        $province->save();

        $add_province = $request->session()->get('add_province');
        session()->put('add_province');

        return redirect()->back()->with('add_province', '');
    }

    // xóa tỉnh thành
    public function delete_province(Request $request, $id){
        province::destroy($id);
        $delete_province = $request->session()->get('delete_province');
        session()->put('delete_province');

        return redirect()->back()->with('delete_province', '');
    }

    // trang quản lý quận huyện
    public function manage_district(Request $request){
        $allDistrict = DB::table('districts')->get();
        $district = DB::table('districts')->paginate(10);
        $allProvince = DB::table('provinces')->get();
        return view('admin.manage_district.manage_district')->with([
            'allDistrict' => $allDistrict,
            'district' => $district,
            'allProvince' => $allProvince
        ]);
    }

    // thêm quận huyện
    public function add_district(Request $request){
        $district = new districts();
        $district->province_id = $request->input('province_id');
        $district->district_name = $request->input('nameDistrict');
        $district->save();

        $add_district = $request->session()->get('add_district');
        session()->put('add_district');

        return redirect()->back()->with('add_district', '');
    }

    // xóa quận huyện
    public function delete_district(Request $request, $id)  {
        districts::destroy($id);
        $delete_district = $request->session()->get('delete_district');
        session()->put('delete_district');

        return redirect()->back()->with('delete_district', '');
    }

    // trang quản lý danh mục
    public function manage_category(Request $request){
        $category = DB::table('categorys')->get();
        $allCategory = DB::table('categorys')->paginate(10);
        return view('admin.manage_category.manage_category')->with([
            'allCategory' => $allCategory,
            'category' => $category
        ]);
    }

    // thêm danh mục
    public function add_category(Request $request){
        $category = new categorys();
        $category->category_name = $request->input('nameCategory');
        $category->save();

        $add_category = $request->session()->get('add_category');
        session()->put('add_category');

        return redirect()->back()->with('add_category', '');
    }

    // xóa danh mục
    public function delete_category(Request $request, $id){
        categorys::destroy($id);

        $delete_category = $request->session()->get('delete_category');
        session()->put('delete_category');

        return redirect()->back()->with('delete_category', '');
    }

    // trang quản lý danh mục cấp 1
    public function manage_category_first(Request $request){
        $allCategoryFirst = DB::table('category_child_firsts')->get();
        $categoryFirst = DB::table('category_child_firsts')->paginate(10);
        $category = DB::table('categorys')->get();
        return view('admin.manage_category_first.manage_category_first')->with([
            'category' => $category,
            'categoryFirst' => $categoryFirst,
            'allCategoryFirst' => $allCategoryFirst
        ]);
    }

    // thêm doanh mục cấp 1
    public function add_category_first(Request $request){
        $category_first = new category_child_firsts();
        $category_first->category_id = $request->input('category_id');
        $category_first->category_child_name = $request->input('nameCategoryLevel1');
        $category_first->save();

        $add_category_first = $request->session()->get('add_category_first');
        session()->put('add_category_first');

        return redirect()->back()->with('add_category_first', '');
    }

    // xóa doanh mục cấp 1
    public function delete_category_first(Request $request, $id){
        category_child_firsts::destroy($id);

        $delete_category_first = $request->session()->get('delete_category_first');
        session()->put('delete_category_first');

        return redirect()->back()->with('delete_category_first', '');
    }

    // trang quản lý ảnh bìa
    public function manage_banner(Request $request){
        $post_new = DB::table('post_news')->get();
        $banner = DB::table('banners')->get();
        return view('admin.manage_banner.manage_banner')->with([
            'post_new' => $post_new,
            'banner' => $banner
        ]);
    }

    // thêm ảnh bìa
    public function add_banner(Request $request){
        $banner = new banners();

        if($request->hasfile('upload_file')){
            $get_file = $request->file('upload_file');

            $file_image_total = $get_file->getClientOriginalName();

            $get_file->move(public_path('upload/banner'), $file_image_total);

            $banner->image = $file_image_total;
        }
        $banner->post_id = $request->input('post_id');
        $banner->title = $request->input('title');
        $banner->save();

        $add_banner = $request->session()->get('add_banner');
        session()->put('add_banner');

        return redirect()->back()->with('add_banner', '');
    }

    // xóa ảnh bìa
    public function delete_banner(Request $request, $id){
        banners::destroy($id);

        $delete_banner = $request->session()->get('delete_banner');
        session()->put('delete_banner');

        return redirect()->back()->with('delete_banner', '');
    }

    // trang quản lý tin tức
    public function manage_new(Request $request){
        return view('admin.manage_new.manage_new');
    }

    // thêm tin tức
    public function add_new(Request $request){
        $new = new news();
        if($request->hasfile('file')){
            $get_file = $request->file('file');

            $file_image_total = $get_file->getClientOriginalName();

            $get_file->move(public_path('upload/image_new'), $file_image_total);

            $new->image = $file_image_total;
        }
        $new->title = $request->input('title');
        $new->content = $request->input('content');
        $new->save();

        $add_new = $request->session()->get('add_new');
        session()->put('add_new');

        return redirect()->back()->with('add_new', '');
    }
}
