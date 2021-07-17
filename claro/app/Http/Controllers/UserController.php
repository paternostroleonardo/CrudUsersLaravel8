<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Department;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('User/listusers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Cities = City::all();
        $Departments = Department::all();
        return view('User/create', compact('Cities', 'Departments'))->with('status', 'User created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

       return redirect()->route('listusers.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->get();

        return view('User/show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        $Cities = City::all();
        $Departments = Department::all();
        return view('User/edit', compact('user', 'Cities', 'Departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $user->update($request->all());
       return redirect()->route('listusers.index')->with('status', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('listusers.index')->with('status', 'User deleted');
    }
}