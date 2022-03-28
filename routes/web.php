<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Models\HomeAbout;
use App\Models\MultiPic;
use App\Models\Service;
use App\Models\User;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {

    $brands=DB::table('brands')->get();
    $abouts =DB::table('home_abouts')->first();
    $images =MultiPic::all();
    $services = Service::all();
    return view('home',compact('brands','abouts','images','services'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $user=User::all();
    return view('admin.index');
})->name('dashboard');


Route::get('/phpinfo', function() {
    return phpinfo();
});

// Category routes...

Route::get('all/category',[CategoryController::class,'Allcat'])->name('all.category');
Route::post('add/category',[CategoryController::class,'Addcat'])->name('store.category');
Route::get('edit/category/{id}',[CategoryController::class,'Edit']);
Route::put('update/category/{id}',[CategoryController::class,'update']);
Route::get('softdelete/category/{id}',[CategoryController::class,'SoftDelete']);
Route::get('restore/category/{id}',[CategoryController::class,'Restore']);
Route::get('pdelete/category/{id}',[CategoryController::class,'Pdelete']);

// Multi imaage routes

Route::get('multi/img',[BrandController::class,'MultiPic'])->name('multi.img');
Route::post('add/image',[BrandController::class,'AddImg'])->name('store.image');

// Brand routes

Route::get('all/brand',[BrandController::class,'Allbrand'])->name('all.brand');
Route::post('add/brand',[BrandController::class,'AddBrand'])->name('store.brand');
Route::get('edit/brand/{id}',[BrandController::class,'Edit']);
Route::put('update/brand/{id}',[BrandController::class,'update']);
Route::get('delete/brand/{id}',[BrandController::class,'Delete']);
Route::get('user/logout',[BrandController::class,'Logout'])->name('user.logout');

// all home routes

Route::get('home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('store/slider',[HomeController::class,'StoreSlider'])->name('store.slider');
Route::get('edit/slider/{id}',[HomeController::class,'Edit']);
Route::put('update/slider/{id}',[HomeController::class,'update']);
Route::get('delete/slider/{id}',[HomeController::class,'Delete']);

// All homeAbout routes

Route::get('home/about',[AboutController::class,'HomeAbout'])->name('home.about');
Route::get('add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('edit/about/{id}',[AboutController::class,'Edit']);
Route::put('update/about/{id}',[AboutController::class,'update']);
Route::get('delete/about/{id}',[AboutController::class,'Delete']);
Route::get('about/page',[AboutController::class,'AboutUs'])->name('about.page');


// All Service routes

Route::get('home/service',[ServiceController::class,'HomeService'])->name('home.service');
Route::get('add/service',[ServiceController::class,'AddService'])->name('add.service');
Route::post('store/service',[ServiceController::class,'StoreService'])->name('store.service');
Route::get('edit/service/{id}',[ServiceController::class,'Edit']);
Route::put('update/service/{id}',[ServiceController::class,'update']);
Route::get('delete/service/{id}',[ServiceController::class,'Delete']);
Route::get('service/page',[ServiceController::class,'ServicePage'])->name('service.page');



// Portfolio Routes

Route::get('/Portfolio',[PortfolioController::class,'Portfolio'])->name('Portfolio');
// multipic delte route
Route::get('delete/image/{id}',[PortfolioController::class,'Delete']);


// Admin contact page route

Route::get('admin/contact',[ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('add/contact',[ContactController::class,'Addcontact'])->name('add.contact');
Route::post('store/contact',[ContactController::class,'Storecontact'])->name('store.contact');
Route::get('edit/contact/{id}',[ContactController::class,'Edit']);
Route::put('update/contact/{id}',[ContactController::class,'update']);
Route::get('delete/contact/{id}',[ContactController::class,'Delete']);
Route::get('admin/message',[ContactController::class,'AdminMessage'])->name('admin.message');
Route::get('delete/message/{id}',[ContactController::class,'destroy']);



// home contact page route

Route::get('/contact',[ContactController::class,'HomeContact'])->name('home.contact');
Route::post('contact/form',[ContactController::class,'FormContact'])->name('form.contact');



// Change password route

Route::get('change/password',[ChangePassword::class,'Cpassword'])->name('change.password');
Route::post('update/password',[ChangePassword::class,'Updatepassword'])->name('update.password');

// profile update route

Route::get('edit/profile',[ChangePassword::class,'EditProfile'])->name('edit.profile');
Route::post('update/profile',[ChangePassword::class,'UpdateProfile'])->name('update.profile');






















