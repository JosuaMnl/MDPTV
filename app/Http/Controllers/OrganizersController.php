<?php

namespace App\Http\Controllers;

use App\Models\Organizers;
use Illuminate\Http\Request;

class OrganizersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organizers = Organizers::all();
        return view('organizers.index')->with('organizers', $organizers)->with('scripts',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organizers.create');
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
            'penyelenggara' => 'required'
        ]);

        $organizers = new Organizers();
        $organizers->penyelenggara = $validateData['penyelenggara'];

        $organizers->save();
        $request->session()->flash('success', 'Data Penyelenggara berhasil di simpan');
        return redirect()->route('organizers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizers  $organizers
     * @return \Illuminate\Http\Response
     */
    public function show(Organizers $organizers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizers  $organizers
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizers $organizer)
    {
        //
        return view('organizers.edit')->with('organizers', $organizer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizers  $organizers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizers $organizer)
    {
        //
        $validateData =$request->validate([
            'penyelenggara' => 'required'
        ]);

        Organizers::where('id', $organizer->id)->update($validateData);
        $request->session()->flash('success', 'Data Penyelenggara berhasil di edit');
        return redirect()->route('organizers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizers  $organizers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizers $organizer)
    {
        //
        $organizer->delete();
        return redirect()->route('organizers.index')->with('success', "Data Penyelenggara $organizer->penyelenggara berhasil dihapus");
    }
}