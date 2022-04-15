<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProfil()
    {
        $profils = Profil::all();
        return view('profils/showProfil', ['profils' => $profils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfil()
    {
        $profils = Profil::all();
        return view('profils.addProfil', ['profils' => $profils]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfil(Request $request)
    {
        $libelle = $request->input('libelle');

        $profil = new Profil();
        $profil->libelle = $libelle;
        $profil->save();

        return view('profils.addProfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfil()
    {
        $profils = Profil::all();
        return view('profils/showProfil', ['profils' => $profils]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProfil($id)
    {
        $profil = Profil::find($id);
        return view('profils.updateProfil', ['profil' => $profil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfil(Request $request, $id)
    {
        $libelle = $request->input('libelle');

        $profil = Profil::find($id);
        $profil->libelle = $libelle;
        $profil->update();

        return redirect('/profils')->with('success', 'Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProfil($id)
    {
        $profil = Profil::find($id);
        // dd($profil);
        $profil->delete();

        return redirect('/profils');
    }
}
