<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Members;
use App\Models\Positions;
use App\Models\Study_programs;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Members::all();
        return view('members.index')->with('members', $members)->with('scripts', true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $study_programs = Study_programs::all();
        $divisions = Divisions::all();
        $positions = Positions::all();
        return view('members.create')->with('study_programs', $study_programs)->with('divisions', $divisions)->with('positions', $positions);
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
        $validateData =$request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'angkatan' => 'required',
            'study_programs_id' => 'required',
            'divisions_id' => 'required',
            'positions_id' => 'required'
        ]);

        $member = new Members();
        $member->nama = $validateData['nama'];
        $member->email = $validateData['email'];
        $member->no_hp = $validateData['no_hp'];
        $member->alamat = $validateData['alamat'];
        $member->jenis_kelamin = $validateData['jenis_kelamin'];
        $member->angkatan = $validateData['angkatan'];
        $member->study_programs_id = $validateData['study_programs_id'];
        $member->divisions_id = $validateData['divisions_id'];
        $member->positions_id = $validateData['positions_id'];

        $member->save();//simpan table prodis
        $request->session()->flash('success', "Data Anggota $member->nama berhasil di simpan");
        return redirect()->route('members.index'); //redirect ke prodi.index
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $member)
    {
        //
        $study_programs = Study_programs::all();
        $divisions = Divisions::all();
        $positions = Positions::all();
        return view('members.edit')->with('members',$member)->with('study_programs', $study_programs)->with('divisions', $divisions)->with('positions', $positions);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $member)
    {
        //
        $validateData =$request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'angkatan' => 'required',
            'study_programs_id' => 'required',
            'divisions_id' => 'required',
            'positions_id' => 'required'
        ]);


        Members::where('id', $member->id)->update($validateData);
        $request->session()->flash('success', 'Data Anggota berhasil di edit');
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $member)
    {
        //
        //dd($member);
        $member->delete();
        return redirect()->route('members.index')->with('success', "Data Anggota $member->nama berhasil dihapus");
    }
}