<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacie;
use App\Commune;

class PharmacieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacies = Pharmacie::latest()->get();
        return view('index', ['pharmacies' => $pharmacies ]);
    }

    public function changeStatus(Request $request)
    {
       
        $pharmacie = Pharmacie::find($request->id);

        if($pharmacie->status == 0){

            $pharmacie->status = 1;
            $pharmacie->update();
            
        }else{

            $pharmacie->status = 0;
            $pharmacie->update();

        }
        
        $status = $pharmacie->status;
        $html="";
        if($status == 1){
            $html=$html."<div class='border-top user-social-box' style='background-color: green;'>
            <div class='user-social-media d-xl-inline-block' style='margin-left: 38%;'>
                <span>
                    <h3 class='mb-1' style='color: white;'>Garde Activée</h3>
                </span>
            </div>
        </div>";
       
        }else{
            $html=$html."<div class='border-top user-social-box' style='background-color : red;'>
            <div class='user-social-media d-xl-inline-block' style='margin-left: 38%;'>
                <span>
                    <h3 class='mb-1' style='color: white;'>Garde Terminée</h3>
                </span>
            </div>
        </div>";
        }
        
        return ['html'=>$html,'stat'=>$status];
         
        // return redirect('/accueil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPharmacie()
    {
        $id = 1;
        $status = Pharmacie::find($id)->status;
        $communes = Commune::all();
        $pharmacies = Pharmacie::all();
        return view('pharmacies/addPharmacie', ['communes' => $communes , 'pharmacies' => $pharmacies, 'status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePharmacie(Request $request)
    {
        $params = $request->except(['_token']);

        $pharmacie = new Pharmacie();
        $pharmacie->name        = $params['name'];
        $pharmacie->phone       = $params['phone'];
        $pharmacie->adresse     = $params['address'];
        $pharmacie->description = $params['description'];
        $pharmacie->latitude    = $params['lat'];
        $pharmacie->longitude   = $params['lng'];
        $pharmacie->commune_id  = $params['commune'];
        $pharmacie->status      = 0;
        // dd($pharmacie);
        $pharmacie->save();

        return redirect('/addPharmacie');

    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPharmacie()
    {
        $pharmacies = Pharmacie::latest()->with('communes')->get();
        return view('pharmacies.showPharmacie', ['pharmacies' => $pharmacies ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPharmacie($id)
    {
        $pharmacie = Pharmacie::find($id);
        return view('pharmacies/updatePharmacie', ['pharmacie' => $pharmacie ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePharmacie(Request $request, $id)
    {
        $params = $request->except(['_token']);

        $pharmacie = Pharmacie::find($id);
        $pharmacie->name       = $params['name'];
        $pharmacie->phone      = $params['phone'];
        $pharmacie->adresse    = $params['address'];
        $pharmacie->description= $params['description'];
        $pharmacie->latitude   = $params['lat'];
        $pharmacie->longitude  = $params['lng'];
        $pharmacie->commune_id = $params['commune'];
        $pharmacie->status     = 0;
        $pharmacie->update();

        return redirect('/addPharmacie');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPharmacie($id)
    {
        //
    }
}
