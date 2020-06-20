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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    // ==================================================================
    //Trang chủ admin
    public function index(Request $request)
    {
        return view('admin.index_admin');
    }
    // ==================================================================



    // ==================================================================
    //Trang quản lý admin
    public function manage_admin(Request $request)
    {
        $admin = DB::table('users')->where('level_id', 1)->get();
        $allAdmin = DB::table('users')->where('level_id', 1)->get();
        return view('admin.manage_admin.manage_admin')->with([
            'admin' => $admin,
            'allAdmin' => $allAdmin
        ]);
    }
    // ==================================================================



    // ==================================================================
    //Trang thông tin cá nhân
    public function profile_user(Request $request)
    {
        return view('admin.profile_admin.profile_user');
    }

    // trang thay đổi mật khẩu
    public function change_password(Request $request)
    {
        return view('admin.profile_admin.change_password');
    }


    // ==================================================================
    // Trang thêm mới admin
    public function add_admin_new(Request $request)
    {
        return view('admin.manage_admin.add_admin');
    }

    // Xử lý thêm admin vào csdl
    public function add_admin(Request $request)
    {
        $this->validate(
            $request,
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
            ]
        );

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
        $admin->verify = 0;
        $admin->save();

        $add_admin = $request->session()->get('add_admin');
        return redirect('admin/manage-admin')->with('add_admin', '');
    }
    // ==================================================================




    // ==================================================================
    // tìm kiếm admin
    public function search_admin(Request $request)
    {
        $admin_search = $request->input('username_search');

        if ($admin_search == null) {
            $admin = DB::table('users')->where('level_id', 1)->get();
            $allAdmin = DB::table('users')->where('level_id', 1)->get();
        } else {
            $admin = DB::table('users')->where('username', $admin_search)->get();
            $allAdmin = DB::table('users')->where('level_id', 1)->get();
        }

        return view('admin.manage_admin.manage_admin')->with([
            'admin' => $admin,
            'allAdmin' => $allAdmin
        ]);
    }


    // trang quản lý thành viên
    public function manage_member(Request $request)
    {
        $member = DB::table('users')->where('level_id', 2)->get();
        $allMember = DB::table('users')->where('level_id', 2)->get();
        return view('admin.manage_member.manage_member')->with([
            'member' => $member,
            'allMember' => $allMember
        ]);
    }

    // trang xem thông tin thành viên
    public function view_information_member(Request $request, $id)
    {
        $member = User::find($id);
        return view('admin.manage_member.information_member')->with([
            'member' => $member
        ]);
    }

    // xóa tất cả thành viên
    public function delete_all_member(Request $request)
    {
        $ids = $request->ids;
        DB::table("users")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // tìm kiếm thành viên
    public function search_member(Request $request)
    {
        $username = $request->input('username_search');
        $phone = $request->input('phone_search');

        if (($username == null) && ($phone == null)) {
            $allMember = DB::table('users')->where('level_id', 2)->get();
            $member = DB::table('users')->where('level_id', 2)->get();
        } else {
            $allMember = DB::table('users')->where('level_id', 2)->get();
            $member = DB::table('users')->where('username', $username)
                ->orWhere('phone', $phone)->get();
        }

        return view('admin.manage_member.manage_member')->with([
            'member' => $member,
            'allMember' => $allMember
        ]);
    }

    // Trang quản lý quyền truy cập
    public function manage_role(Request $request)
    {
        $role = DB::table('levels')->get();
        $allRole = DB::table('levels')->get();
        return view('admin.manage_role.manage_role')->with([
            'role' => $role,
            'allRole' => $allRole
        ]);
    }

    // tìm kiếm quyền truy cập
    public function search_role(Request $request)
    {
        $role_search = $request->input('role_search');

        if ($role_search == null) {
            $role = DB::table('levels')->get();
            $allRole = DB::table('levels')->get();
        } else {
            $role = DB::table('levels')->where('name_level', $role_search)->get();
            $allRole = DB::table('levels')->get();
        }

        return view('admin.manage_role.manage_role')->with([
            'role' => $role,
            'allRole' => $allRole
        ]);
    }

    // thêm quyền truy cập
    public function add_role(Request $request)
    {
        $this->validate(
            $request,
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
            ]
        );

        $role = new levels();
        $role->name_level = $request->input('roleName');
        $role->discribe = $request->input('description');
        $role->save();

        $add_role = $request->session()->get('add_role');
        session()->put('add_role');

        return redirect()->back()->with('add_role', '');
    }

    // xóa tất cả quyền truy cập
    public function delete_role(Request $request)
    {
        $ids = $request->ids;
        DB::table("levels")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // trang quản lý bài đăng
    public function manage_post_new(Request $request)
    {
        $type_post = DB::table('post_types')->get();
        $province = DB::table('provinces')->get();
        $district = DB::table('districts')->get();
        $postNew = DB::table('post_news')->paginate(10);
        return view('admin.manage_post_new.manage_post_new')->with([
            'type_post' => $type_post,
            'province' => $province,
            'district' => $district,
            'postNew' => $postNew
        ]);
    }

    // tim kiếm bài đăng
    public function search_post_new(Request $request)
    {
        $status = $request->input('status_search');
        $post_type = $request->input('post_type_search_id');
        $province_search = $request->input('province_search_id');



        $type_post = DB::table('post_types')->get();
        $province = DB::table('provinces')->get();
        $district = DB::table('districts')->get();

        if (($status == null) && ($post_type == null) && ($province_search == null)) {

            $postNew = DB::table('post_news')->paginate(10);
        } elseif (($status != null) && ($post_type != null) && ($province_search != null)) {

            $postNew = DB::table('post_news')
                ->where(function ($query) use ($status) {
                    $query->where('post_news.status', '=', $status);
                })
                ->where(function ($query) use ($post_type) {
                    $query->where('post_news.post_type_id', '=', $post_type);
                })
                ->where(function ($query) use ($province_search) {
                    $query->where('post_news.province_id', '=', $province_search);
                })
                ->paginate(10);
        } else {
            $postNew = DB::table('post_news')
                ->where(function ($query) use ($status) {
                    $query->where('post_news.status', '=', $status);
                })
                ->orWhere(function ($query) use ($post_type) {
                    $query->where('post_news.post_type_id', '=', $post_type);
                })
                ->orWhere(function ($query) use ($province_search) {
                    $query->where('post_news.province_id', '=', $province_search);
                })
                ->paginate(10);
        }

        return view('admin.manage_post_new.manage_post_new')->with([
            'type_post' => $type_post,
            'province' => $province,
            'district' => $district,
            'postNew' => $postNew
        ]);
    }

    // xóa bài đăng
    public function delete_post_new(Request $request, $id)
    {
        post_news::destroy($id);
        $delete_post_new = $request->session()->get('delete_post_new');
        session()->put('delete_post_new');
        return redirect()->back()->with('delete_post_new', '');
    }

    // xem chi tiết bài đăng
    public function view_post_new(Request $request, $id)
    {
        $postNew = DB::table('post_news')->where('id', $id)->get();
        return view('admin.manage_post_new.view_post_new')->with([
            'postNew' => $postNew
        ]);
    }

    // trang quản lý loại bài đăng
    public function manage_type_post_new(Request $request)
    {
        $allTypePost = DB::table('post_types')->get();
        return view('admin.manage_type_post_new.manage_type_post_new')->with([
            'allTypePost' => $allTypePost
        ]);
    }

    // xóa tất cả loại bài đăng
    public function delete_all_type_post_new(Request $request)
    {
        $ids = $request->ids;
        DB::table("post_types")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // chỉnh sửa loại bài đăng
    public function edit_type_post_new(Request $request, $id)
    {
        $type_post = DB::table('post_types')->where('id', $id)->get();
        return view('admin.manage_type_post_new.edit_type_post_new')->with([
            'type_post' => $type_post
        ]);
    }

    public function post_edit_type_post_new(Request $request, $id)
    {
        $type_post = post_type::find($id);
        $type_post->post_type_name = $request->input('typePostName');
        $type_post->save();

        $edit_type_post = $request->session()->get('edit_type_post');
        session()->put('edit_type_post');
        return redirect()->route('manage_type_post_new')->with('edit_type_post', '');
    }

    // thêm loại bài đăng
    public function add_type_post_new(Request $request)
    {
        $type_post_new = new post_type();
        $type_post_new->post_type_name = $request->input('typeNamePost');
        $type_post_new->save();

        $add_type_post = $request->session()->get('add_type_post');
        session()->put('add_type_post');

        return redirect()->back()->with('add_type_post', '');
    }

    // trang quản lý tỉnh thành
    public function manage_province(Request $request)
    {
        $allProvince = DB::table('provinces')->get();
        $province = DB::table('provinces')->paginate(10);
        return view('admin.manage_province.manage_province')->with([
            'province' => $province,
            'allProvince' => $allProvince
        ]);
    }

    // tìm kiếm tỉnh thành
    public function search_province(Request $request)
    {
        $allProvince = DB::table('provinces')->get();

        $province_search = $request->input('province_id');

        if ($province_search ==  null) {
            $province = DB::table('provinces')->paginate(10);
        } else {
            $province = DB::table('provinces')
                ->where(function ($query) use ($province_search) {
                    $query->where('provinces.id', '=', $province_search);
                })
                ->paginate(10);
        }



        return view('admin.manage_province.manage_province')->with([
            'province' => $province,
            'allProvince' => $allProvince
        ]);
    }

    // chỉnh sửa tỉnh thành
    public function edit_province(Request $request, $id)
    {
        $province = DB::table('provinces')->where('id', $id)->get();
        return view('admin.manage_province.edit_province')->with([
            'province' => $province
        ]);
    }

    public function post_edit_province(Request $request, $id)
    {
        $province = province::find($id);
        $province->province_name = $request->input('provinceName');
        $province->save();

        $edit_province = $request->session()->get('edit_province');
        session()->put('edit_province');
        return redirect()->route('manage_province')->with('edit_province', '');
    }

    // thêm tỉnh thành
    public function add_province(Request $request)
    {
        $province = new province();
        $province->province_name = $request->input('nameProvince');
        $province->save();

        $add_province = $request->session()->get('add_province');
        session()->put('add_province');

        return redirect()->back()->with('add_province', '');
    }

    // xóa tất cả tỉnh thành
    public function delete_province(Request $request)
    {
        $ids = $request->ids;
        DB::table("provinces")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // trang quản lý quận huyện
    public function manage_district(Request $request)
    {
        $allDistrict = DB::table('districts')->get();
        $district = DB::table('districts')->paginate(10);
        $allProvince = DB::table('provinces')->get();
        return view('admin.manage_district.manage_district')->with([
            'allDistrict' => $allDistrict,
            'district' => $district,
            'allProvince' => $allProvince
        ]);
    }

    // tìm kiếm quận huyện
    public function search_district(Request $request)
    {
        $allDistrict = DB::table('districts')->get();
        $allProvince = DB::table('provinces')->get();

        $district_search = $request->input('district_id');
        $province_search = $request->input('province_id');

        if (($district_search == null) && ($province_search == null)) {
            $district = DB::table('districts')->paginate(10);
        } elseif (($district_search != null) && ($province_search != null)) {
            $district = DB::table('districts')
                ->where(function ($query) use ($district_search) {
                    $query->where('districts.id', '=', $district_search);
                })
                ->where(function ($query) use ($province_search) {
                    $query->where('districts.province_id', '=', $province_search);
                })
                ->paginate(10);
        } else {
            $district = DB::table('districts')
                ->where(function ($query) use ($district_search) {
                    $query->where('districts.id', '=', $district_search);
                })
                ->orWhere(function ($query) use ($province_search) {
                    $query->where('districts.province_id', '=', $province_search);
                })
                ->paginate(10);
        }

        return view('admin.manage_district.manage_district')->with([
            'allDistrict' => $allDistrict,
            'district' => $district,
            'allProvince' => $allProvince
        ]);
    }

    // thêm quận huyện
    public function add_district(Request $request)
    {
        $district = new districts();
        $district->province_id = $request->input('province_id');
        $district->district_name = $request->input('nameDistrict');
        $district->save();

        $add_district = $request->session()->get('add_district');
        session()->put('add_district');

        return redirect()->back()->with('add_district', '');
    }

    // xóa tất cả quận huyện
    public function delete_district(Request $request)
    {
        $ids = $request->ids;
        DB::table("districts")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // chỉnh sủa quận huyện
    public function edit_district(Request $request, $id)
    {
        $district = DB::table('districts')->where('id', $id)->get();

        $province_id = DB::table('districts')
            ->select('province_id')
            ->where('id', $id)
            ->groupBy('province_id');

        $province = DB::table('provinces')
            ->joinSub($province_id, 'districts', function ($join) {
                $join->on('provinces.id', '=', 'districts.province_id');
            })
            ->get();

        $allProvince = DB::table('provinces')->get();

        return view('admin.manage_district.edit_district')->with([
            'district' => $district,
            'province' => $province,
            'allProvince' => $allProvince
        ]);
    }

    public function post_edit_district(Request $request, $id)
    {
        $district = districts::find($id);
        $district->district_name = $request->input('districtName');
        $district->province_id = $request->input('province_id');
        $district->save();

        $edit_district = $request->session()->get('edit_district');
        session()->put('edit_district');

        return redirect()->route('manage_district')->with('edit_district', '');
    }

    // trang quản lý danh mục
    public function manage_category(Request $request)
    {
        $category = DB::table('categorys')->paginate(10);
        $allCategory = DB::table('categorys')->get();
        return view('admin.manage_category.manage_category')->with([
            'allCategory' => $allCategory,
            'category' => $category
        ]);
    }

    // tìm kiếm doanh mục
    public function search_category(Request $request)
    {
        $category_name_search = $request->input('category_name_search');

        if ($category_name_search ==  null) {
            $category = DB::table('categorys')->paginate(10);
            $allCategory = DB::table('categorys')->get();
        } else {
            $category = DB::table('categorys')->where('category_name', $category_name_search)->paginate(10);
            $allCategory = DB::table('categorys')->get();
        }

        return view('admin.manage_category.manage_category')->with([
            'allCategory' => $allCategory,
            'category' => $category
        ]);
    }

    // thêm danh mục
    public function add_category(Request $request)
    {
        $category = new categorys();
        $category->category_name = $request->input('nameCategory');
        $category->save();

        $add_category = $request->session()->get('add_category');
        session()->put('add_category');

        return redirect()->back()->with('add_category', '');
    }

    // xóa danh mục
    public function delete_category(Request $request)
    {
        $ids = $request->ids;
        DB::table("categorys")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // chỉnh sửa doang mục
    public function get_edit_category(Request $request, $id)
    {
        $category = DB::table('categorys')->where('id', $id)->get();
        return view('admin.manage_category.edit_category')->with([
            'category' => $category
        ]);
    }

    public function put_edit_category(Request $request, $id)
    {
        $category = categorys::find($id);
        $category->category_name = $request->input('category_name');
        $category->save();

        $edit_category = $request->session()->get('edit_category');
        session()->put('edit_category');

        return redirect()->route('manage_category')->with('edit_category', '');
    }

    // trang quản lý danh mục cấp 1
    public function manage_category_first(Request $request)
    {
        $allCategoryFirst = DB::table('category_child_firsts')->get();
        $categoryFirst = DB::table('category_child_firsts')->paginate(10);
        $category = DB::table('categorys')->get();
        return view('admin.manage_category_first.manage_category_first')->with([
            'category' => $category,
            'categoryFirst' => $categoryFirst,
            'allCategoryFirst' => $allCategoryFirst
        ]);
    }

    // tìm kiếm doanh mục cấp 1
    public function search_category_first(Request $request)
    {
        $category_id = $request->input('category_id');
        $category_child_name = $request->input('category_child_name');

        if (($category_id == null) && ($category_child_name == null)) {
            $allCategoryFirst = DB::table('category_child_firsts')->get();
            $categoryFirst = DB::table('category_child_firsts')->paginate(10);
            $category = DB::table('categorys')->get();
        } else {
            $allCategoryFirst = DB::table('category_child_firsts')->get();
            $categoryFirst = DB::table('category_child_firsts')->where('category_id', $category_id)
                ->orWhere('category_child_name', $category_child_name)->paginate(15);
            $category = DB::table('categorys')->get();
        }

        return view('admin.manage_category_first.manage_category_first')->with([
            'category' => $category,
            'categoryFirst' => $categoryFirst,
            'allCategoryFirst' => $allCategoryFirst
        ]);
    }

    // thêm doanh mục cấp 1
    public function add_category_first(Request $request)
    {
        $category_first = new category_child_firsts();
        $category_first->category_id = $request->input('category_id');
        $category_first->category_child_name = $request->input('nameCategoryLevel1');
        $category_first->save();

        $add_category_first = $request->session()->get('add_category_first');
        session()->put('add_category_first');

        return redirect()->back()->with('add_category_first', '');
    }

    // xóa tất cả doanh mục cấp 1
    public function delete_category_first(Request $request)
    {
        $ids = $request->ids;
        DB::table("category_child_firsts")->whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => "Deleted successfully"]);
    }

    // trang quản lý ảnh bìa
    public function manage_banner(Request $request)
    {
        $post_new = DB::table('post_news')->get();
        $banner = DB::table('banners')->get();
        return view('admin.manage_banner.manage_banner')->with([
            'post_new' => $post_new,
            'banner' => $banner
        ]);
    }

    // thêm ảnh bìa
    public function add_banner(Request $request)
    {
        $banner = new banners();

        if ($request->hasfile('upload_file')) {
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
    public function delete_banner(Request $request, $id)
    {
        banners::destroy($id);

        $delete_banner = $request->session()->get('delete_banner');
        session()->put('delete_banner');

        return redirect()->back()->with('delete_banner', '');
    }

    // trang quản lý tin tức
    public function manage_new(Request $request)
    {
        $new = DB::table('news')->paginate(10);
        return view('admin.manage_new.manage_new')->with([
            'new' => $new
        ]);
    }

    // tìm kiếm tin tức
    public function search_new(Request $request)
    {
        $new_search = $request->input('new_id');
        $new = DB::table('news')->where('id', $new_search)->paginate(10);
        return view('admin.manage_new.manage_new')->with([
            'new' => $new
        ]);
    }

    // thêm tin tức
    public function get_add_new(Request $request)
    {
        return view('admin.manage_new.add_new');
    }

    public function add_new(Request $request)
    {
        $new = new news();
        if ($request->hasfile('upload_file')) {
            $get_file = $request->file('upload_file');

            $file_image_total = $get_file->getClientOriginalName();

            $get_file->move(public_path('upload/image_new'), $file_image_total);

            $new->image = $file_image_total;
        }
        $new->title = $request->input('title');
        $new->content = $request->input('summary-ckeditor');
        $new->save();

        $add_new = $request->session()->get('add_new');
        session()->put('add_new');

        return redirect()->route('manage_new')->with('add_new', '');
    }

    // xóa tin tức
    public function delete_new(Request $request, $id)
    {
        news::destroy($id);
        $delete_new = $request->session()->get('delete_new');
        session()->put('delete_new');
        return redirect()->back()->with('delete_new', '');
    }
}
