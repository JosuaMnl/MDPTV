<?php

namespace App\Http\Controllers;

use App\Models\Cooperations;
use Illuminate\Http\Request;

class CooperationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cooperations = Cooperations::all();
        return view('cooperations.index')->with('cooperations', $cooperations);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperations $cooperation)
    {
        //
        return view('cooperations.show')->with('cooperations', $cooperation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperations $cooperations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperations $cooperations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperations $cooperation)
    {
        //
        dd($cooperation);
        $cooperation->delete();
        
        return redirect()->route('cooperations.index')->with('success', 'Cooperations deleted successfully');
    }

    public function approved($id){
        $data = Cooperations::find($id);
        $data->status = "Disetujui";

        $data->save();

        return redirect()->route('cooperations.index');
    }

    public function canceled($id){
        $data = Cooperations::find($id);
        $data->status = "Ditolak";

        $data->save();

        return redirect()->route('cooperations.index');
    }
}
