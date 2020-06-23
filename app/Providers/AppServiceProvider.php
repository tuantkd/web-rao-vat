<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\post_news;
use App\User;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        view()->composer('layout.master_admin', function($view){
            $postNew = DB::table('post_news')->latest()->limit(5)->get();
            $member = DB::table('users')->where('level_id', 2)->latest()->limit(5)->get();
            $view->with([
                'postNew' => $postNew,
                'member' => $member
            ]);
        });
    }
}
