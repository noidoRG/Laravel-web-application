<?php

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

// Route::get('/', function () { return view('welcome'); });

Route::get('/', [\App\Http\Controllers\DefaultController::class,'main']) ->name("main");

Route::get('/about_me', [\App\Http\Controllers\DefaultController::class,'about_me']) ->name("about_me");

Route::get('/hobbies', [\App\Http\Controllers\InterestController::class,'index']) ->name("hobbies");

Route::get('/study', [\App\Http\Controllers\DefaultController::class,'study']) ->name("study");

Route::get('/album', [\App\Http\Controllers\PhotoController::class,'index']) ->name("album");

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index']) ->name("contact");

Route::get('/test', [\App\Http\Controllers\TestController::class,'index']) ->name("test");

Route::get('/history', [\App\Http\Controllers\HistoryController::class,'index']) ->name("history");

Route::post('/contact/store', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::post('/test/store', [\App\Http\Controllers\TestController::class, 'store'])->name('test.store');
// Route::middleware(['auth'])->group(function () {
//     // Your protected routes here
// });