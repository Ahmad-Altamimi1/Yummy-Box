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


Route::get('/about', function () {
    return view('pages.about');
});
use App\Http\Controllers\StripeController;



Route::get('/', function () {
    return view('welcome');
   
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

// Route::view('about', 'pages/about');
   
// Route::view('contact', 'pages/contact');

// Route::view('causes', 'pages/causes');

// Route::view('news', 'pages/news');


// Route::view('pages/contact', 'pages/contact');
// Route::view('pages/causes', 'pages/causes');
// Route::view('pages/news', 'pages.news');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/profile', [ProfileController::class, 'show'])->name('profile.edit');
});




// Define the PayPal routes with the appropriate methods
Route::post('paypal', [PaypalController::class, 'payment'])->name('paypal'); // Use 'store' method for POST
Route::get('paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET
// Define the PayPal routes with the appropriate methods
Route::post('single/paypal', [PaypalController::class, 'payment'])->name('paypal'); // Use 'store' method for POST
Route::get('single/paypal/success', [PaypalController::class, 'success'])->name('success'); // Use 'success' method for GET
Route::get('single/paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET



// Define the Stripe routes with the appropriate methods
Route::post('stripe', [StripeController::class, 'payment'])->name('stripe'); // Use 'store' method for POST
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET
// Define the Stripe routes with the appropriate methods
Route::post('single/stripe', [StripeController::class, 'payment'])->name('stripe'); // Use 'store' method for POST
Route::get('single/stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('single/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET


    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


require __DIR__ . '/auth.php';

//////////////////////////////// SAJEDA CODE ////////////////////////////////

// Route::get('/Admin_Category', function () {
//     return view('Admin_Dashboard.Category ');
   
// });
Route::get('/Admin_Category',[CategoryController::class, 'show'])-> name ('Admin_Dashboard.Category');
Route::post('/Admin_Category',[CategoryController::class, 'save']);


Route::get('/Admin_Home', function () {
    return view('Admin_Dashboard.Statics ');
   
});
Route::get('/Admin_creatuser', function () {
    return view('Admin_Dashboard.creatuser ');
   
});
Route::get('/Admin_Donations', function () {
    return view('Admin_Dashboard.Donations');
   
});
Route::get('/Admin_Volunteers', function () {
    return view('Admin_Dashboard.Volunteers');
   
});
// Route::get('/Admins_Payment', function () {
//     return view('Admin_Dashboard.Payments');
   
// });
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('Admin_Dashboard.Admins_Update');

Route::get('/Admins_Payment',[PaypalController::class, 'show']);

Route::get('/Admins_User',[UserController::class, 'show'])-> name ('Admin_Dashboard.User');
Route::post('/Admins_User',[UserController::class, 'store']);


// Route::get('/Admin_User', function () {
    //     return view('Admin_Dashboard.User');
    
// });
// Route::get('/Admins_Data', function () {
    //     return view('Admin_Dashboard.Admins_Data');
    
    // });
    Route::get('/Admins_Data',[AdminController::class, 'show']) -> name ('Admin_Dashboard.Admins_Data');
    Route::post('/Admins_Data',[AdminController::class, 'store']);
    Route::get('/Admins_Update/{id}', [AdminController::class,'edit']);
    Route::get('store_admin', [AdminController::class, 'store_admin']);
    // store_admin/{{ $admins->id }}
    
// Route::get('/Admins_Projects', function () {
//     return view('Admin_Dashboard.Projects');
   
// });
Route::get('/Admins_Projects',[ProductsController::class, 'show'])-> name ('Admin_Dashboard.Projects');
Route::post('/Admins_Projects',[ProductsController::class, 'store']);

    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

    
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


require __DIR__ . '/auth.php';




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
    return view('pages.trainingForm');
});

Route::resource("volunteers", VolunteerController::class);


Route::get('/frontform', function () {
    return view('pages.frontendForm');
});

Route::resource("frontvolunteers", FrontvolunteerController::class);


Route::get('/serviceform', function () {
    return view('pages.donationForm');
});

Route::resource("donors", DonorController::class);



Route::get('/UIform', function () {
    return view('pages.UIform');
});

Route::resource("uvolunteers", UvolunteerController::class);