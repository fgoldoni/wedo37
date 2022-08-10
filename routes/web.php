<?php

use App\Http\Controllers\Auth\AccountsController;
use App\Http\Controllers\Wedo\ApplicantsController;
use App\Http\Controllers\Wedo\BillingsController;
use App\Http\Controllers\Wedo\JobController;
use App\Http\Controllers\Wedo\LoginController;
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

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('tickets', TicketsController::class);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('shortlisted', ShortlistedController::class);
});
