<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Positions::class);
        $positions = positions::all();
        return view('positions.index')->with('positions', $positions)->with('scripts',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('positions.create');
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
        $this->authorize('create', Positions::class);
        $validateData = $request->validate([
            'nama_jabatan' => 'required'
        ]);

        $positions = new Positions();
        $positions->nama_jabatan = $validateData['nama_jabatan'];

        $positions->save();
        $request->session()->flash('success', "Data Jabatan $positions->nama_jabatan berhasil di simpan");
        return redirect()->route('positions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function show(Positions $positions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function edit(Positions $position)
    {
        //
        return view('positions.edit')->with('positions', $position);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Positions $position)
    {
        //
        $this->authorize('update', Positions::class);
        $validateData =$request->validate([
            'nama_jabatan' => 'required'
        ]);

        Positions::where('id', $position->id)->update($validateData);
        $request->session()->flash('success', 'Data Jabatan berhasil di ubah');
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Positions $position)
    {
        //
        $this->authorize('delete', Positions::class);
        $position->delete();
        return redirect()->route('positions.index')->with('success', "Data Jabatan $position->nama_jabatan berhasil dihapus");
    }
}