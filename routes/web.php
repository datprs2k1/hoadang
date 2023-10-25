<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\DB;
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

Route::controller(AuthController::class)->group(function () {
    Route::group(["prefix" => "login"], function () {
        Route::get('/', 'login')->name('login');
        Route::post('/', 'processLogin')->name('processLogin');
    });
});

Route::group(["prefix" => "", "controller" => HomeController::class, "middleware" => "auth"], function () {
    Route::get('/', 'home')->name('home');
    Route::post('/', 'add')->name('add');
    Route::put('/', 'edit')->name('edit');
});

Route::get('getInfo', [HomeController::class, 'getInfo']);
Route::get('getinfo', [HomeController::class, 'getInfo']);
Route::get('get', [QuestionController::class, 'get']);

Route::get('/test', function () {
    return DB::table('licenses')->get();
});
