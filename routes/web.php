<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewusersController;
use App\Http\Controllers\testdataController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])/*->middleware(['auth', 'verified'])*/->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index'])/*->middleware(['auth', 'verified'])*/->name('profile');

Route::get('/new_user', [NewusersController::class, 'index'])/*->middleware(['auth', 'verified'])*/->name('new_users');

Route::post('/new_user', [NewusersController::class, 'store'])/*->middleware(['auth', 'verified'])*/->name('new_users');
Route::get('/user_list/{id}', [NewusersController::class, 'list_1'])/*->middleware(['auth', 'verified'])*/->name('new_users');
Route::get('/user_list', [NewusersController::class, 'list'])/*->middleware(['auth', 'verified'])*/->name('new_users');
//Route::get('/user_list', [NewusersController::class, 'show'])/*->middleware(['auth', 'verified'])*/->name('new_users');

Route::get('/test_data', [testdataController::class, 'index'])/*->middleware(['auth', 'verified'])*/->name('test_data');

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__.'/auth.php';
