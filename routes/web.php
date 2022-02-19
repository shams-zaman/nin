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

Route::post('contact-us', [App\Http\Controllers\FrontendController::class, 'create_contact'])->name('message_us');
// Route::get('/policy', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');
// Route::get('/features', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');
// Route::get('/features', [App\Http\Controllers\FrontendController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('all_users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('all_users');
    Route::get('subscription', [App\Http\Controllers\Admin\UserController::class, 'subscription'])->name('subscription');
    Route::get('payment/{id}', [App\Http\Controllers\Admin\UserController::class, 'take_payment'])->name('take_payment');
    Route::get('bonus/{id}', [App\Http\Controllers\Admin\UserController::class, 'give_bonus'])->name('give_bonus');
    Route::get('bonus', [App\Http\Controllers\Admin\UserController::class, 'bonus'])->name('bonus');
    Route::get('user-requests', [App\Http\Controllers\Admin\UserController::class, 'user_requests_show'])->name('user_requests_show');
    Route::get('contact', [App\Http\Controllers\Admin\ComplainController::class, 'contact_show'])->name('contact');
    Route::get('all-transictions', [App\Http\Controllers\PaymentController::class, 'all_transictions'])->name('all_transictions');
});
Route::group(['as' => 'user.',  'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
    Route::get('mytransictions', [App\Http\Controllers\User\DashboardController::class, 'mytransictions'])->name('mytransictions');
    Route::get('mydownlines', [App\Http\Controllers\User\DashboardController::class, 'mydownlines'])->name('mydownlines');

    Route::post('complain', [App\Http\Controllers\User\ComplainController::class, 'complain'])->name('complain');
    Route::get('complain', [App\Http\Controllers\User\ComplainController::class, 'index'])->name('complain_view');
});
Route::group(['as' => 'user.',  'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth']], function () {
    Route::get('profile-create', [App\Http\Controllers\ProfileController::class, 'pending'])->name('pending');
    Route::post('dashboard', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
});
