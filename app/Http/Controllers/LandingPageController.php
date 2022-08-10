<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatans;
use App\Models\Webinars;

class LandingPageController extends Controller
{
    //
    public function index(){
        $kegiatan = Kegiatans::latest()->limit(2)->get();
        $webinar = Webinars::latest()->limit(3)->get();
        return view('landing-page-part.index')->with('kegiatan', $kegiatan)->with('webinar', $webinar);
    }

    public function kegiatanPage(){
        $kegiatan = Kegiatans::latest()->paginate(6);
        return view('landing-page-part.kegiatan')->with('kegiatan', $kegiatan);
    }

    public function webinarPage(){
        $webinar = Webinars::latest()->paginate(6);
        return view('landing-page-part.webinar')->with('webinar', $webinar);
    }
}
