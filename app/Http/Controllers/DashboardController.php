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
            $statusKerjaSamaDiproses = DB::select("SELECT COUNT(*) AS 'jumlah' FROM cooperations WHERE status = 'Sedang Proses'")[0]->jumlah;
            $statusKerjaSamaDisetujui = DB::select("SELECT COUNT(*) AS 'jumlah' FROM cooperations WHERE status = 'Disetujui'")[0]->jumlah;
            $statusKerjaSamaDitolak = DB::select("SELECT COUNT(*) AS 'jumlah' FROM cooperations WHERE status = 'Ditolak'")[0]->jumlah;
            $anggotaPerDivisi = DB::select("SELECT divisions.nama_divisi, COUNT(*) AS 'jumlah' FROM members INNER JOIN divisions ON members.divisions_id = divisions.id GROUP BY divisions.nama_divisi");
            $jumlahUserMitra = DB::select("SELECT COUNT(*) AS 'jumlah' FROM users INNER JOIN user_levels ON users.user_levels_id = user_levels.id WHERE user_levels.user_levels = 'Mitra'")[0]->jumlah;
            return view('dashboardNew')->with('jumlahAnggota', $jumlahAnggota)->with('jumlahKerjaSama', $jumlahKerjaSama)->with('jumlahStatusDiproses',$statusKerjaSamaDiproses)->with('jumlahStatusDisetujui',$statusKerjaSamaDisetujui)->with('jumlahStatusDitolak',$statusKerjaSamaDitolak)->with('anggotaPerDivisi',$anggotaPerDivisi)->with('jumlahUserMitra', $jumlahUserMitra);
        }
    }
}
