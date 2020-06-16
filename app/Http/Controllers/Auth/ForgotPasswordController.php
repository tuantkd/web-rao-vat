<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\ForgotActivationEmail;
use App\Http\Controllers\Controller;
use App\Mail\ForgotEmail;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    // ===========================================
    //Hiển thị trang nhập email
    public function page_input_email()
    {
        return view('home.password.email');
    }
    // ===========================================



    // ===========================================
    //Hiển thị trang nhập email
    public function postforgot(Request $request)
    {
        $this->validate(
            $request,
            [
                'txt_email' => 'email|exists:users,email'
            ],
            [
                'txt_email.email' => 'Vui lòng nhập đúng định dạng email',
                'txt_email.exists' => 'Địa chỉ email này không tồn tại'
            ]
        );

        $user = User::where('email', $request->txt_email)->first();

        if ($user->verify == false) {
            return redirect()->back()->with('error', 'Email của bạn chưa được xác nhận');
        } else {
            $user->update([
                'activation_token' => rand(100000, 999999),
            ]);

            //Sự kiện quên mật khẩu
            Mail::to($user->email)->send(new ForgotEmail($user));

            return redirect('verifyToken')->with('message', 'Đã gửi mã OTP. Vui lòng kiểm tra email của bạn.');
        }
    }
}
