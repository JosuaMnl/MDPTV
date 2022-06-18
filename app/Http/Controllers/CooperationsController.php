<?php

namespace App\Http\Controllers;

use App\Models\Cooperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->user_levels->user_levels === "MDP TV"){
            $cooperations = Cooperations::all();
        } else {
            // $cooperations = Cooperations::all();
            $cooperations = Cooperations::where('users_id', Auth::user()->id)->get();
            // $cooperations = DB::select("SELECT * FROM cooperations WHERE cooperations.users_id =". Auth::user()->id);
        }
        // dd($cooperations);
        return view('cooperations.index')->with('cooperations', $cooperations);
        // dd($request->session());
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
        $this->authorize('view', Cooperations::class);
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
        $this->authorize('update', Cooperations::class);
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
        // dd($cooperation);
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
