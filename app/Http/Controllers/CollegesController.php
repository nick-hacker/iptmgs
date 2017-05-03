<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\College;


class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::latest()->get();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(College $college)
    {
        //Validating the request
        $this->validate(request(), [
                'college_name' => 'required|unique:colleges|min:3|max:100',
                'college_acronym'  =>  'required|max:20'
            ]);

        College::create([
            'college_name' => request('college_name'),
            'college_acronym' => request('college_acronym'),
            'institutions_id' => 1,
            ]);
         
        return redirect('/colleges');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college)
    {
        $college->college_name = $request->input('college_name');
        $college->college_acronym = $request->input('college_acronym');

        $college->save();

        return redirect('colleges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        //
    }
}
