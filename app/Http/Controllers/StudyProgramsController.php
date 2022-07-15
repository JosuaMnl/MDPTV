<?php

namespace App\Http\Controllers;

use App\Models\Study_programs;
use Illuminate\Http\Request;

class StudyProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $study_programs = study_programs::all();
        return view('study_programs.index')->with('study_programs', $study_programs)->with('scripts',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('study_programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama_prodi' => 'required'
        ]);

        $study_programs = new study_programs();
        $study_programs->nama_prodi = $validateData['nama_prodi'];

        $study_programs->save();
        $request->session()->flash('success', "Data Program Studi $study_programs->nama_prodi berhasil di simpan");
        return redirect()->route('study_programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study_programs  $study_programs
     * @return \Illuminate\Http\Response
     */
    public function show(Study_programs $study_programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study_programs  $study_programs
     * @return \Illuminate\Http\Response
     */
    public function edit(Study_programs $study_program)
    {
        //
        return view('study_programs.edit')->with('study_programs', $study_program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study_programs  $study_programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study_programs $study_program)
    {
        //
        $validateData =$request->validate([
            'nama_prodi' => 'required'
        ]);

        Study_programs::where('id', $study_program->id)->update($validateData);
        $request->session()->flash('success', 'Data Program Studi berhasil di ubah');
        return redirect()->route('study_programs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study_programs  $study_programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study_programs $study_program)
    {
        //
        $study_program->delete();
        return redirect()->route('study_programs.index')->with('success', "Data Program Studi $study_program->nama_prodi berhasil dihapus");
    }
}