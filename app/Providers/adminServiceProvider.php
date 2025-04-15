<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Info;
use App\Models\Contact;
use App\Models\Order;
class adminServiceProvider extends ServiceProvider
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
          $this->contact=Contact::where('read','!=',1)->count();

        view()->composer('admin.layouts.app', function($view) {
            $view->with(['info' =>$this->info,
            'contact' =>$this->contact,
                         ]);
        });
    }
}
