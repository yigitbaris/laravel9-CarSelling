<?php

use App\Http\Controllers\HomeController;
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
// 1 do sometihng in route 

Route::get('/hello', function () {
    return 'Hello World';
});

//2 call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

// 3 call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

// 4 route -> controller -> view
Route::get('/test',[HomeController::class,'test'])->name('test');
  
// 5 route with parameters 
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
