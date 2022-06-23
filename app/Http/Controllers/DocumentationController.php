<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Organizers;
use App\Models\Periods;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $documentations = Documentation::all();
        return view('documentations.index')->with('documentations', $documentations)->with('tables',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $organizers = Organizers::all();
        $periods = Periods::all();
        return view('documentations.create')->with('organizers', $organizers)->with('periods', $periods)->with('date',true);
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
        $validasi = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'link_dokumentasi' => 'required',
            'periods' => 'required',
            'organizers' => 'required'
        ]);

        $dokumentasi = new Documentation();
        $dokumentasi->nama_kegiatan = $validasi['nama_kegiatan'];
        $dokumentasi->tanggal_kegiatan = $validasi['tanggal_kegiatan'];
        $dokumentasi->lokasi = $validasi['lokasi'];
        $dokumentasi->keterangan = $validasi['keterangan'];
        $dokumentasi->link_dokumentasi = $validasi['link_dokumentasi'];
        $dokumentasi->periods_id = $validasi['periods'];
        $dokumentasi->organizers_id = $validasi['organizers'];
        $dokumentasi->save();

        return redirect()->route('documentation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function show(Documentation $documentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentation $documentation)
    {
        //
        $organizers = Organizers::all();
        $periods = Periods::all();
        return view('documentations.edit')->with('documentations', $documentation)->with('organizers', $organizers)->with('periods', $periods);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentation $documentation)
    {
        //
        $validasi = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'link_dokumentasi' => 'required',
            'periods_id' => 'required',
            'organizers_id' => 'required'
        ]);
        
        Documentation::where('id', $documentation->id)->update($validasi);
        
        $request->session()->flash('info', 'Data Dokumentasi berhasil di edit');
        return redirect()->route('documentation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentation  $documentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentation $documentation)
    {
        //
        $documentation->delete();
        return redirect()->back();
    }
}
