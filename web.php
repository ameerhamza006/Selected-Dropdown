<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use Facade\FlareClient\Report;
use App\Http\Controllers;

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
Route::get('/' , function()
{
    return view('auth.login');
});


Route::post('userscreen/fetchh', 'App\Http\Controllers\Admin\UserScreenController@fetchh')->name('UserScreenController.fetchh');