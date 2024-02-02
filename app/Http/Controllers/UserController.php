<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::where('rol_id',2)->get();
        //dd($users)

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $users = $request->validate([
            'name'=>'required',
            'document'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'birthday'=>'required',
            'genere'=>'required|not_in:Seleccione su genero',
            'password'=>'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);

        
        $users = new User();
        $users->name = $request->name;
        $users->document = $request->document;
        $users->email = $request->email;
        $users->phone_number = $request->phone;
        $users->address = $request->address;
        $users->birthday = $request->birthday;
        $users->genere = $request->genere;
        $users->password = bcrypt($request->password);
        $users->rol_id = '2';
        $users->assignRole('Visitante');
        $users->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validar = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'birthday'=>'required',
            'genere'=>'required',
            'password'=>'required|min:8|confirmed',
        ]);
        $users = User::find($id);
        $users->name = $request->name;
        $users->document = $request->document;
        $users->email = $request->email;
        $users->phone_number = $request->phone;
        $users->address = $request->address;
        $users->birthday = $request->birthday;
        $users->genere = $request->genere;
        $users->password = bcrypt($request->password);
        $users->rol_id = '2';
        $users->update();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index');
    }
}
