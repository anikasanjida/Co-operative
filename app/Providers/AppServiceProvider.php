<?php

namespace App\Providers;

use App\Models\news_body;
use App\Models\user_request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $request_checkCount = user_request::where('status','pending')->count();
        $Approval_Count = user_request::where('status','Approved')->count();
        $news_Count = news_body::all()->count();

        view()->share('request_count',$request_checkCount);
        view()->share('Approve_count',$Approval_Count);
        view()->share('notice_count',$news_Count);

    }
}
