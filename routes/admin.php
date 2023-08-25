<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InfoController;
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


Auth::routes(['login' => true, 'register' => false]);

Route::group(['prefix' => 'admin', 'middleware' => 'is_admin', 'as' => 'admin.'], function() {
    Route::get('home', [AdminController::class, 'adminHome'])->name('dashboard');
    Route::post('site-info-update/{site_info}', [InfoController::class, 'update'])->name('site-info.update');
    Route::get('edit-site-info', [InfoController::class, 'edit'])->name('site-info.edit');

    //reply message
    Route::get('reply-message/{contact}', [AdminController::class, 'replyMessage'])->name('reply.message');
    Route::post('reply-message/{contact}', [AdminController::class, 'clientMessageReply'])->name('client.message.reply');
});


