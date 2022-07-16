<?php

namespace App\Http\Controllers;

use App\Models\Cooperations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organizers;
use App\Models\Service_details;

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
        return view('cooperations.index')->with('cooperations', $cooperations)->with('scripts',true);
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
        $this->authorize('create', Cooperations::class);
        $organizers = Organizers::all();
        return view('cooperations.create')->with('organizers', $organizers)->with('date', true)->with('scripts',true);
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
                'organizers' => 'required',
                'tanggal_kegiatan' => 'required',
                'no_hp' => 'required',
                'lokasi' => 'required',
                'surat_izin' => 'required|mimes:pdf,jpg,png|max:10000',
                'surat_kerjasama' => 'required|mimes:pdf,jpg,png|max:10000'
        ]);

        $ext1 = $request->surat_izin->getClientOriginalExtension(); 
        $ext2 = $request->surat_kerjasama->getClientOriginalExtension(); 
        $nama_file_baru1 = "surat_izin-". time() . "." . $ext1;
        $nama_file_baru2 = "surat_kerjasama-". time() . "." . $ext2;
        
        $request->surat_izin->storeAs('public/files', $nama_file_baru1);
        $request->surat_kerjasama->storeAs('public/files', $nama_file_baru2);

        $cooperations = Cooperations::create([
            'nama_kegiatan' => $validasi['nama_kegiatan'],
            'organizers_id' => $validasi['organizers'],
            'tanggal_kegiatan' => $validasi['tanggal_kegiatan'],
            'no_hp' => $validasi['no_hp'],
            'lokasi' => $validasi['lokasi'],
            'surat_izin' =>$nama_file_baru1,
            'surat_kerjasama' =>$nama_file_baru2,
            'users_id' => Auth::user()->id
        ]);

        foreach($request->orderServices as $service){
            $cooperations->services()->attach($service["'service_categories_id'"]);
        }
        $request->session()->flash('success', 'Data Kerjasama berhasil di simpan');
        return redirect()->route('cooperations.index');
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
        $service_details = Service_details::where('cooperations_id', $cooperation->id)->get();
        // dd($service_details);
        return view('cooperations.show')->with('cooperations', $cooperation)->with('service_details', $service_details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperations $cooperation)
    {
        //
        $service_details = Service_details::where('cooperations_id', $cooperation->id)->get();
        $organizers = Organizers::all();
        return view('cooperations.edit')->with('organizers', $organizers)->with('cooperations', $cooperation)->with('service_details', $service_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperations  $cooperations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperations $cooperation)
    {
        //
        // dd($cooperations);
        // dd($cooperation);
        $this->authorize('update', Cooperations::class);
        $cooperation = Cooperations::find($cooperation->id);
        // dd($cooperation->id);
        $validasi = $request->validate([
                'nama_kegiatan' => 'required',
                'organizers' => 'required',
                'tanggal_kegiatan' => 'required',
                'no_hp' => 'required',
                'lokasi' => 'required',
                'surat_izin' => 'mimes:pdf,jpg,png|max:10000',
                'surat_kerjasama' => 'mimes:pdf,jpg,png|max:10000'
        ]);

        // dd(!$request->has('surat_izin'));
        if($request->has('surat_izin') || $request->has('surat_kerjasama')){
            $ext1 = $request->surat_izin->getClientOriginalExtension(); 
            $ext2 = $request->surat_kerjasama->getClientOriginalExtension(); 
            $rename_file1 = "surat_izin-". time() . "." . $ext1;
            $rename_file2 = "surat_kerjasama-". time() . "." . $ext2;
            
            $request->surat_izin->storeAs('public/files', $rename_file1);
            $request->surat_kerjasama->storeAs('public/files', $rename_file2);

            $cooperation->update([
                'nama_kegiatan' => $validasi['nama_kegiatan'],
                'organizers_id' => $validasi['organizers'],
                'tanggal_kegiatan' => $validasi['tanggal_kegiatan'],
                'no_hp' => $validasi['no_hp'],
                'lokasi' => $validasi['lokasi'],
                'surat_izin' =>$rename_file1,
                'surat_kerjasama' =>$rename_file2
            ]);
        } else{
            $cooperation->update([
                'nama_kegiatan' => $validasi['nama_kegiatan'],
                'organizers_id' => $validasi['organizers'],
                'tanggal_kegiatan' => $validasi['tanggal_kegiatan'],
                'no_hp' => $validasi['no_hp'],
                'lokasi' => $validasi['lokasi']
            ]);
        }
        $request->session()->flash('success', 'Data Kerjasama berhasil di edit');
        return redirect()->back();
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
        $this->authorize('delete', Cooperations::class);
        $cooperation->delete();
        return redirect()->route('cooperations.index')->with('success', 'Data Kerjasama berhasil dihapus');
    }

    public function approved($id){
        $data = Cooperations::find($id);
        $data->status = "Disetujui";

        $data->save();

        return redirect()->route('cooperations.index')->with('success', 'Kerjasama disetujui');
    }

    public function canceled($id){
        $data = Cooperations::find($id);
        $data->status = "Ditolak";

        $data->save();

        return redirect()->route('cooperations.index')->with('error', 'Kerjasama ditolak');
    }
}
