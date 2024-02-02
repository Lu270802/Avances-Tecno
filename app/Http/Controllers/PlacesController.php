<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\AuthService;
use App\Models\Places;
use App\Models\Schedule;


class PlacesController extends Controller
{   
    private $service;
    private $user;

    public function __construct(AuthService $service)
    {
        $this->service=$service;
        
    }

    private function userInauthenticated()
    {
        $this->user = $this->service->getUserAuthenticated();
        if (!$this->user || $this->user->rol->nombre != 'Administrador') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $this->userInauthenticated();
        $places= Places::with('schedule')->get();
        //dd($places);
        return view('places.index', compact('places'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()    
    {   
        $this->userInauthenticated();
        $schedules= Schedule::all();
        return view('places.create', compact('schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->userInauthenticated();
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'latitude'=>'required',
            'length'=>'required',
            'schedule_id'=>'required',
        ]);

        $place= new Places();
        $place->name = $request->name;
        $place->email = $request->email;
        $place->address = $request->address;
        $place->latitude = $request->latitude;
        $place->length = $request->length;
        $place->schedule_id = $request->schedule_id;
        $place->save();
        return redirect()->route('places.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show(Places $places)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $this->userInauthenticated();
        $place = Places::find($id);
        $schedules= Schedule::all();
        return view('places.edit', compact('place','schedules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->userInauthenticated();
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'latitude'=>'required',
            'length'=>'required',
            'schedule_id'=>'required',
        ]);
        $place = Places::find($id);
        $place->name = $request->name;
        $place->email = $request->email;
        $place->address = $request->address;
        $place->latitude = $request->latitude;
        $place->length = $request->length;
        $place->schedule_id = $request->schedule_id;
        $place->update();
  
        return redirect()->route('places.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $this->userInauthenticated();
        $place = Places::find($id);   
        if ($place) {
            $place->delete();
            return redirect()->route('places.index')->with('success', 'Lugar eliminado exitosamente');
        } else {
            return redirect()->route('places.index')->with('error', 'No se encontró el lugar para eliminar');
        }
    }
}
