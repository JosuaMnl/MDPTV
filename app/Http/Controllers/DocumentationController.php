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
        return view('dokumentasi.index')->with('documentations', $documentations);
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
        return view('dokumentasi.create')->with('organizers', $organizers)->with('periods', $periods);
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
        $dokumentasi->tanggal_kegiatan = date('Y/m/d', strtotime($validasi['tanggal_kegiatan']));
        $dokumentasi->lokasi = $validasi['lokasi'];
        $dokumentasi->keterangan = $validasi['keterangan'];
        $dokumentasi->link_dokumentasi = $validasi['link_dokumentasi'];
        $dokumentasi->periods_id = $validasi['periods'];
        $dokumentasi->organizers_id = $validasi['organizers'];
        // dd($dokumentasi);
        $dokumentasi->save();

        return redirect()->route('dokumentasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
