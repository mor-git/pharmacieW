<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
/**----------------------------Route Region --------------------------- */
// Route::get('/regions',[
//     'as'   => 'regions',
//     'uses' => 'RegionController@indexRegion'
// ]);
Route::get('/regions',[
    'as'   => 'regions',
    'uses' => 'RegionController@showRegion'
]);
Route::get('/addRegion',[
    'as'   => 'addRegion',
    'uses' => 'RegionController@createRegion'
]);
Route::post('/storeRegion',[
    'as'   => 'storeRegion',
    'uses' => 'RegionController@storeRegion'
]);
Route::get('/editRegion',[
    'as'   => 'editRegion',
    'uses' => 'RegionController@editRegion'
]);
Route::put('/updateRegion',[
    'as'   => 'updateRegion',
    'uses' => 'RegionController@updateRegion'
]);
/**---------------------------- Fin Route Region --------------------------- */
/**----------------------------Route Commune --------------------------- */
// Route::get('/communes',[
//     'as'   => 'communes',
//     'uses' => 'CommuneController@index'
// ]);
Route::get('/communes',[
    'as'   => 'communes',
    'uses' => 'CommuneController@showCommune'
]);
Route::get('/addCommune',[
    'as'   => 'addCommune',
    'uses' => 'CommuneController@createCommune'
]);
Route::post('/storeCommune',[
    'as'   => 'storeCommune',
    'uses' => 'CommuneController@storeCommune'
]);
Route::get('/editCommune/{id}',[
    'as'   => 'editCommune',
    'uses' => 'CommuneController@editCommune'
]);
Route::post('/updateCommune/{id}',[
    'as'   => 'updateCommune',
    'uses' => 'CommuneController@updateCommune'
]);
Route::get('/destroyCommune/{id}',[
    'as'   => 'destroyCommune',
    'uses' => 'CommuneController@destroyCommune'
]);
/**---------------------------- Fin Route Commune --------------------------- */
/**----------------------------Route Pharmacie --------------------------- */
Route::get('/accueil',[
    'as'   => 'accueil',
    'uses' => 'PharmacieController@index'
]);
Route::get('/pharmacies',[
    'as'   => 'pharmacies',
    'uses' => 'PharmacieController@showPharmacie'
]);
Route::get('/changeStatus/{id}',[
    'as'   => 'changeStatus',
    'uses' => 'PharmacieController@changeStatus'
]);
Route::get('/addPharmacie',[
    'as'   => 'addPharmacie',
    'uses' => 'PharmacieController@createPharmacie'
]);
Route::post('/storePharmacie',[
    'as'   => 'storePharmacie',
    'uses' => 'PharmacieController@storePharmacie'
]);
Route::get('/editPharmacie/{id}',[
    'as'   => 'editPharmacie',
    'uses' => 'PharmacieController@editPharmacie'
]);
Route::post('/updatePharmacie/{id}',[
    'as'   => 'updatePharmacie',
    'uses' => 'PharmacieController@updatePharmacie'
]);
/**---------------------------- Fin Route Pharmacie --------------------------- */
/**----------------------------Route Profil --------------------------- */
// Route::get('/profils',[
//     'as'   => 'profils',
//     'uses' => 'ProfilController@indexProfil'
// ]);
Route::get('/profils',[
    'as'   => 'profils',
    'uses' => 'ProfilController@showProfil'
]);
Route::get('/addProfil',[
    'as'   => 'addProfil',
    'uses' => 'ProfilController@createProfil'
]);
Route::post('/storeProfil',[
    'as'   => 'storeProfil',
    'uses' => 'ProfilController@storeProfil'
]);
Route::get('/editProfil/{id}',[
    'as'   => 'editProfil',
    'uses' => 'ProfilController@editProfil'
]);
Route::post('/updateProfil/{id}',[
    'as'   => 'updateProfil',
    'uses' => 'ProfilController@updateProfil'
]);
/**---------------------------- Fin Route Profil --------------------------- */
/**----------------------------Route Users --------------------------- */
Route::get('/users',[
    'as'   => 'users',
    'uses' => 'UserController@indexUser'
]);
Route::get('/addUser',[
    'as'   => 'addUser',
    'uses' => 'UserController@createUser'
]);
Route::post('/storeUser',[
    'as'   => 'storeUser',
    'uses' => 'UserController@storeUser'
]);
Route::get('/editUser',[
    'as'   => 'editUser',
    'uses' => 'UserController@editUser'
]);
Route::put('/updateUser',[
    'as'   => 'updateUser',
    'uses' => 'UserController@updateUser'
]);
/**---------------------------- Fin Route Users --------------------------- */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
