<?php

use App\Http\Controllers\Admin_view;
use App\Http\Controllers\CatagorieController;
use App\Http\Controllers\is_admin;
use App\Http\Controllers\Post_controller;
use App\Http\Controllers\Role_controller;
use App\Http\Controllers\TagController;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\User_Management;
use App\Models\Role;
use Illuminate\Support\Facades\Route;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;













//auth route
Route::group(['middleware'=>'auth'],function(){
    //admin or user check

  



    //admin route

    Route::group(['middleware'=>'protect'],function(){

    //protecting admin route form system user



        Route::get('/system/admin',[Admin_view::class,'view'])->name('admin');


        Route::resource('/sysyem/admin/user', User_Management::class);






        Route::prefix('/admin')->group(function(){



            Route::controller(CatagorieController::class)->group(function(){


                Route::get('/cat','index')->name('cat_view');
                Route::post('/cat','store')->name('cat_store');
                Route::get('/cat/load','load')->name('cat_load');
                Route::get('/cat/delete/{id}','delete')->name('cat_delete');
                Route::get('/cat/pub/{id}','pub')->name('cat_pub');
                Route::get('/cat/unpub/{id}','unpub')->name('cat_unpub');
                Route::get('/cat/edit/{id}','edit')->name('cat_edit');
                Route::post('/cat/update','update')->name('cat_update');

            });


        });
        Route::prefix('/admin/post')->group(function(){

            Route::controller(Post_controller::class)->group(function(){



            
                Route::get('/view','index')->name('post_view');
                Route::post('/view','store')->name('post_store');

                Route::get('/unpub/{id}','unpub')->name('post_unpub');
                Route::get('/pub/{id}','pub')->name('post_pub');
                Route::get('/load','load')->name('post_load');
                Route::get('/delete/{id}','delete')->name('post_delete');

                Route::get('/edit/{id}','edit')->name('post_edit');
                Route::post('/update','update')->name('post_update');

            });




        });





        Route::prefix('/admin')->group(function(){



        Route::controller(TagController::class)->group(function(){

        Route::get('/tag','index')->name('tag_index');
        Route::post('/tag','store')->name('tag_store');
        Route::get('/tag/load','load')->name('tag_load');
        Route::get('/tag/pub/{id}','pub')->name('tag_pub');
        Route::get('/tag/unpub/{id}','unpub')->name('tag_unpub');
        Route::get('/tag/delete/{id}','delete')->name('tag_delete');
        Route::get('/tag/edit/{id}','edit')->name('cat_edit');
        Route::post('/tag/update','update')->name('tag_update');



        });




        });


        // Route::get('/edit/{id}',[User_controller::class,'edit']);


        Route::controller(User_controller::class)->group(function(){
            Route::get('/load','load_data');
            Route::get('/edit/{id}','edit');



            Route::prefix('/sysyem/admin/user')->group(function(){


            Route::post('/store','store')->name("user_store");
            Route::post('/update','update')->name("user_update");
            Route::get('/delete/{id}','delete')->name("user_delete");
            
            

          
       



            });



        });

        Route::controller(Role_controller::class)->group(function () {
           


             Route::prefix('/admin')->group(function () {
             Route::get('/role', 'show')->name('role_show');
             Route::get('/role/edit/{id}', 'edit')->name('role_edit');
             Route::Post('/role', 'store')->name('role_create');
             Route::Post('/role/update', 'update')->name('role_update');
             Route::get('/role/delete/{id}', 'delete')->name('role_delete');


            });
        });

    });
   
});




//protecting index route form admin

Route::group(['middleware'=>'check'],function(){

    Route::get('/', function () {
        return view('User.index');
    });
    


});




Route::middleware(['auth:sanctum', 'verified'])->get('/check', [is_admin::class,'is_admin'])->name('dashboard');


