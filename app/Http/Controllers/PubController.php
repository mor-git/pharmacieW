<?php

namespace App\Http\Controllers;

use App\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPub()
    {
        $pub = Pub::all();
        return view('pubs/showPub', ['pubs'=>$pub] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPub()
    {
        $pub = Pub::all();
        return view('pubs/addPub', ['pubs'=>$pub] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePub(Request $request)
    {
        $params = $request->except(['_token']);
        $pub = new Pub();
        if ($request->hasFile('image')) {

            // Save le fichier dans storage/public/ dans un nouveau dossier /images

            // $request->image->store('assets/images/');
            //-------------------------------New-----------------------------------
            $file = $request->file('image');
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('assets/images/'),$filename);


            $pub->chemin      = $filename;
            $pub->libele      = $params['libelle'];
            $pub->datePub     = date('Y-m-d H:i:s'); // recupe date d'aujourd'hui
            $pub->statut      = 1;
            //    dd($pub);
            $pub->save();
        }
        
        return redirect('/pubs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function showPub(Pub $pub)
    {
        $pub = Pub::latest()->where('statut', 1)->get();
        return view('pubs/showPub', ['pubs'=>$pub] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function editPub($id)
    {
        $pub = Pub::find($id);
        return view('pubs/updatePub', ['pub' => $pub] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function updatePub(Request $request, Pub $pub, $id)
    {
        $params = $request->except(['_token']);
        $pub = Pub::find($id);
        $pub->libele       = $params['libele'];
        $pub->datePub      = $params['datePub'];
        $pub->statut       = $params['statut'];
        dd($pub);
        $pub->update();

        return redirect('/pubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function destroyPub($id)
    {
        $pub = Pub::find($id);
        $pub->statut = 0;
        // dd($pub);
        // if($pub->statut === 1){
        //     $pub->statut = 0;
        // }
        $pub->update();
        return redirect('/pubs');
    }
}
