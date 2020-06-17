<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use Illuminate\Support\Str;
use App\categorys;
use App\User;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Trang chủ
    public function index()
    {
        $show_category = categorys::all();
        return view('home.index', ['show_category' => $show_category]);
    }

    //Xem theo danh mục
    public function view_category()
    {
        return view('home.view_category');
    }

    //Xem theo danh mục chi tiết
    public function view_category_detail()
    {
        return view('home.view_category_detail');
    }

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

    //Đăng tin cấp cha danh mục
    public function post_new_category()
    {
        $categorys = categorys::all();
        return view('home.post_new.post_new_parent', ['categorys' => $categorys]);
    }

    //Đăng tin
    public function post_new()
    {
        return view('home.post_new.post_new');
    }
    //=================================================




    //=================================================
    //Đăng nhập
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
    //Quản lý tin
    public function page_manage_news()
    {
        return view('home.infor_profile.manage_news');
    }

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
