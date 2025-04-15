<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Models\Info;
use \App\Models\Breadcrumb;
use \App\Models\Page;
use \App\Models\Branch;

class siteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->info=Info::first();
        $this->pages=Page::get();
        $this->indexB=Breadcrumb::where('page','index')->first();
        view()->composer('site.layouts.app', function($view) {
            $view->with(['info' =>$this->info,'pages' =>$this->pages,'indexB'=>$this->indexB]);
        });
        
    }
}
