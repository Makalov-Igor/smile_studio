<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\AdminPanelController;
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

Route::middleware('auth')
    ->prefix('admin_panel')
    ->group(function () {
    Route::get('/', [AdminPanelController::class, 'index'])
        ->name('admin_main_page');
    Route::resource('employees', EmployeesController::class);
});

