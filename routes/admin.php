<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\Admin_Auth\AdminAuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/


Route::get('login_admin', [LoginAdmin::class,'show'])->name('login_admin');

Route::post('check', [LoginAdmin::class, 'store'])->name('check_admin');




Route::prefix('admin')->middleware('IsAdmin')->group(function (){

Route::get('dashboard', [App\Http\Controllers\LoginAdmin::class,'dashboard'])->name('admin_dashboard');
Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');
   



//////////////////////////////// SAJEDA CODE ////////////////////////////////

Route::get('/Admin_Category', function () {
    return view('Admin_Dashboard.Category ');
   
});
Route::get('/Admin_Home', function () {
    return view('Admin_Dashboard.Statics ');
   
});
Route::get('/Admin_Donations', function () {
    return view('Admin_Dashboard.Donations');
   
});
Route::get('/Admin_Volunteers', function () {
    return view('Admin_Dashboard.Volunteers');
   
});
Route::get('/Admin_User', function () {
    return view('Admin_Dashboard.User');
   
});

});

require __DIR__ . '/auth.php';



