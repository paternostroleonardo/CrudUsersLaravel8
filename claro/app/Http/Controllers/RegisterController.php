<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Department;
use DB;

class RegisterController extends Controller
{
    /* retornando vista de register en el metodo create y compactando los datos de los modelos ciudades y departamentos */
    public function create(){
        $Cities = City::all();
        $Departments = Department::all();
        return view('auth.register', compact('Cities', 'Departments'));
    }

     /* guardando los datos del formulario registro en el metodo store y validandolos */
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'identification' => 'required',
            'phone' => 'required|max:10',
            'namecity' => 'required',
            'namedpto' => 'required',
            'birth_date' => "required|date|before:2002-07-15",
        ]);

       $user = User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => $request['password'],
           'identification' => $request['identification'],
           'phone' => $request['phone'],
           'namecity' => $request['namecity'],
           'namedpto' => $request['namedpto'],
           'birth_date' => $request['birth_date']
       ]);

       auth()->login($user);
       return redirect()->to('/listusers');
    }
}
