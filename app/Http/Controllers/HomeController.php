<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use Illuminate\Support\Str;
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
use App\Report;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // ==============================================================
    //Trang chủ
    public function index()
    {
        $show_category = categorys::all();
        $banner = DB::table('banners')->latest()->limit(5)->get();
        $new = DB::table('news')->latest()->limit(1)->get();
        return view('home.index', [
            'show_category' => $show_category,
            'banner' => $banner,
            'new' => $new
        ]);
    }
    // ==============================================================


    // ==============================================================
    //Xem theo danh mục
    public function view_category($name, $id)
    {
        $category = DB::table('categorys')->where('id', $id)->get();
        $category_first = DB::table('category_child_firsts')->where('category_id', $id)->get();
        $allCategory = DB::table('categorys')->get();
        $province = DB::table('provinces')->get();

        $postNew = DB::table('category_child_firsts')
            ->join('post_news', function ($join) use ($id) {
                $join->on('post_news.category_first_id', '=', 'category_child_firsts.id')
                    ->where('category_child_firsts.category_id', '=', $id);
            })
            ->paginate(8);

        return view('home.view_category')->with([
            'category' => $category,
            'category_first' => $category_first,
            'province' => $province,
            'allCategory' => $allCategory,
            'postNew' => $postNew
        ]);
    }

    // ==============================================================
    // xem danh mục cấp 1
    public function view_category_first(Request $request, $name, $id_category_first)
    {
        $province = DB::table('provinces')->get();
        $allCategory = DB::table('categorys')->get();

        $category_first = DB::table('category_child_firsts')->where('id', $id_category_first)->get();
        $postNewCategoryFirst = DB::table('post_news')->where('category_first_id', $id_category_first)->paginate(8);

        $category_id = DB::table('category_child_firsts')
            ->select('category_id')
            ->where('id', $id_category_first)
            ->groupBy('category_id');

        $category = DB::table('categorys')
            ->joinSub($category_id, 'category_child_firsts', function ($join) {
                $join->on('categorys.id', '=', 'category_child_firsts.category_id');
            })
            ->get();

        foreach ($category_first as $value) {
            $allCategoryFirst = DB::table('category_child_firsts')->where('category_id', $value->category_id)->get();
        }

        return view('home.view_category_first')->with([
            'category' => $category,
            'category_first' => $category_first,
            'province' => $province,
            'allCategory' => $allCategory,
            'allCategoryFirst' => $allCategoryFirst,
            'postNewCategoryFirst' => $postNewCategoryFirst
        ]);
    }

    //Xem theo danh mục chi tiết
    public function view_category_detail($name, $id)
    {
        $allCategory = DB::table('categorys')->get();
        $province = DB::table('provinces')->get();
        $postNew = DB::table('post_news')->where('id', $id)->get();

        $category = DB::table('post_news')
            ->join('category_child_firsts', function ($join) use ($id) {
                $join->on('post_news.category_first_id', '=', 'category_child_firsts.id')
                    ->where('post_news.id', '=', $id);
            })
            ->join('categorys', function ($join) {
                $join->on('categorys.id', '=', 'category_child_firsts.category_id');
            })
            ->get();

        $category_first = DB::table('post_news')
            ->join('category_child_firsts', function ($join) use ($id) {
                $join->on('post_news.category_first_id', '=', 'category_child_firsts.id')
                    ->where('post_news.id', '=', $id);
            })
            ->get();

        foreach ($postNew as $value) {
            $likePostNew = DB::table('post_news')
                ->where('category_first_id', $value->category_first_id)
                ->where('id', '<>', $id)
                ->get();
        }

        $random = $id . rand(10000, 99999);

        return view('home.view_category_detail')->with([
            'province' => $province,
            'allCategory' => $allCategory,
            'postNew' => $postNew,
            'category' => $category,
            'category_first' => $category_first,
            'likePostNew' => $likePostNew,
            'random' => $random
        ]);
    }

    //Xem theo danh mục chi tiết
    public function report_new($id_post_new, $random_id){
        $postNew = DB::table('post_news')->where('id', $id_post_new)->get();
        return view('home.report.report_new')->with([
            'postNew' => $postNew,
            'random_id' => $random_id
        ]);
    }

    public function ReportPostNew(Request $request, $id_post_new, $random_id){
        $report = new Report();
        $report->post_new_id = $id_post_new;
        $report->report_name = $request->input('exampleRadios');
        $report->username = $request->input('uname');
        $report->email = $request->input('phone');
        $report->save();

        $reportSuccess = $request->session()->get('reportSuccess');
        session()->put('reportSuccess');
        
        return redirect()->back()->with('reportSuccess', '');
    }

    public function savePostNew(Request $request, $id_post_new, $id_status_save){
        
        if ($id_status_save == 0){
            $save_post = DB::table('post_news')->where('id', $id_post_new)->update(['save_post' => 1]);
        }else{
            $save_post = DB::table('post_news')->where('id', $id_post_new)->update(['save_post' => 0]);
        }

        return redirect()->back();
    }

    //Xem theo danh mục chi tiết
    public function profile_user()
    {
        return view('home.profile_user');
    }
    // ==============================================================



    // ==============================================================
    //Đăng tin cấp cha danh mục
    public function post_new_category()
    {
        $categorys = categorys::all();
        return view('home.post_new.post_new_parent', ['categorys' => $categorys]);
    }

    //Đăng tin
    public function post_new($name, $id)
    {
        $categorys_ids = categorys::find($id);
        $province = province::all();
        $post_types = post_type::all();

        return view(
            'home.post_new.post_new',
            [
                'categorys_ids' => $categorys_ids,
                'province' => $province,
                'post_types' => $post_types,
            ]
        );
    }

    //Xử lý đăng tin
    public function post_post_new(Request $request)
    {
        // THỰC HIỆN 1
        // ----------------------------------------------------------------------------
        $add_second = new category_child_seconds();
        //ID danh mục cấp 1
        $add_second->category_first_id = $request->input('txt_category_firsts_id');

        //Bất động sản
        $add_second->estate_category = $request->input('txt_estate_category');
        $add_second->estate_address = $request->input('txt_estate_address');
        $add_second->estate_name_project = $request->input('txt_estate_name_project');
        $add_second->estate_land_area = $request->input('txt_estate_land_area');
        $add_second->estate_floor = $request->input('txt_estate_floor');
        $add_second->estate_bedroom = $request->input('txt_estate_bedroom');
        $add_second->estate_bathroom = $request->input('txt_estate_bathroom');
        $add_second->estate_area_used = $request->input('txt_estate_area_used');
        $add_second->estate_juridical = $request->input('txt_estate_juridical');

        //Xe cộ
        $add_second->car_color = $request->input('txt_car_color');
        $add_second->car_version = $request->input('txt_car_version');
        $add_second->car_origin = $request->input('txt_car_origin');
        $add_second->car_status = $request->input('txt_car_status');
        $add_second->car_produce_name = $request->input('txt_car_produce_name');
        $add_second->car_model_name = $request->input('txt_car_model_name');
        $add_second->car_register_year = $request->input('txt_car_register_year');
        $add_second->car_category = $request->input('txt_car_category');
        $add_second->car_number_kilometer = $request->input('txt_car_number_kilometer');
        $add_second->car_fuel = $request->input('txt_car_fuel');

        //Đồ điện tử
        $add_second->electron_manufacturer = $request->input('txt_electron_manufacturer');
        $add_second->electron_model_machine = $request->input('txt_electron_model_machine');
        $add_second->electron_color = $request->input('txt_electron_color');
        $add_second->electron_status = $request->input('txt_electron_status');

        //Việc làm tuyển sinh
        $add_second->work_type = $request->input('txt_work_type');
        $add_second->work_old = $request->input('txt_work_old');
        $add_second->work_sex = $request->input('txt_work_sex');
        $add_second->work_certificate = $request->input('txt_work_certificate');
        $add_second->work_foreign_language = $request->input('txt_work_foreign_language');
        $add_second->work_position = $request->input('txt_work_position');
        $add_second->work_job = $request->input('txt_work_job');
        $add_second->work_experience = $request->input('txt_work_experience');
        $add_second->work_salary_level = $request->input('txt_work_salary_level');

        //do-an-thuc-pham-va-loai-khac
        $add_second->food_origin = $request->input('txt_food_origin');
        $add_second->food_expiration = $request->input('txt_food_expiration');

        //tu-lanh-may-lanh-may-giat
        $add_second->refrigerator_status = $request->input('txt_refrigerator_status');
        $add_second->refrigerator_manufacturer = $request->input('txt_refrigerator_manufacturer');

        //do-gia-dung-noi-that-cay-canh
        $add_second->furniture_status = $request->input('txt_furniture_status');

        //thoi-trang-do-dung-ca-nhan
        $add_second->fashion_status = $request->input('txt_fashion_status');
        $add_second->fashion_type_product = $request->input('txt_fashion_type_product');

        //giai-tri-the-thao-so-thich
        $add_second->sport_status = $request->input('txt_sport_status');

        //do-van-phong-cong-nong-nghiep
        $add_second->office_furniture_status = $request->input('txt_office_furniture_status');

        //dich-vu-du-lich
        $add_second->service_type_work = $request->input('txt_service_type_work');
        $add_second->service_experience_work = $request->input('txt_service_experience_work');

        //me-va-be
        $add_second->mom_baby_status = $request->input('txt_mom_baby_status');
        $add_second->mom_baby_type_product = $request->input('txt_mom_baby_type_product');
        // ----------------------------------------------------------------------------
        $add_second->save();





        //THỰC HIỆN CUỐI
        // ----------------------------------------------------------------------------
        $add_post_new = new post_news();
        $add_post_new->category_first_id = $request->input('txt_category_firsts_id');
        $add_post_new->post_type_id = $request->input('txt_post_type_id');
        $add_post_new->user_id = Auth::user()->id;

        //Lấy ID tỉnh/Huyện
        $district = $request->input('txt_district');
        $province = $request->input('txt_province');

        $get_provinces = DB::table('provinces')->where('province_name', $province)->get();
        foreach ($get_provinces as $key => $get_province) {
            $id_province = $get_province->id;
        }

        $get_districts = DB::table('districts')->where('district_name', $district)->get();
        foreach ($get_districts as $key => $get_district) {
            $id_district = $get_district->id;
        }

        $add_post_new->district_id = $id_district;
        $add_post_new->province_id = $id_province;
        //---------------------------------

        $add_post_new->title = $request->input('txt_title');
        $add_post_new->price = $request->input('txt_price');
        $add_post_new->unit_price = $request->input('txt_unit_price');
        $add_post_new->currency = $request->input('txt_currency');
        $add_post_new->content = $request->input('txt_content');
        $add_post_new->tag_search = $request->input('txt_tag_search');
        $add_post_new->number_date_expired = $request->input('txt_date_expired');

        //Upload nhiều hình ảnh
        if ($request->hasFile('txt_images')) {
            foreach ($request->file('txt_images') as $image) {
                $image_posts = $image->getClientOriginalName();
                $image->move(public_path('upload_images_post_new'), $image_posts);
                $data_image[] = $image_posts;
            }
        }
        $add_post_new->images = json_encode($data_image);
        //---------------------------------

        //Ẩn là 1, hiện là NULL
        $add_post_new->hidden_new = $request->input('txt_hiden_new');

        //Trạng thái có 3 loại: 0 là chưa duyệt, 1 là đã duyệt, 2 là hết hạn
        $add_post_new->status = 0;

        //Mặc định không lưu tin sẻ là 0
        $add_post_new->save_post = 0;

        $add_post_new->save();
        // ----------------------------------------------------------------------------
        $session_success = $request->session()->get('session_success');
        return redirect('page-all-news')->with('session_success', '');
    }
    // ==============================================================



    // ==============================================================
    // xem tin tức
    public function view_news_detail(Request $request, $name, $id)
    {
        $new = DB::table('news')->where('id', $id)->get();
        $newDifferent = DB::table('news')->where('id', '<>', $id)->latest()->limit(6)->get();
        return view('home.view_news_detail')->with([
            'new' => $new,
            'newDifferent' => $newDifferent
        ]);
    }
    // ==============================================================




    // ==============================================================
    //Trang đăng nhập
    public function page_login()
    {
        return view('home.page_login');
    }

    //Xử lý đăng nhập
    public function post_page_login(Request $request)
    {
        $email = $request->input('txt_email_phone');
        $phone = $request->input('txt_email_phone');
        $password = $request->input('txt_password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'verify' => 1])) {
            return redirect('/');
        } elseif (Auth::attempt(['phone' => $phone, 'password' => $password, 'verify' => 1])) {
            return redirect('/');
        } elseif (Auth::attempt(['phone' => $phone, 'password' => $password, 'verify' => 0])) {
            return redirect('admin');
        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'verify' => 0])) {
            return redirect('admin');
        } else {
            return redirect()->back()->with('message', 'Email, điện thoại hoặc mật khẩu của bạn không đúng');
        }
    }
    // ==============================================================


    // ==============================================================
    //Đăng ký
    public function page_register()
    {
        return view('home.page_register');
    }

    //Xử lý đăng ký
    public function post_page_register(Request $request)
    {
        $this->validate(
            $request,
            [
                'txt_username' => 'unique:users,username',
                'txt_email' => 'email|unique:users,email',
                'txt_phone' => 'unique:users,phone'
            ],
            [
                'txt_username.unique' => 'Tên tài khoản đã tồn tại',
                'txt_email.email' => 'Vui lòng nhập đúng định dạng email',
                'txt_email.unique' => 'Email đã tồn tại',
                'txt_phone.unique' => 'Số điện thoại đã tồn tại'
            ]
        );

        $user = User::create([
            'fullname' => trim($request->input('txt_fullname')),
            'username' => trim($request->input('txt_username')),
            'email' => strtolower($request->input('txt_email')),
            'phone' => strtolower($request->input('txt_phone')),
            'password' => bcrypt($request->input('txt_password')),
            'verifyToken' => Str::random(32),
            'verify' => 0,
        ]);

        Mail::to($user->email)->send(new VerificationEmail($user));

        session()->flash('message', 'Hãy kiểm tra email của bạn để kích hoạt tài khoản của bạn');

        return redirect()->back();
    }
    // ==============================================================






    // ==============================================================
    //-------------------------------------------
    //Quản lý tin tất cả
    public function page_all_news(Request $request)
    {
        $search = $request->input('txt_search');
        if ($search != "") {
            $all_news = post_news::where([
                ['title', 'LIKE', '%' . $search . '%'],
            ])->paginate(2);
        } else {
            $all_news = post_news::where('user_id', Auth::user()->id)->latest()->paginate(5);
        }
        return view('home.infor_profile.all_news', ['all_news' => $all_news]);
    }

    //Quản lý tin dịch vụ
    public function page_service_news(Request $request)
    {
        $search_service = $request->input('txt_search');
        if ($search_service != "") {
            $service_news = post_news::where([
                ['title', 'LIKE', '%' . $search_service . '%'], ['status', '=', 2]
            ])->paginate(2);
        } else {
            $service_news = post_news::where([
                ['user_id', '=', Auth::user()->id],
                ['status', '=', 2]
            ])->latest()->paginate(5);
        }
        return view('home.infor_profile.service_news', ['service_news' => $service_news]);
    }

    //Nâng cấp tin dịch vụ
    public function upgrade_news(Request $request, $id)
    {
        $upgrade = post_news::find($id);
        return view('home.infor_profile.upgrade_news', ['upgrade' => $upgrade]);
    }

    //Xóa tin
    public function delete_news($id, Request $request)
    {
        post_news::destroy($id);
        $delete_new = $request->session()->get('delete_new');
        return redirect()->back()->with('delete_new', '');
    }

    //Chỉnh sửa tin
    public function edit_news($id)
    {
        $edit_new = post_news::find($id);
        return view('home.infor_profile.edit_news', ['edit_new' => $edit_new]);
    }

    //Cập nhật tin
    public function update_news(Request $request, $id)
    {
        $edit_post_new = post_news::find($id);
        $edit_post_new->post_type_id = $request->input('txt_post_type_id');
        $edit_post_new->user_id = Auth::user()->id;

        //Lấy ID tỉnh/Huyện
        $district_edit = $request->input('txt_district');
        $province_edit = $request->input('txt_province');

        $get_province_edits = DB::table('provinces')->where('province_name', $province_edit)->get();
        foreach ($get_province_edits as $key => $get_province_edit) {
            $id_province_edit = $get_province_edit->id;
        }

        $get_district_edits = DB::table('districts')->where('district_name', $district_edit)->get();
        foreach ($get_district_edits as $key => $get_district_edit) {
            $id_district_edit = $get_district_edit->id;
        }

        $edit_post_new->district_id = $id_district_edit;
        $edit_post_new->province_id = $id_province_edit;
        //---------------------------------

        $edit_post_new->title = $request->input('txt_title');
        $edit_post_new->price = $request->input('txt_price');
        $edit_post_new->unit_price = $request->input('txt_unit_price');
        $edit_post_new->currency = $request->input('txt_currency');
        $edit_post_new->content = $request->input('txt_content');
        $edit_post_new->tag_search = $request->input('txt_tag_search');
        $edit_post_new->number_date_expired = $request->input('txt_date_expired');

        //Upload nhiều hình ảnh
        if ($request->hasFile('txt_images')) {
            foreach ($request->file('txt_images') as $image) {
                $image_post_edit = $image->getClientOriginalName();
                $image->move(public_path('upload_images_post_new'), $image_post_edit);
                $data_image_post_edit[] = $image_post_edit;
            }
            $edit_post_new->images = json_encode($data_image_post_edit);
        } else {
            $get_images = DB::table('post_news')->where('id', $id)->get();
            foreach ($get_images as $key => $get_image) {
                $image_db = $get_image->images;
            }
            $edit_post_new->images = $image_db;
        }

        //---------------------------------

        //Ẩn là 1, hiện là NULL
        $edit_post_new->hidden_new = $request->input('txt_hiden_new');

        //Trạng thái có 3 loại: 0 là chưa duyệt, 1 là đã duyệt, 2 là hết hạn
        $edit_post_new->status = 0;

        //Mặc định không lưu tin sẻ là 0
        $edit_post_new->save_post = 0;

        $edit_post_new->save();
        // ----------------------------------------------------------------------------
        $session_update = $request->session()->get('session_update');
        return redirect('page-all-news')->with('session_update', '');
    }
    //-------------------------------------------


    //-------------------------------------------
    //Quản lý tin lưu lại
    public function page_news_save(Request $request)
    {
        $search = $request->input('txt_search');
        if ($search != "") {
            $show_post_new_saves = post_news::where([
                ['title', 'LIKE', '%' . $search . '%'], ['save_post', '=', 1], ['user_saved_id', '=', Auth::user()->id],
            ])->paginate(2);
        } else {
            $show_post_new_saves = post_news::where([['save_post', '=', 1], ['user_saved_id', '=', Auth::user()->id],])->latest()->paginate(5);
        }
        return view('home.infor_profile.news_save', ['show_post_new_saves' => $show_post_new_saves]);
    }
    //Xóa tin đã lưu (thay đổi trạng thái lưu)
    public function none_news_save($id)
    {
        post_news::where('id', $id)->update(['save_post' => 0]);
        return redirect()->back();
    }
    //-------------------------------------------


    //-------------------------------------------
    //Quản lý thông tin tài khoản
    public function page_infor_account()
    {
        return view('home.infor_profile.infor_account');
    }

    //Cập nhật thông tin tài khoản
    public function update_infor_account(Request $request, $id)
    {
        $update = User::find($id);
        $update->username = $request->input('txt_username');
        $update->sex = $request->input('txt_sex');
        $update->birthday = $request->input('txt_birthday');
        $update->address = $request->input('txt_address');
        $update->phone = $request->input('txt_phone');

        //Upload nhiều hình ảnh
        if ($request->hasfile('txt_avatar')) {
            $file = $request->file('txt_avatar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('upload_images_avatar'), $filename);
            $update->avatar = $filename;
        } else {
            $get_avatars = DB::table('users')->where('id', $id)->get();
            foreach ($get_avatars as $key => $get_avatar) {
                $image_avatar = $get_avatar->avatar;
            }
            $update->avatar = $image_avatar;
        }
        $update->save();

        $update_infor = $request->session()->get('update_infor');
        return redirect('page-infor-account')->with('update_infor', '');
    }
    //-------------------------------------------



    //-------------------------------------------
    //Quản lý thông tin tài khoản
    public function page_payment_method()
    {
        return view('home.infor_profile.payment_method');
    }

    //Thay đổi mật khẩu
    public function page_change_password()
    {
        return view('home.infor_profile.change_password');
    }

    //Xử lý thay đổi mật khẩu
    public function update_change_password(Request $request, $id_user)
    {
        //Lấy trường id trong bảng user so sánh với thẻ input hidden có chứa id user 
        //mà mình muốn thay đổi mật khẩu của nó
        $users = DB::table('users')->where('id', $id_user)->get();

        //Trong model User tìm đến id thẻ input hidden có chứa id user cập nhật nó lại
        $change = User::find($id_user);

        $old_pass = $request->input('txt_old_pass');

        $new_pass = $request->input('txt_new_pass');

        $new_pass_confirm = $request->input('txt_new_pass_confirm');

        foreach ($users as $val_users) {
            //Lấy mật khẩu trong csdl ra
            $db_pass = $val_users->password;

            //Nếu mật khẩu trong thẻ inout (nhập mật khẩu cũ) mà bằng với mật khẩu trong csdl
            if (password_verify($old_pass, $db_pass)) {

                if ($new_pass == $new_pass_confirm) {
                    $change->password = bcrypt($request->input('txt_new_pass_confirm'));
                    $change->save();

                    $change_password_user = $request->session()->get('change_password_user');
                    return redirect()->back()->with('change_password_user', '');
                } else {
                    $change_password_user_fail = $request->session()->get('change_password_user_fail');
                    return redirect()->back()->with('change_password_user_fail', '');
                }
            } else {
                $old_pass_fail = $request->session()->get('old_pass_fail');
                return redirect()->back()->with('old_pass_fail', '');
            }
        }
    }
    //------------------------------
}
