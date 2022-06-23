<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cooperations;
use App\Models\Documentation;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
    
        if (Auth::user()->user_levels->user_levels === "Mitra"){
            $cooperations = Cooperations::where('users_id', Auth::user()->id)->get();
            return view('cooperations.index')->with('cooperations', $cooperations);
        } elseif(Auth::user()->user_levels->user_levels === "Multimedia") {
            $documentations = Documentation::all();
            return view('documentations.index')->with('documentations', $documentations);
        } else {
            $jumlahAnggota = DB::select("SELECT COUNT(*) AS 'jumlah' FROM members")[0]->jumlah;
            $jumlahKerjaSama = DB::select("SELECT COUNT(*) AS 'jumlah' FROM cooperations")[0]->jumlah;
            $statusKerjaSama = DB::select("SELECT status,COUNT(*) AS 'jumlah' FROM cooperations GROUP BY status");
            $anggotaPerDivisi = DB::select("SELECT divisions.nama_divisi, COUNT(*) AS 'jumlah' FROM members INNER JOIN divisions ON members.divisions_id = divisions.id GROUP BY divisions.nama_divisi");
            return view('dashboardNew')->with('jumlahAnggota', $jumlahAnggota)->with('jumlahKerjaSama', $jumlahKerjaSama)->with('jumlahStatus',$statusKerjaSama)->with('anggotaPerDivisi',$anggotaPerDivisi);
        }
    }
}
