<?php

use Illuminate\Support\Facades\Route,
App\Http\Controllers;

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


Route::get('/', [Controllers\MainController::class,'index']);
Route::post('/feedback_h', [Controllers\FeedbackController::class,'store']);
Route::post('/reviews/add/', [Controllers\ReviewsController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
