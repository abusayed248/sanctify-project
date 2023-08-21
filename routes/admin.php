<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function() {
    Route::get('home', [AdminController::class, 'adminHome'])->name('admin.dashboard');
});


