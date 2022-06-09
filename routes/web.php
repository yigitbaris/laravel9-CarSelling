<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminCarsController as AdminCarsController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
use App\Http\Controllers\AdminPanel\FaqController as FaqController;
use App\Http\Controllers\AdminPanel\CommentController as CommentController;
use App\Http\Controllers\AdminPanel\AdminUserController ;





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
// 1 do sometihng in route 

Route::get('/hello', function () {
    return 'Hello World';
});

//2 call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

//************* HOME PAGE ROUTES *************/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login');
Route::view('/registeruser','home.register');
Route::get('/logoutuser',[HomeController::class, 'logout'])->name('storecomment');
Route::view('/loginadmin','admin.login');
Route::post('/loginadmincheck',[HomeController::class, 'loginadmincheck'])->name('loginadmincheck');




// 4 route -> controller -> view
Route::get('/test', [HomeController::class, 'test'])->name('test');

// 5 route with parameters 
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

// 6 route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::get('/cars/{id}', [HomeController::class, 'cars'])->name('cars');

Route::get('/categorycars/{id}/{slug}', [HomeController::class, 'categorycars'])->name('categorycars');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//************* ADMIN PANEL ROUTES *************/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    //************* GENERAL ROUTES *************/
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

    //************* ADMIN CATEGORY ROUTES *************/
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //************* ADMIN CARS ROUTES *************/

    Route::prefix('/cars')->name('cars.')->controller(AdminCarsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //************* ADMIN CARS IMAGE GALLERY ROUTES *************/

    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}', 'index')->name('index');
        Route::post('/store/{cid}', 'store')->name('store');
        Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');
    });

    //************* ADMIN MESSAGE ROUTES *************/

    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //************* ADMIN FAQ ROUTES *************/

    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //************* ADMIN COMMENT ROUTES *************/

    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //************* ADMIN USER ROUTES *************/

    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'show')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
});