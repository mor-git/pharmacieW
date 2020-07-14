<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});**/
/**---------------------------------Api Route Région ---------------------------- */
Route::get('/apiRegions',[
        'as'         => 'regionsApi',
        'uses'       => 'ApiRegionController@showRegion',
        'middleware' => 'cors'
]);
/**---------------------------------Fin Api Route Région ---------------------------- */
/**---------------------------------Api Route Commune ---------------------------- */
Route::get('/communesApi/{id}',[
    'as'         => 'communesApi',
    'uses'       => 'ApiCommuneController@showCommune',
    'middleware' => 'cors'
]);
/**---------------------------------Fin Api Route Commune ---------------------------- */
/**---------------------------------Api Route Pharmacie ---------------------------- */
Route::post('/pharmaciesApi',[
    'as'         => 'pharmaciesApi',
    'uses'       => 'ApiPharmacieController@showPharmacie',
    'middleware' => 'cors'
]);
/**---------------------------------Fin Api Route Pharmacie ---------------------------- */
