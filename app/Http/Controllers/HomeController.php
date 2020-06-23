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
        $banner = DB::table('banners')->latest()->limit(3)->get();
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

        return view('home.view_category')->with([
            'category' => $category,
            'category_first' => $category_first,
            'province' => $province,
            'allCategory' => $allCategory
        ]);
    }


    //Xem theo danh mục chi tiết
    public function view_category_detail()
    {
        return view('home.view_category_detail');
    }

    // ==============================================================
    //Xem theo danh mục chi tiết
    public function report_new()
    {
        return view('home.report.report_new');
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
        return view('home.view_news_detail')->with([
            'new' => $new
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
    //=================================================


    //=================================================
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
    //=================================================






    //=================================================
    //-------------------------------------------
    //Quản lý tin tất cả
    public function page_all_news()
    {
        $all_news = post_news::where('user_id', Auth::user()->id)->paginate(5);
        return view('home.infor_profile.all_news', ['all_news' => $all_news]);
    }
    //Quản lý tin dịch vụ
    public function page_service_news()
    {
        return view('home.infor_profile.service_news');
    }
    //Quản lý tin hết hạn
    public function page_expired_news()
    {
        return view('home.infor_profile.expired_news');
    }
    //-------------------------------------------

    //Quản lý tin lưu lại
    public function page_news_save()
    {
        return view('home.infor_profile.news_save');
    }

    //Quản lý thông tin tài khoản
    public function page_infor_account()
    {
        return view('home.infor_profile.infor_account');
    }

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
    //------------------------------
}
