<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\SiteController;




Route::group(
    [
        // 'prefix' => LaravelLocalization::setLocale(),
        // 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Auth::routes();
        // Route::get('route_login_register','SiteController@route_login_register')->name('route_login_register');
        Route::get('/home', [SiteController::class, 'index'])->name('home');
        Route::get('/',[SiteController::class, 'index'])->name('site.index');
         // ------------------contact us----------------
         Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
         Route::post('/contact/store', [SiteController::class, 'store_contact'])->name('site.contact.store');
         Route::get('/faqs', [SiteController::class, 'faqs'])->name('faqs');

        //  -----------------signature & countries----------------

        Route::get('/signature', [SiteController::class, 'signature'])->name('signature');
        Route::get('/single/country/{slug}', [SiteController::class, 'single_country'])->name('single_country');
        Route::get('/countries/filter', [SiteController::class, 'countries_filter'])->name('countries.filter');
         Route::get('/trip/{slug}', [SiteController::class, 'trip'])->name('trip');


         // ------------------subscripe_news_letter----------------
         Route::post('subscripe_news_letter','SiteController@subscripe_news_letter')->name('subscripe_news_letter');

         // ------------------about---------------------
         Route::get('about','SiteController@about')->name('about');
  
        // ------------------------services----------
        Route::get('/services','SiteController@services')->name('services');


          // ------------------page---------------------
        Route::get('/page/{id}','SiteController@single_page')->name('single_page');

       

    });

