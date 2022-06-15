<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $divisions = divisions::all();
        return view('divisions.index')->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('divisions.create');
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
            'nama_divisi' => 'required'
        ]);

        $divisions = new Divisions();
        $divisions->nama_divisi = $validateData['nama_divisi'];

        $divisions->save();
        return redirect()->route('divisions.index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function show(Divisions $divisions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function edit(Divisions $division)
    {
        //
        return view('divisions.edit')->with('divisions', $division);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisions $division)
    {
        //
        $validateData =$request->validate([
            'nama_divisi' => 'required'
        ]);

        Divisions::where('id', $division->id)->update($validateData);
        $request->session()->flash('info', 'Data Penyelenggara berhasil di ubah');
        return redirect()->route('divisions.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisions $division)
    {
        //
        $division->delete();
        return redirect()->route('divisions.index')->with('info', "Data divisi $division->nama_divisi berhasil dihapus");
    }
}