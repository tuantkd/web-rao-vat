<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class VerificationTokenController extends Controller
{
    //Trang hiển thị nhập mã OTP
    public function verifyToken()
    {
        return view('home.password.verification_token');
    }

    //Xử lý
    public function post_verifyToken(Request $request)
    {
        $user = User::where('verifyToken', $request->txt_otp)->first();
        if ($user == NULL) {
            return redirect()->back()->with('error', 'Mã OTP bạn đã nhập không chính xác');
        } else {
            $user->update([
                'verifyToken' => rand(100000, 999999),
            ]);
            return redirect('reset-password', [$user->verifyToken])->with('message', 'Vui lòng thay đổi mật khẩu của bạn');
        }
    }
}
