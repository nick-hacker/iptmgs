<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::latest()->get();
        return view('programs.index', compact('programs'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Program $request)
    {
        //Validating the request
        $this->validate(request(), [
                'program_code' => 'required',
                'program_name'  =>  'required',
                'program_acronym'  =>  'required',
                'program_years'  =>  'required',
                'program_type'  =>  'required',
                // 'colleges_id'  =>  
            ]);

       Program::create([
            'program_code' => request('program_code'),
            'program_name' => request('program_name'),
            'program_acronym' => request('program_acronym'),
            'weight' => request('weight'),
            'program_years' => request('program_years'),
            'program_type' => request('program_type'),
            // 'colleges_id' => 1,
            ]);
         
        return redirect('/programs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
