<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FrontendController;
// use App\Http\Controllers\User;


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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');
Route::get('about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('mission', [App\Http\Controllers\FrontendController::class, 'mission'])->name('mission');
Route::get('policy', [App\Http\Controllers\FrontendController::class, 'policy'])->name('policy');
Route::get('our-team', [App\Http\Controllers\FrontendController::class, 'our_team'])->name('our_team');
Route::get('contact-us', [App\Http\Controllers\FrontendController::class, 'contact_us'])->name('contact_us');
// Route::get('/policy', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');
// Route::get('/features', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');
// Route::get('/features', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('all_users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('all_users');
});
Route::group(['as' => 'user.',  'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
    Route::post('dashboard', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
});
