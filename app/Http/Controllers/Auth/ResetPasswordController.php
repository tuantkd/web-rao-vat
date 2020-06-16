<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    //Hiển thị trang thay đổi mật khẩu
    public function page_reset_password(Request $request, $token)
    {
        return view('home.password.reset_password')->with(['token' => $token]);
    }


    //Xử lý thay đổi mật khẩu
    public function update_password(Request $request, $id_token)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:8|confirmed',
            ],
            [
                'email.exists' => 'Email này không tồn tại',
                'email.email' => 'Vui lòng nhập đúng định dạng email',
                'email.required' => 'Chưa nhập email',
                'password.required' => 'Chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            ]
        );

        $user = User::where('activation_token', $id_token)->first();

        if ($request->email != $user->email) {
            return redirect()->back()->with('error', 'Email của bạn không đúng');
        } else {
            $user->update([
                'activation_token' => NULL,
                'password' => bcrypt($request->password),
            ]);
            return redirect('page-login')->with('message', 'Mật khẩu thay đổi. Đăng nhập lại');
        }
    }
}
