<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    // =====================================================
    //Đăng nhập google
    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser, true);
                return redirect('/');
            } else {
                $newUser = User::updateOrCreate([
                    'username' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'verify' => 1,
                    'avatar' => $user->getAvatar(),
                    'verifyToken' => $user->token,
                    'level_id' => 2,
                    'slug' => Str::slug($user->getName()),
                ]);

                Auth::login($newUser, true);

                return redirect('/');
            }
        } catch (Exception $e) {
            return redirect('page-login')->with('message', 'Xảy ra lỗi. Vui lòng đăng nhập tài khoản khác');
        }
    }
    // =====================================================




    // =====================================================
    //Đăng nhập facebook
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallbackFacebook()
    {
        try {
            $user_fb = Socialite::driver('facebook')->user();

            $finduser_fb = User::where('facebook_id', $user_fb->id)->first();

            if ($finduser_fb) {

                Auth::login($finduser_fb, true);
                return redirect('/');
            } else {

                $newUser_fb = User::updateOrCreate([
                    'username' => $user_fb->getName(),
                    'email' => $user_fb->getEmail(),
                    'facebook_id' => $user_fb->getId(),
                    'verify' => 1,
                    'avatar' => $user_fb->getAvatar(),
                    'verifyToken' => $user_fb->token,
                    'level_id' => 2,
                    'slug' => Str::slug($user_fb->getName()),
                ]);

                Auth::login($newUser_fb, true);

                return redirect('/');
            }
        } catch (Exception $e) {
            return redirect('page-login')->with('message', 'Xảy ra lỗi. Vui lòng đăng nhập tài khoản khác');
        }
    }
    // =====================================================
}
