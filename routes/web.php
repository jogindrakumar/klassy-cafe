<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\MenuController;
use App\Models\Admin;

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
    return view('home');
});

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin route
Route::group(['prefix' => 'admin', 'middleware'=>['admin:admin']],function(){

    Route::get('/login',[AdminController::class,'loginForm']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');

   

});

 //Admin All routes
Route::prefix('admin')->middleware(['auth:admin'])->group(function(){
 Route::get('/logout',[AdminController::class,'destroy'])->name('admin.logout');
 Route::get('/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');
 Route::get('/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');
 Route::post('/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');
 Route::get('/change/password',[AdminProfileController::class,'AdminChangePassword'])->name('admin.change.password');
 Route::post('/update/password',[AdminProfileController::class,'AdminUpdatePassword'])->name('update.change.password');

});

Route::prefix('banner')->middleware(['auth:admin'])->group(function(){
route::get('/index',[BannerController::class,'index'])->name('banner-view');
route::post('/store',[BannerController::class,'store'])->name('image.store');
});
Route::prefix('menu')->middleware(['auth:admin'])->group(function(){
route::get('/index',[MenuController::class,'index'])->name('menu-view');
route::get('/create',[MenuController::class,'create'])->name('menu-create');
route::post('/store',[MenuController::class,'store'])->name('menu.store');
});


 
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
