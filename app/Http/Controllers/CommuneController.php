<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commune;
use App\Region;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = Commune::all();
        return view('communes.showCommune', ['communes' => $communes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCommune()
    {
        $regions = Region::all();
        return view('communes/addCommune' , ['regions' => $regions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCommune(Request $request)
    {
        $name   = $request->input('name');
        $region = $request->input('region');

        $commune = new Commune();
        $commune->name      = $name;
        $commune->region_id = $region;
        $commune->save();

        return redirect('/addCommune');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCommune()
    {
        $communes = Commune::latest()->with('regions')->get();
        return view('communes.showCommune', ['communes' => $communes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editCommune($id)
    {
        $commune = Commune::find($id);

        return view('communes.updateCommune', ['commune' => $commune]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCommune(Request $request, $id)
    {
        $name   = $request->input('name');
        $region = $request->input('region');

        $commune = Commune::find($id);
        $commune->name      = $name;
        $commune->region_id = $region;
        $commune->update();

        return redirect('/addCommune');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCommune($id)
    {
        $com = Commune::find($id);
        $com->delete();
        
        return redirect('/addCommune');
    }
}
