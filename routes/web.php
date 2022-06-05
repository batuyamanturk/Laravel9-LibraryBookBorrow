<?php

use App\Http\Controllers\AdminPanel\AdminBookController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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
//***************************HOME PAGE ROUTES ************************************************************************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');

// 4-Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5-Route with parameters
Route::get('/param/{id}/{num}',[HomeController::class,'param'])->name('param');

// 6-Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');
Route::get('/book/{id}',[HomeController::class,'book'])->name('book');
Route::get('/categorybooks/{id}',[HomeController::class,'categorybooks'])->name('categorybooks');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//***************************ADMIN PANEL ROUTES ************************************************************************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
//********************************GENERAL ROUTES ****************************************************************
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminHomeController::class, 'settingsUpdate'])->name('settings.update');
//********************************ADMIN CATEGORY ROUTES ****************************************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');
    });
//********************************ADMIN BOOK ROUTES ****************************************************************
    Route::prefix('/book')->name('book.')->controller(AdminBookController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/edit/{id}',  'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');
        Route::get('/show/{id}',  'show')->name('show');

    });
    //********************************ADMIN BOOK IMAGE GALLERY ROUTES ****************************************************************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{bid}','index')->name('index');
        Route::post('/store/{bid}',  'store')->name('store');
        Route::get('/destroy/{bid}/{id}',  'destroy')->name('destroy');

    });
    //********************************ADMIN MESSAGE ROUTES ****************************************************************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/{','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}',  'show')->name('show');
        Route::get('/destroy/{id}',  'destroy')->name('destroy');

    });
});

