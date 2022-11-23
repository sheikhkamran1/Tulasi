<?php

use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\SettingController;
use App\Models\Faculty;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $company = Setting::first();
    $faculty = Faculty::all();
    // return $company;
    return view('frontend.pages.home',compact('company'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('setting',SettingController::class);
Route::resource('faculty',FacultyController::class);
