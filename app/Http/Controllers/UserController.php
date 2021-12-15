<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;
use App\Pharmacie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        $users = User::all();
        return view('users.showUser', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        $pharmacies = Pharmacie::all();
        $profils    = Profil::all();
        // return view('auth/register', ['pharmacies' => $pharmacies, 'profils' => $profils ]);
        return view('users/addUser', ['pharmacies' => $pharmacies, 'profils' => $profils ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        $params = $request->except(['_token']);
        $user = new User();

        $pwd = $params['password'];
        $pwdConfirm = $params['passwordConfirmation'];
        if($pwd === $pwdConfirm)
        {
            
            $user->name = $params['name'];
            $user->email = $params['email'];
            $user->password = Hash::make($params['password']);
            if($params['profil'] == 1){

                $user->pharmacie_id = null;
                $user->profil_id = $params['profil'];

            }else{

                $user->pharmacie_id = $params['pharmacie'];
                $user->profil_id = $params['profil'];
            }
        }else{
            ?>
            <script>
                 alert("Les mots de passe ne sont pas conforme!!!!")
                 window.location.href='addUser';
            </script>
            <?php
        }
        //dd($user);
        $user->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUser() 
    {
        $users = User::all();
        return view('users.showUser', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser($id)
    {
        $user = User::find($id);
        return view('users.updateUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        $params = $request->except(['_token']);

        $user = User::find($id);
        $user->name = $params['name'];
        $user->email = $params['email'];
        $user->password = $params['password'];
        if($params['profil'] == 1){

            $user->pharmacie_id = null;
            $user->profil_id = $params['profil'];

        }else{

            $user->pharmacie_id = $params['pharmacie'];
            $user->profil_id = $params['profil'];
        }
        dd($user);
        $user->update();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyUser($id)
    {
        //
    }
}
