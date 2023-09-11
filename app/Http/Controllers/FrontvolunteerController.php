<?php

namespace App\Http\Controllers;

use App\Models\Frontvolunteer;
use App\Http\Requests\StoreFrontvolunteerRequest;
use App\Http\Requests\UpdateFrontvolunteerRequest;

class FrontvolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFrontvolunteerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFrontvolunteerRequest $request)
    {   
        $request->validate([
            'CV' => 'required|mimes:pdf,docx',
        ]);
        Frontvolunteer::create([

        'Address'=>$request->Address,
        'Languages'=>$request->Languages,
        'day'=>$request->day,
        'Experience'=>$request->Experience,
        'CV'=>$request->CV,
       
       ]);
       return redirect('home');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Frontvolunteer $frontvolunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontvolunteer $frontvolunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFrontvolunteerRequest  $request
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFrontvolunteerRequest $request, Frontvolunteer $frontvolunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontvolunteer  $frontvolunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontvolunteer $frontvolunteer)
    {
        //
    }
}
