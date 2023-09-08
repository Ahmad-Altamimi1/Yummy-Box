<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
use Cate;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/single', function () {
    return view('pages.contact');
});

// Define the PayPal routes with the appropriate methods
Route::post('paypal', [PaypalController::class, 'payment'])->name('paypal'); // Use 'store' method for POST
Route::get('paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET