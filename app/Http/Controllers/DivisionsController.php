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
        $this->authorize('viewAny', Divisions::class);
        $divisions = divisions::all();
        return view('divisions.index')->with('divisions', $divisions)->with('scripts',true);
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
        $this->authorize('create', Divisions::class);
        $validateData = $request->validate([
            'nama_divisi' => 'required'
        ]);

        $divisions = new Divisions();
        $divisions->nama_divisi = $validateData['nama_divisi'];

        $divisions->save();
        $request->session()->flash('success', 'Data Divisi berhasil di simpan');
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
        $this->authorize('update', Divisions::class);
        $validateData =$request->validate([
            'nama_divisi' => 'required'
        ]);

        Divisions::where('id', $division->id)->update($validateData);
        $request->session()->flash('success', 'Data Penyelenggara berhasil di edit');
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
        $this->authorize('delete', Divisions::class);
        $division->delete();
        return redirect()->route('divisions.index')->with('success', "Data divisi $division->nama_divisi berhasil dihapus");
    }
}