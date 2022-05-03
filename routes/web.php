<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminSampleController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminPriceController;
use App\Http\Controllers\Admin\AdminSampleTypeController;
use App\Http\Controllers\Admin\AdminShippingReturnController;
use App\Http\Controllers\Admin\AdminSubscribeController;
use App\Http\Controllers\Admin\AdminTermsController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingReturnController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TermsController;
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
    return redirect('/en');
});
Route::group(['prefix' => '{language}'], function() {

    Route::controller(HomeController::class)->group(function() {
        Route::get('/', 'index')->name('home');
    });
    Route::controller(AboutController::class)->group(function() {
        Route::get('/about', 'index')->name('about');
    });
    Route::controller(ProductController::class)->group(function() {
        Route::get('/product', 'index')->name('product');
    });
    Route::controller(ContactController::class)->group(function() {
        Route::get('/contact', 'index')->name('contact');
        Route::post('/contact-message', 'message')->name('contactMessage');
    });
    Route::controller(SubscribeController::class)->group(function() {
        Route::post('/subscribe', 'subscribe')->name('subscribeSend');
    });
    Route::controller(ShippingReturnController::class)->group(function() {
        Route::get('/shipping-returns', 'index')->name('shipping');
    });
    Route::controller(TermsController::class)->group(function() {
        Route::get('/terms-conditions', 'index')->name('terms');
    });
    Route::controller(EditController::class)->group(function() {
        Route::get('/edit', 'index')->name('edit');
        Route::post('/get-own-type', 'getOwnType')->name('getOwnType');
        Route::post('/car-model', 'getCarModel')->name('getCarModel');
        Route::post('/get-price', 'getPrice')->name('getPrice');
    });
    Route::controller(OrderController::class)->group(function() {
        Route::post('/order', 'order')->name('order');
    });

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/login', function() {
            return view('login');
        })->name('login');
        Route::controller(LoginController::class)->group(function() {
            Route::post('/login-admin', 'login')->name('loginadmin');
        });
    });


    Route::group(['middleware' => ['auth']], function () {
        Route::controller(LoginController::class)->group(function() {
            Route::post('/logout', 'logout')->name('logoutadmin');
        });
        Route::group(['prefix' => 'admin'], function() {
            Route::get('/', function () {
                return view('admin.index');
            })->name('admin');
            Route::group(['prefix' => 'slider'], function() {
                Route::controller(AdminSliderController::class)->group(function() {
                    Route::get('/', 'index')->name('allSlider');
                    Route::post('/create', 'create')->name('createSlider');
                    Route::get('/edit/{id}', 'edit')->name('editSlider');
                    Route::put('/update/{id}', 'update')->name('updateSlider');
                    Route::delete('/delete/{id}', 'delete')->name('deleteSlider');
                });
            });
            Route::group(['prefix' => 'sample'], function() {
                Route::controller(AdminSampleController::class)->group(function() {
                    Route::get('/', 'index')->name('allSample');
                    Route::post('/create', 'create')->name('createSample');
                    Route::get('/edit/{id}', 'edit')->name('editSample');
                    Route::put('/update/{id}', 'update')->name('updateSample');
                    Route::delete('/delete/{id}', 'delete')->name('deleteSample');
                });
            });
            Route::group(['prefix' => 'sample-type'], function() {
                Route::controller(AdminSampleTypeController::class)->group(function() {
                    Route::get('/{slug}', 'index')->name('allSampleType');
                    Route::put('/update/{id}', 'update')->name('updateSampleType');
                });
            });
            Route::group(['prefix' => 'orders'], function() {
                Route::controller(AdminOrderController::class)->group(function() {
                    Route::get('/', 'index')->name('allOrder');
                    Route::delete('/delete/{id}', 'delete')->name('deleteOrder');
                });
            });
            Route::group(['prefix' => 'contact'], function() {
                Route::controller(AdminContactController::class)->group(function() {
                    Route::get('/', 'index')->name('allContact');
                    Route::put('/update/{id}', 'update')->name('updateContact');
                    Route::get('/message', 'update')->name('allContactMessage');
                    Route::get('/message', 'contactMessage')->name('allContactMessage');
                    Route::delete('/delete-message/{id}', 'deleteContactMessage')->name('deleteContactMessage');
                });
            });
            Route::group(['prefix' => 'about'], function() {
                Route::controller(AdminAboutController::class)->group(function() {
                    Route::get('/', 'index')->name('allAbout');
                    Route::put('/update/{id}', 'updateAbout')->name('updateAbout');
                });
            });
            Route::group(['prefix' => 'about-detail'], function() {
                Route::controller(AdminAboutController::class)->group(function() {
                    Route::get('/', 'aboutDetail')->name('allAboutDetail');
                    Route::post('/create', 'insertAboutDetail')->name('createAboutDetail');
                    Route::get('/edit/{id}', 'editAboutDetail')->name('editAboutDetail');
                    Route::put('/update/{id}', 'updateAboutDetail')->name('updateAboutDetail');
                    Route::delete('/delete/{id}', 'deleteAboutDetail')->name('deleteAboutDetail');
                });
            });
            Route::group(['prefix' => 'shipping-returns'], function() {
                Route::controller(AdminShippingReturnController::class)->group(function() {
                    Route::get('/', 'index')->name('allShipping');
                    Route::put('/update/{id}', 'update')->name('updateShipping');
                });
            });
            Route::group(['prefix' => 'terms-conditions'], function() {
                Route::controller(AdminTermsController::class)->group(function() {
                    Route::get('/', 'index')->name('allTerms');
                    Route::put('/update/{id}', 'update')->name('updateTerms');
                });
            });
            Route::group(['prefix' => 'subscribe'], function() {
                Route::controller(AdminSubscribeController::class)->group(function() {
                    Route::get('/', 'index')->name('allSubscribe');
                    Route::delete('/delete/{id}', 'delete')->name('deleteSubscribe');
                });
            });
            Route::group(['prefix' => 'car'], function() {
                Route::controller(AdminCarController::class)->group(function() {
                    Route::get('/', 'index')->name('allCar');
                });
            });
            Route::group(['prefix' => 'price'], function() {
                Route::controller(AdminPriceController::class)->group(function() {
                    Route::get('/{status}', 'index')->name('allPrice');
                    Route::put('/update/{id}', 'update')->name('updatePrice');
                });
            });
        });
    });
});