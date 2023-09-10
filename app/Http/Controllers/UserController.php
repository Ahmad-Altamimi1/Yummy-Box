<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=  new User;
        $user->name= $request->name;
        $user->LastName= $request->LastName;
        $user->email= $request->email;
        $user->password= $request->password;
        $user->image= $request->image;
        $user->save();
 
 
        return redirect()->route('Admin_Dashboard.User');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        
        $UserList= User::all();
        return view('Admin_Dashboard.User',['Users'=>$UserList]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        //
    }
}


