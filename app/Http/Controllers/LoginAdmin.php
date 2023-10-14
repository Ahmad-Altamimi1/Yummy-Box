<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Admin;

class LoginAdmin extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(): View
    {
        return view('Admin_Dashboard/login');
    }
    public function dashboard()
    {
        return view('Admin_Dashboard.Admin_Home');
    }

    public function store(Request $request): RedirectResponse
    {

$check = $request->all();

if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
    return redirect()->route('Admin_Dashboard.index');
} else {
    $errors = [];

    if (!filter_var($check['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email';
    }

    // Add your password validation logic here, e.g., checking length or complexity
    // If the password is invalid, add it to the $errors array

    if (count($errors) > 0) {
        return redirect()->back()->with('error', "invaild email");
    } else {
        return redirect()->back()->with('error', 'invaild Email Or Password');
    }
}



    }
    public function logout_admin()
    {  Auth::guard('admin')->logout();
        return redirect()->route('login_admin')->with('success', 'You Have Logout Success');

    }

}