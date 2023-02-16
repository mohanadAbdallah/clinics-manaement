<?php

use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
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


    Route::group(['middleware'=>'auth'],function (){
        Route::resource('clinics',ClinicController::class);
        Route::inertia('about','About')->name('about');
        Route::inertia('/','Home')->name('home');
    });


        Route::inertia('login', 'Auth/login')->name('login');

        Route::resource('users', UserController::class);

            Route::post('login', [LoginController::class, 'authenticate'])
                ->name('login.post');

        Route::post('logout',[LoginController::class,'logout'])
            ->name('logout');

