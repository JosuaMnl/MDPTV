<?php

namespace App\Http\Controllers;

use App\Models\Service_categories;
use Illuminate\Http\Request;

class ServiceCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service_categories = Service_categories::all();
        return view('service_categories.index')->with('service_categories', $service_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('service_categories.create');
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
        $validateData =$request->validate(
            ["nama_layanan"=>"required"]
        );

        $service_categories = new Service_categories();
        $service_categories->nama_layanan = $validateData['nama_layanan'];

        $service_categories->save();
        return redirect()->route('service_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service_categories  $service_categories
     * @return \Illuminate\Http\Response
     */
    public function show(Service_categories $service_categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service_categories  $service_categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Service_categories $service_category)
    {
        //
        return view('service_categories.edit')->with('service_categories', $service_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service_categories  $service_categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service_categories $service_category)
    {
        //
        $validateData = $request->validate(
            ['nama_layanan'=>'required']
        );

        Service_categories::where('id', $service_category->id)->update($validateData);
        $request->session()->flash('info', 'Data Kategori Layanan berhasil di ubah');
        return redirect()->route('service_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service_categories  $service_categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service_categories $service_category)
    {
        //
        $service_category->delete();
        return redirect()->route('service_categories.index')->with('info', "Data kategori layanan $service_category->nama_layanan berhasil dihapus");
    }
}
