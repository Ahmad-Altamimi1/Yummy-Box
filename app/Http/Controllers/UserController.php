<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
  
    public function view($id)
    {
        $user= User::find($id);
        return redirect('Admin_Dashboard.user_View',['user'=>$user]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        
        return view('Admin_Dashboard.user_Create', ['user' => $user]);
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
        $user->phone= $request->phone;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $user->image =  $imageName;
        }        $user->save();
 
 
        return redirect()->route('Admin_Dashboard.User');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
        $UserList= User::all();
        return view('Admin_Dashboard.User',['users'=>$UserList]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin_Dashboard.User_Update')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name= $request->name;
        $user->LastName= $request->LastName;
        // $user->email= $request->email;
        // $user->password= $request->password;
        $user->phone= $request->phone;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $user->image =  $imageName;
        }        $user->save();
 
 

        // $admin->update();
        return redirect()->route('Admin_Dashboard.User')->with('success', 'student data dashboard successfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect()->route('Admin_Dashboard.User')->with('success','student data dashboard successfully ');
    } 
}


