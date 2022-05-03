<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PriceController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SampleTypeController;
use App\Http\Controllers\Api\ShippingReturnController;
use App\Http\Controllers\Api\SubscribeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/login', function() {
    return redirect()->route('login');
});
// Home Page
Route::controller(HomeController::class)->group(function() {
    Route::get('/home', 'index');
});
// About Page
Route::controller(AboutController::class)->group(function() {
    Route::get('/about', 'index');
});
// Product Page
Route::controller(ProductController::class)->group(function() {
    Route::get('/product', 'index');
});
// contact Page
Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index');
});
// Shipping & Returns
Route::controller(ShippingReturnController::class)->group(function() {
    Route::get('/shipping', 'index');
});

// contact message
Route::controller(ContactController::class)->group(function() {
    Route::post('/contact-message', 'message');
});


// Subscribe
Route::controller(SubscribeController::class)->group(function() {
    Route::post('/subscribe', 'subscribe');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
