<?php

use App\Http\Controllers\Admin\CommonQuestionController;
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


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth','permission:browse_dashboard','active']
    ], function(){ //..
        Route::get('/','AdminController@index')->name('admin');
        Route::get('/visitors','AdminController@visitor');
        //====================================================
        //===================Roles And Permisions=============
        //====================================================

            Route::resource('roles','RoleController');
            Route::post('roles/delete_all','RoleController@delete_all');
            Route::get('roles/{id}/permissions','RoleController@permission');
            Route::post('roles/{id}/permissions','RoleController@attach_permissions');
    
        //====================================================
        //==========================User======================
        //====================================================
            Route::resource('users','UserController');
            Route::post('users/delete_all','UserController@delete_all');
            Route::get('users/active/{id}','UserController@active');
        //====================================================
        //====================Categories======================
        //====================================================
     
            Route::resource('categories','CategoryController');
            Route::post('categories/delete_all','CategoryController@delete_all');

        //====================================================
        //====================branches=============
        //====================================================
     
        Route::resource('branches','BranchController');
        Route::post('branches/delete_all','BranchController@delete_all');
        //====================================================
        //====================Reasons=============
        //====================================================
     
        Route::resource('reasons','ReasonController');
        Route::post('reasons/delete_all','ReasonController@delete_all');
       
        //====================================================
        //==========================posts=====================
        //====================================================
     
        Route::resource('posts','PostController');
        Route::post('posts/delete_all','PostController@delete_all');
        Route::get('posts/active/{id}','PostController@active');
        Route::delete('posts/del/image/{id}','PostController@del_img');
         //====================================================
        //===========================contact=====================
        //=====================================================
        Route::resource('contact','ContactController');
        Route::post('contact/delete_all','ContactController@delete_all');
        Route::get('/contact/{id}/read','ContactController@read');
        Route::get('/contact/{id}/active','ContactController@active');
         //====================================================
        //===========================news_letter=====================
        //=====================================================
        Route::resource('news_letter','NewsLetterController');
        Route::post('news_letter/delete_all','NewsLetterController@delete_all');
            //====================================================
        //===========================order=====================
        //=====================================================
        Route::resource('order','OrderController');
        Route::post('order/delete_all','OrderController@delete_all');
        Route::get('/order/{id}/read','OrderController@read');
        //====================================================
        //===========================rate=====================
        //=====================================================
        Route::resource('rates', 'RateController')->only(['index','create','store','destroy']);
        Route::post('rates/delete_all','RateController@delete_all');

             //====================================================
        //===========================aqar types=====================
        //=====================================================
        Route::resource('common_questions','CommonQuestionController');
        Route::post('common_questions/delete_all','CommonQuestionController@delete_all');
       //====================================================
        //==========================setting======================
        //====================================================
            Route::group(
                [
                    'prefix' => 'setting',
                    'middleware' => ['permission:site_setting']
                ], function(){ 
                        Route::get('info','SettingController@info');
                        Route::post('info/update','SettingController@update_info')->name('update_info');
                        Route::get('about','SettingController@about');
                        Route::post('about/update','SettingController@update_about')->name('update_about');
                        Route::resource('pages','PageController');
                        Route::post('pages/delete_all','PageController@delete_all');
                        Route::resource('slidear','SlidearController');
                        Route::post('slidear/delete_all','SlidearController@delete_all');
                        Route::resource('breadcrumb','BreadcumbController');
                        Route::post('breadcrumb/delete_all','BreadcumbController@delete_all');
                });

                 
        //====================================================
        //==========================areas=====================
        //====================================================
     
        Route::resource('areas','AreaController');
        Route::post('areas/delete_all','AreaController@delete_all');
        Route::delete('areas/del/image/{id}','AreaController@del_img');

        
    });

