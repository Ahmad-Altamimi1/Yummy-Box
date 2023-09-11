<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Admin_Auth\AdminAuthenticatedSessionController;


use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\FrontvolunteerController;
use App\Http\Controllers\UvolunteerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SocialController;



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


// Route::get('/about', function () {
//     return view('pages.about');
// });
use App\Http\Controllers\StripeController;
use App\Models\User;

Route::get('/', function () {
    return view('home');
   
});
Route::get('/rer', function () {
    return view('pages.cliker');
   
});

// Route::get('/home', function () {
//     return view('pages.index');
// });
Route::get('single/{id?}', [CategoryController::class, 'find']);
// Route::get('/', [CategoryController::class, 'index']);
Route::get('home', [CategoryController::class, 'index'])->name('home');
// Route::resource('pages', ProductsController::class);
Route::resource('pages/', ProductsController::class);

Route::resource('product', ProductsController::class);

// Route::get('/', [CategoryController::class, 'index']);
// Route::get('/home', [CategoryController::class, 'index']);
Route::resource('pages/', ProductsController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




// Route::get('pages/index', [App\Http\Controllers\Controller::class, 'showhome'])
//     ->name('home');

// Route::get('home', [Controller::class, 'showhome'])
//     ->name('home');

Route::get('/about', [Controller::class, 'showabout'])
    ->name('about');

Route::get('/contact', [Controller::class, 'showcontact'])
    ->name('contact');

Route::get('/causes', [Controller::class, 'showcauses'])
    ->name('causes');

Route::get('/news', [Controller::class, 'shownews'])
    ->name('news');

Route::get('pages/about', [Controller::class, 'showabout'])
    ->name('about');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/profile', [ProfileController::class, 'show'])->name('profile.edit');
});




// Define the PayPal routes with the appropriate methods
Route::post('paypal', [PaypalController::class, 'payment'])->middleware('auth', 'verified')->name('paypal'); // Use 'store' method for POST
Route::get('paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET
// Define the PayPal routes with the appropriate methods
Route::post('single/paypal', [PaypalController::class, 'payment'])->middleware('auth', 'verified')->name('paypal_single'); // Use 'store' method for POST
Route::get('single/paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('single/paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET



// Define the Stripe routes with the appropriate methods
Route::post('stripe', [StripeController::class, 'payment'])->middleware('auth', 'verified')->name('stripe'); // Use 'store' method for POST
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET
// Define the Stripe routes with the appropriate methods

Route::post('single/stripe', [StripeController::class, 'payment'])->middleware('auth', 'verified')->name('stripe_single'); // Use 'store' method for POST
Route::get('single/stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('single/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET


    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

 




// login by google
Route::get('auth/google',[SocialController::class,'redirectToGoogle'])->name('google') ;

Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

//login by facebook

Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('facebook') ;

Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);



//login by github

Route::get('auth/github', [SocialController::class, 'redirectToGithub'])->name('github');

Route::get('auth/github/callback', [SocialController::class, 'handleGithubCallback']);




// Route::view('donation','pages.donationForm');


Route::get('/backform', function () {
    return view('pages.trainingForm')->middleware('auth', 'verified');
});

Route::resource("volunteers", VolunteerController::class)->middleware('auth', 'verified');


Route::get('/frontform', function () {
    return view('pages.frontendForm')->middleware('auth', 'verified');
});

Route::resource("frontvolunteers", FrontvolunteerController::class)->middleware('auth', 'verified');


Route::get('/serviceform', function () {
    return view('pages.donationForm')->middleware('auth', 'verified');
});

Route::resource("donors", DonorController::class);



Route::get('/UIform', function () {
    return view('pages.UIform')->middleware('auth', 'verified');
});

Route::resource("uvolunteers", UvolunteerController::class)->middleware('auth', 'verified');

require __DIR__ . '/auth.php';