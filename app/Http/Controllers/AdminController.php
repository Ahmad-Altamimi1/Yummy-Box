<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
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
       $admin=  new Admin;
       $admin->name= $request->name;
       $admin->last_name= $request->last_name;
       $admin->email= $request->email;
       $admin->password= $request->password;
       $admin->save();


       return redirect()->route('Admin_Dashboard.Admins_Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        
        $AdminList= Admin::all();
        return view('Admin_Dashboard.Admins_Data',['admins'=>$AdminList]);
        


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
   $admins= Admin::find($admin);
   return view('Admin_Dashboard.Admins_Update',['admins'=>$admin]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}


