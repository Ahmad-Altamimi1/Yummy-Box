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






// Route::get('home', [Controller::class, 'showhome'])
//     ->name('home');

Route::get('/about', [Controller::class, 'showabout'])
    ->name('about');

Route::get('/single', [Controller::class, 'showsingle'])
    ->name('single');

Route::get('/contact', [Controller::class, 'showcontact'])
    ->name('contact');

Route::get('/causes', [Controller::class, 'showcauses'])
    ->name('causes');

Route::get('/news', [Controller::class, 'shownews'])
    ->name('news');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Define the PayPal routes with the appropriate methods
Route::post('paypal', [PaypalController::class, 'payment'])->middleware('auth', 'verified')->name('paypal'); // Use 'store' method for POST
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success'); // Use 'success' method for GET
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel'); // Use 'cancel' method for GET
// Define the PayPal routes with the appropriate methods




Route::get('/payment', function () {
    return view('pages.payment');
})->name('payment/1')->middleware('auth', 'verified');

// Define the Stripe routes with the appropriate methods
Route::get('finish', function () {
    return view('sccess');
})->name('finish');
Route::post('stripe/{id}', [StripeController::class, 'payment'])->middleware('auth', 'verified')->name('stripe_single'); // Use 'store' method for POST
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success'); // Use 'success' method for GET
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel'); // Use 'cancel' method for GET


    
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
    return view('pages.frontendForm');
})->name('front')->middleware('auth', 'verified');

Route::resource("frontvolunteers", FrontvolunteerController::class)->middleware('auth', 'verified');


Route::get('/serviceform', function () {
    return view('pages.donationForm')->middleware('auth', 'verified');
});

Route::resource("donors", DonorController::class);



Route::get('/UIform', function () {
    return view('pages.UIform')->middleware('auth', 'verified');
});

Route::resource("uvolunteers", UvolunteerController::class)->middleware('auth', 'verified');






Route::get('login_admin', [App\Http\Controllers\LoginAdmin::class, 'show'])->name('login_admin');

Route::post('check', [App\Http\Controllers\LoginAdmin::class, 'store'])->name('check_admin');




Route::prefix('admin')->middleware('IsAdmin')->group(function () {

    Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');




    //////////////////////////////// SAJEDA CODE ////////////////////////////////


    Route::get('/Admin_Home', function () {
        return view('Admin_Dashboard.Statics ')->name('Admin_Home');

    });
    Route::get('/Admin_creatuser', function () {
        return view('Admin_Dashboard.creatuser ');

    });
    Route::get('/Admin_Donations', function () {
        return view('Admin_Dashboard.Donations')->name('Admin_Donations');

    });
    Route::get('/Admin_Volunteers', function () {
        return view('Admin_Dashboard.Volunteers')->name('Admin_Volunteers');

    });

    Route::get('/Admin_Volunteers', [VolunteerController::class, 'showe']);



    Route::get('/Admins_Payment', [PaypalController::class, 'show']);




    // categories data
    Route::get('/Admin_Category', [CategoryController::class, 'show'])->name('Admin_Dashboard.Category');
    Route::post('/Admin_Category', [CategoryController::class, 'save']);
    Route::post('categorydelete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('categoryedit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::patch('categoryedit/categoryupdate/{id}', [CategoryController::class, 'update']);


    // admins data
    Route::get('/Admins_Data', [AdminController::class, 'show'])->name('Admin_Dashboard.Admins_Data');
    Route::post('/Admins_Data', [AdminController::class, 'store']);
    Route::delete('admindelete/{id}', [AdminController::class, 'destroy'])->name('Admin_Dashboard.destroy');
    Route::get('adminsedit/{id}', [AdminController::class, 'edit'])->name('Admin_Dashboard.edit');
    Route::patch('adminsedit/adminsupdate/{id}', [AdminController::class, 'update']);




    // users data
    Route::get('/Admins_User', [UserController::class, 'show'])->name('Admin_Dashboard.User');
    Route::post('/Admins_User', [UserController::class, 'store']);
    Route::delete('userdelete/{id}', [UserController::class, 'destroy'])->name('User.destroy');
    Route::get('useredit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('useredit/userupdate/{id}', [UserController::class, 'update']);


    Route::get('/Admins_Projects', [ProductsController::class, 'show'])->name('Admin_Dashboard.Projects');
    Route::post('/Admins_Projects', [ProductsController::class, 'store']);
    Route::delete('productdelete/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('productedit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::patch('productedit/productupdate/{id}', [ProductsController::class, 'update']);


});


require __DIR__ . '/auth.php';