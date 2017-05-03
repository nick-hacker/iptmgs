<?php

namespace App\Http\Controllers;

use App\School;
use App\College;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::latest()->get();
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::all();
        return view('schools.create', compact('colleges'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(School $school)
    {
        //Validating the request
        $this->validate(request(), [
                'school_name' => 'required|unique:schools|min:3|max:100',
                'school_acronym'  =>  'required|max:20'
                // 'colleges_id'  =>  
            ]);



        School::create([
            'school_name' => request('school_name'),
            'school_acronym' => request('school_acronym'),
            'colleges_id' => request('college_id'),
            ]);
         
        return redirect('/schools');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $colleges = College::all();
        return view('schools.edit', compact('colleges', 'school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->school_name = $request->input('school_name');
        $school->school_acronym = $request->input('school_acronym');
        $school->colleges_id = $request->input('college_id');
        $school->save();

        return redirect('schools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
