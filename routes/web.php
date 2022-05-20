<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test comment
*/
// 1-Write in root
Route::get('/hello', function () {
    return 'hello world';
});
// 2-Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});
// 3-Call Controller Function
Route::get('/',[HomeController::class,'index'])->name('home');

// 4-Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5-Route with parameters
Route::get('/param/{id}/{num}',[HomeController::class,'param'])->name('param');

// 6-Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//***************************ADMIN PANEL ROUTES *********************************************

Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');
