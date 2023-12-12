<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('login-auth', [AuthController::class, 'authenticate'])->name('auth'); 

Route::group(['middleware' => ['auth']], function() {
    Route::get('add-timeline',[TimelineController::class, 'addTimeline'])->name('add.timeline');
    Route::post('post-timeline',[TimelineController::class, 'store'])->name('post.timeline');
    Route::get('timeline/{month}/{year}',[TimelineController::class,'view']);
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout.auth');
 
});
