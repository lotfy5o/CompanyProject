<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

/* Front Routes */

Route::name('front.')->controller(FrontController::class)->group(function () {
    //=========================HOME PAGE
    Route::post('subscriber/store', 'subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index');

    //=========================ABOUT PAGE
    Route::get('/about', 'about')->name('about');

    //=========================SERVICE PAGE
    Route::get('/service', 'service')->name('service');

    //=========================CONTACT PAGE
    Route::post('contact/store', 'contactStore')->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');
});

/* Admin Routes */

Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware([
    'localeSessionRedirect',
    'localizationRedirect', 'localeViewPath'
])->group(function () {

    Route::middleware('auth')->group(function () {
        //=========================ADMIN HOME PAGE
        Route::view('/', 'admin.index')->name('index');

        //==========================SERVICES
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });

        //==========================FEATURES
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });

        //==========================MESSAGES
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });

        //==========================MESSAGES
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });

        //==========================TESTIMONIALS
        Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });
        //==========================COMPANIES
        Route::controller(CompanyController::class)->group(function () {
            Route::resource('companies', CompanyController::class);
        });
        //==========================SETTINGS
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class);
        });
    });

    require __DIR__ . '/auth.php';
});
