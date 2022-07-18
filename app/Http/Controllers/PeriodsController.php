<?php

namespace App\Http\Controllers;

use App\Models\Periods;
use Illuminate\Http\Request;

class PeriodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Periods::class);
        $periods = Periods::all();
        return view('periods.index')->with('periods', $periods)->with('scripts', true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('periods.create');
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
        $this->authorize('create', Periods::class);
        $validateData = $request->validate([
            'tahun_akademik' => 'required'
        ]);

        $periods = new Periods();
        $periods->tahun_akademik = $validateData['tahun_akademik'];

        $periods->save();
        $request->session()->flash('success', 'Data Periode berhasil di simpan');
        return redirect()->route('periods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function show(Periods $periods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function edit(Periods $period)
    {
        //
        return view('periods.edit')->with('periods', $period);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periods $period)
    {
        //
        $this->authorize('update', Periods::class);
        $validateData = $request->validate([
            'tahun_akademik' => 'required'
        ]);

        Periods::where('id', $period->id)->update($validateData);
        $request->session()->flash('success', 'Data Periode berhasil di edit');
        return redirect()->route('periods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periods $period)
    {
        //
        $this->authorize('delete', Periods::class);
        $period->delete();
        return redirect()->route('periods.index')->with('success', "Data Periode $period->tahun_akademik berhasil dihapus");
    }
}