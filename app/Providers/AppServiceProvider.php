<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Visitor;
use Illuminate\Support\Facades\Schema;

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
        
        Schema::defaultStringLength(191);
    //     if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //         {
    //             $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    //         }
    // // whether ip is from proxy
    //         elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //         {
    //             $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //         }
    // // whether ip is from remote address
    //         else
    //         {
    //             $ip_address = $_SERVER['REMOTE_ADDR'];
    //         }
    //         // echo $ip_address;
    
    //      if(!visitor::where('ip',$ip_address)->first()){
    //         visitor::create(['ip'=>$ip_address]);
    //     }
    }
}
