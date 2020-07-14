<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;

class ApiRegionController extends Controller
{
    public function showRegion(){

        $regions = Region::oldest()->with('communes')->get()->toArray();
        return json_encode($regions);
    }
}
