<?php

namespace App\Http\Controllers;

use App\Models\User_levels;
use Illuminate\Http\Request;

class UserLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_levels = User_levels::all();
        return view('user_levels.index')->with('user_levels', $user_levels)->with('scripts',true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user_levels.create');
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
        $validateData = $request->validate([
            'user_levels' => 'required'
        ]);

        $user_levels = new user_levels();
        $user_levels->user_levels = $validateData['user_levels'];

        $user_levels->save();
        $request->session()->flash('success', 'Data User Levels berhasil di simpan');
        return redirect()->route('user_levels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_levels  $user_levels
     * @return \Illuminate\Http\Response
     */
    public function show(User_levels $user_levels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_levels  $user_levels
     * @return \Illuminate\Http\Response
     */
    public function edit(User_levels $user_level)
    {
        //
        return view('user_levels.edit')->with('user_levels', $user_level);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_levels  $user_levels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_levels $user_level)
    {
        //
        $validateData =$request->validate([
            'user_levels' => 'required'
        ]);

        User_levels::where('id', $user_level->id)->update($validateData);
        $request->session()->flash('success', 'Data User Levels berhasil di edit');
        return redirect()->route('user_levels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_levels  $user_levels
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_levels $user_level)
    {
        //
        $user_level->delete();
        return redirect()->route('user_levels.index')->with('success', "Data $user_level->user_levels berhasil dihapus");
    }
}