<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cooperations;

class DashboardController extends Controller
{
    //
    public function index(){
    
        if (Auth::user()->user_levels->user_levels === "Mitra"){
            $cooperations = Cooperations::where('users_id', Auth::user()->id)->get();
            return view('cooperations.index')->with('cooperations', $cooperations);
        } else {
            return view('dashboardNew');
        }
    }
}
