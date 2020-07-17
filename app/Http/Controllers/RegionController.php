<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRegion()
    {
        $regions = Region::all();
        return view('regions.showRegion', ['regions' => $regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRegion()
    {
        $regions = Region::orderBy('id', 'desc')->get();
        return view('regions.addRegion', ['regions' => $regions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRegion(Request $request)
    {
        $name = $request->input('name');

        $region = new Region();
        $region->name = $name;
        $region->save();

        return redirect('/addRegion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRegion()
    {
        $regions = Region::latest()->get();
        return view('regions.showRegion', ['regions' => $regions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRegion($id)
    {
        $region = Region::find($id);
        return view('regions.updateRegion', ['region' => $region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRegion(Request $request, $id)
    {
        $name = $request->input('name');

        $region = Region::find($id);
        $region->name = $name;
        $region->update();

        return redirect('/regions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRegion($id)
    {
        //
    }
}
