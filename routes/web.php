<?php

use App\Http\Controllers\Wedo\JobController;
use App\Http\Controllers\Wedo\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cache/clear', function () {
    Cache::flush();

    return redirect()->to('/');
})->name('cache.clear');

require __DIR__.'/auth.php';



Route::group(['middleware' => ['web']], function () {
    Route::resource('jobs', JobController::class);
});


Route::group(['middleware' => ['web'], 'namespace' => 'Wedo'], function () {
    Route::post('login/link', [LoginController::class, 'loginLink'])->name('login.link');
    Route::get('token/{token}', [LoginController::class, 'loginWithToken'])->name('login.token');
});

