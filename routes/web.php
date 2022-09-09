<?php

use App\Http\Controllers\Auth\AccountsController;
use App\Http\Controllers\Wedo\ApplicantsController;
use App\Http\Controllers\Wedo\BillingsController;
use App\Http\Controllers\Wedo\CartsController;
use App\Http\Controllers\Wedo\CheckoutController;
use App\Http\Controllers\Wedo\ConfirmationController;
use App\Http\Controllers\Wedo\ExtrasController;
use App\Http\Controllers\Wedo\JobController;
use App\Http\Controllers\Wedo\LoginController;
use App\Http\Controllers\Wedo\OrdersController;
use App\Http\Controllers\Wedo\PaymentsController;
use App\Http\Controllers\Wedo\ResumeController;
use App\Http\Controllers\Wedo\ShortlistedController;
use App\Http\Controllers\Wedo\TicketsController;
use Illuminate\Support\Facades\Cache;
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

Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

Route::get('/cache/clear', function () {
    Cache::flush();

    return redirect()->to('/');
})->name('cache.clear');

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['web']], function () {
    Route::resource('jobs', JobController::class)->except(['show']);

    Route::get('jobs/{id}/{slug?}', [JobController::class, 'show'])->name('jobs.show');
});

Route::group(['middleware' => ['web'], 'namespace' => 'Wedo'], function () {
    Route::post('login/link', [LoginController::class, 'loginLink'])->name('login.link');
    Route::get('token/{token}', [LoginController::class, 'loginWithToken'])->name('login.token');
    Route::get('resendMail/{email}', [LoginController::class, 'resendMail'])->name('login.resendMail');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('resumes', ResumeController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('applicants', ApplicantsController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('accounts', AccountsController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('billings', BillingsController::class);
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('tickets', TicketsController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('shortlisted', ShortlistedController::class);
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('checkout', CheckoutController::class);
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('carts', CartsController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('payments/stripe', [PaymentsController::class, 'stripe'])->name('payments.stripe');
    Route::get('payments/success', [PaymentsController::class, 'success'])->name('payments.success');
    Route::resource('payments', PaymentsController::class);

});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('orders', OrdersController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('confirmation', ConfirmationController::class);
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('extras', ExtrasController::class);
});

