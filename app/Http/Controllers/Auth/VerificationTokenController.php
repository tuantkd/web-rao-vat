<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class VerificationTokenController extends Controller
{
    //Trang hiển thị nhập mã OTP
    public function verifyToken(Request $request, $token = null)
    {
        return view('home.password.verification_token');
    }

    //Xử lý
    public function post_verifyToken(Request $request)
    {
        $user = User::where('activation_token', $request->activation_token)->first();
        if ($user == NULL) {
            return redirect()->back()->with('error', 'Mã OTP bạn đã nhập không chính xác');
        } else {
            $user->update([
                'activation_token' => rand(100000, 999999),
            ]);
            return redirect('page-reset-password/' . $user->activation_token)->with('message', 'Thay đổi mật khẩu của bạn');
        }
    }
}
