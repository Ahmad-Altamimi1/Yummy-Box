<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Admin_Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PaypalController;

Route::get('/contact', function () {
    return view('pages/contact');
   
});
// Route::get('/home', function () {
//     return view('pages.index');
// });
Route::get('single/{id?}', [CategoryController::class, 'find']);
Route::get('/', [CategoryController::class, 'index']);
Route::get('/home', [CategoryController::class, 'index']);
Route::resource('pages/', ProductsController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('pages/index', [Controller::class, 'showhome'])
    ->name('home');

// Route::get('pages/about', [Controller::class, 'showabout'])
//     ->name('about');

Route::get('pages/contact', [Controller::class, 'showcontact'])
    ->name('contact');

Route::get('pages/causes', [Controller::class, 'showcauses'])
    ->name('causes');

Route::get('pages/news', [Controller::class, 'shownews'])
    ->name('news');


// Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create']);
// Route::view('admin/dashboard', 'admin/dashboard');


// Route::view('pages/contact', 'pages/contact');
// Route::view('pages/causes', 'pages/causes');
// Route::view('pages/news', 'pages.news');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});
// Define the PayPal routes with the appropriate methods
Route::post('paypal', [PaypalController::class, 'payment'])->name('paypal'); // Use 'store' method for POST
Route::get('paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET


    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


require __DIR__ . '/auth.php';

















Route::view('donation','pages.donationForm');


Route::get('/form', function () {
    return view('pages.trainingForm');
});

Route::resource("volunteers", VolunteerController::class);