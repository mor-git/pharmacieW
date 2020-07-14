<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Commune;

class ApiCommuneController extends Controller
{
    public function showCommune($id){
        $communes = Commune::where('region_id',$id)->get();
        return json_encode($communes);
    }
} 
