<?php

namespace App\Http\Controllers;

use App\Models\Kegiatans;
use Illuminate\Http\Request;

class KegiatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Kegiatans::class);
        $kegiatans = Kegiatans::all();
        return view('kegiatans.index')->with('kegiatans', $kegiatans)->with('scripts', true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kegiatans.create')->with('scripts', true);
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
        $this->authorize('create', Kegiatans::class);
        $validasiData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:10000',
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        $ext = $request->foto->getClientOriginalExtension(); 
        $nama_file_baru = "foto-". time() . "." . $ext;
        $request->foto->storeAs('public/foto', $nama_file_baru);

        $kegiatan = new Kegiatans();
        $kegiatan->foto = $nama_file_baru;
        $kegiatan->nama_kegiatan = $validasiData['nama_kegiatan'];
        $kegiatan->deskripsi = $validasiData['deskripsi'];
        $kegiatan->link = $validasiData['link'];
        $kegiatan->save();

        return redirect()->route('kegiatans.index')->with('success', "Data Kegiatan $kegiatan->nama_kegiatan berhasil di simpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatans  $kegiatans
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatans $kegiatans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatans  $kegiatans
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatans $kegiatan)
    {
        //
        return view('kegiatans.edit')->with('kegiatans', $kegiatan)->with('scripts', true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatans  $kegiatans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatans $kegiatan)
    {
        //
        $this->authorize('update', Kegiatans::class);
        $kegiatan = Kegiatans::find($kegiatan->id);
        $validasiData = $request->validate([
            'foto' => 'mimes:jpg,png,jpeg|max:10000',
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($request->has('foto')){
            $ext = $request->foto->getClientOriginalExtension(); 
            $nama_file_baru = "foto-". time() . "." . $ext;
            $request->foto->storeAs('public/foto', $nama_file_baru);

            $kegiatan->foto = $nama_file_baru;
            $kegiatan->nama_kegiatan = $validasiData['nama_kegiatan'];
            $kegiatan->deskripsi = $validasiData['deskripsi'];
            $kegiatan->link = $validasiData['link'];
            $kegiatan->save();
        } else{
            $kegiatan->nama_kegiatan = $validasiData['nama_kegiatan'];
            $kegiatan->deskripsi = $validasiData['deskripsi'];
            $kegiatan->link = $validasiData['link'];
            $kegiatan->save();
        }
        return redirect()->route('kegiatans.index')->with('success', "Data Kegiatan $kegiatan->nama_kegiatan berhasil di edit");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatans  $kegiatans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatans $kegiatan)
    {
        //
        $this->authorize('delete', Kegiatans::class);
        $kegiatan->delete();
        return redirect()->route('kegiatans.index')->with('success', 'Data Kegiatan berhasil dihapus');
    }
}
