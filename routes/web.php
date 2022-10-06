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
use Artesaos\SEOTools\Facades\SEOTools;
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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');

Route::get('/', function (\Illuminate\Http\Request $request) {

    SEOTools::setTitle(app_event()->name . ' - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(url('/'));
    SEOTools::setCanonical(url('/'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::jsonLd()->addImage(app_team_avatar());

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

Route::group(['middleware' => ['web']], function () {
    Route::resource('confirmation', ConfirmationController::class);
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('extras', ExtrasController::class);
});



Route::get('/terms', function () {
    SEOTools::setTitle('Terms of service - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('policy'));
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('terms');
})->middleware(['web'])->name('terms');

Route::get('/refund', function () {
    SEOTools::setTitle('Refund Policy - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('refund'));
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('refund');
})->middleware(['web'])->name('refund');

Route::get('/protection', function () {
    SEOTools::setTitle('GDPR Privacy Policy - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('policy'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('protection');
})->middleware(['web'])->name('protection');

Route::get('/policy', function () {
    SEOTools::setTitle('Refund policy - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('policy'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('policy');
})->middleware(['web'])->name('policy');

Route::get('/impressum', function () {
    SEOTools::setTitle('Impressum - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('impressum'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('impressum');
})->middleware(['web'])->name('impressum');

Route::get('/contact', function () {
    SEOTools::setTitle('FAQ & Contact - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('contact'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('contact');
})->middleware(['web'])->name('contact');

Route::get('/about-us', function () {
    SEOTools::setTitle('About Us - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('about-us'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('about-us');
})->middleware(['web'])->name('about-us');

Route::get('/covid', function () {
    SEOTools::setTitle('Covid - ' . app_team_name(), false);
    SEOTools::setDescription(app_event()->description);
    SEOTools::opengraph()->setUrl(route('covid'));
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::setCanonical(route('tickets.index'));
    SEOTools::jsonLd()->addImage(app_team_avatar());

    return view('covid');
})->middleware(['web'])->name('covid');

