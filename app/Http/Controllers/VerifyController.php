<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function VerifyEmail($token = null)
    {
        if ($token == null) {

            session()->flash('message', 'Đăng nhập không hợp lệ');

            return redirect()->route('page-login');
        }

        $user = User::where('verifyToken', $token)->first();

        if ($user == null) {

            session()->flash('message', 'Đăng nhập không hợp lệ');

            return redirect()->route('page-login');
        }

        $user->update([

            'verify' => 1,
            'email_verified_at' => Carbon::now(),
            'verifyToken' => ''

        ]);

        session()->flash('message', 'Tài khoản của bạn đã được kích hoạt, bạn có thể đăng nhập ngay bây giờ');

        return redirect()->route('page-login');
    }
}
