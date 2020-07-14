<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacie;

class ApiPharmacieController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPharmacie(Request $request)
    {
        $pharmacies = Pharmacie::where('commune_id',$request->id)->get();
        return json_encode($pharmacies);
    }
}
