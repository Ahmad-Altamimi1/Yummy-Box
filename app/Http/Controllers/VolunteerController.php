<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use App\Http\Requests\StoreVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::all();
       return view('profile.edit')->with('Volunteers',$volunteers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVolunteerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVolunteerRequest $request)
    {
        $request->validate([
            'CV' => 'required|mimes:pdf,docx',
        ]);
       Volunteer::create([

        'Address'=>$request->Address,
        'Languages'=>$request->Languages,
        'day'=>$request->day,
        'Experience'=>$request->Experience,
        'CV'=>$request->CV,
       
       ]);
       return redirect('home');
    }

    
    public function upload(Volunteer $request)
{
    $request->validate([
        'file' => 'required|mimes:pdf,docx',
    ]);

    // Handle file upload logic here
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        $volunteers = Volunteer::all();
       return view('profile.edit')->with('Volunteers',$volunteers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVolunteerRequest  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVolunteerRequest $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }

    public function showe(Volunteer $volunteer)
    {
        $volunteers = Volunteer::all();
       return view('admin.Volunteers')->with('Volunteers',$volunteers);
    }
}
