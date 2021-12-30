<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pub;


class ApiPubController extends Controller
{
    public function showPub(){
        $pubs = Pub::latest()->where('statut', 1)->get();
        return json_encode($pubs);
    } 
}
