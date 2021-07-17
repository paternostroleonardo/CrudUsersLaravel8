<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
     /* retornando vista de login en el metodo create */
    public function create(){
        return view('auth.login');
    }

     /* guardando los datos de login en el metodo store, verificando con metodo attempt que exista el usuario o si la contraseña es correcta*/
    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
             'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/listusers');
    }

    /* deslogueando al usuario utilizando el metodo destroy y redirecion al la ruta principal */
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
