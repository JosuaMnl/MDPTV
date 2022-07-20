<?php

namespace App\Http\Controllers;

use App\Models\Webinars;
use Illuminate\Http\Request;
use tidy;

class WebinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('viewAny', Webinars::class);
        $webinars = Webinars::all();
        return view('webinars.index')->with('webinars', $webinars)->with('scripts',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('webinars.create')->with('scripts',true)->with('date', true);
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
        $this->authorize('create', Webinars::class);
        $validasiData = $request->validate([
            'foto' => 'required|mimes:jpg,png,jpeg|max:10000',
            'nama_webinar' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'biaya' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        $ext = $request->foto->getClientOriginalExtension(); 
        $nama_file_baru = "foto-". time() . "." . $ext;
        $request->foto->storeAs('public/foto', $nama_file_baru);

        $webinar = new Webinars();
        $webinar->foto = $nama_file_baru;
        $webinar->nama_webinar = $validasiData['nama_webinar'];
        $webinar->tanggal = $validasiData['tanggal'];
        $webinar->lokasi = $validasiData['lokasi'];
        $webinar->biaya = $validasiData['biaya'];
        $webinar->deskripsi = $validasiData['deskripsi'];
        $webinar->link = $validasiData['link'];
        $webinar->save();

        return redirect()->route('webinars.index')->with('success', "Data Webinar $webinar->nama_kegiatan berhasil di simpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webinars  $webinars
     * @return \Illuminate\Http\Response
     */
    public function show(Webinars $webinars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webinars  $webinars
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinars $webinar)
    {
        //
        return view('webinars.edit')->with('webinars', $webinar)->with('scripts',true)->with('date', true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webinars  $webinars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webinars $webinar)
    {
        //
        $this->authorize('update', Webinars::class);
        $webinar = Webinars::find($webinar->id);
                $validasiData = $request->validate([
                    'foto' => 'mimes:jpg,png,jpeg|max:10000',
                    'nama_webinar' => 'required',
                    'tanggal' => 'required',
                    'lokasi' => 'required',
                    'biaya' => 'required',
                    'deskripsi' => 'required',
                    'link' => 'required'
                ]);

        if($request->has('foto')){
            $ext = $request->foto->getClientOriginalExtension(); 
            $nama_file_baru = "foto-". time() . "." . $ext;
            $request->foto->storeAs('public/foto', $nama_file_baru);

            $webinar->foto = $nama_file_baru;
            $webinar->nama_webinar = $validasiData['nama_webinar'];
            $webinar->tanggal = $validasiData['tanggal'];
            $webinar->lokasi = $validasiData['lokasi'];
            $webinar->biaya = $validasiData['biaya'];
            $webinar->deskripsi = $validasiData['deskripsi'];
            $webinar->link = $validasiData['link'];
            $webinar->save();
        } else{
            $webinar->nama_webinar = $validasiData['nama_webinar'];
            $webinar->tanggal = $validasiData['tanggal'];
            $webinar->lokasi = $validasiData['lokasi'];
            $webinar->biaya = $validasiData['biaya'];
            $webinar->deskripsi = $validasiData['deskripsi'];
            $webinar->link = $validasiData['link'];
            $webinar->save();
        }
        return redirect()->route('webinars.index')->with('success', "Data $webinar->nama_webinar berhasil di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webinars  $webinars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinars $webinar)
    {
        //
        $this->authorize('delete', Webinars::class);
        $webinar->delete();
        return redirect()->route('webinars.index')->with('success', 'Data Webinar berhasil dihapus');
    }
}
