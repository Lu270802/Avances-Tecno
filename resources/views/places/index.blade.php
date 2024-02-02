@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header align-items-center text-center">
            <h1>Lugares Registrados</h1>
            <a href="{{route('places.create')}}" class="btn btn-success" id="btn">Crear Nuevo Lugar</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Latitud</th>
                            <th scope="col">Longitud</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                        <tr>
                            <th scope="row">{{$place->id}}</th>
                            <td>{{$place->name}}</td>
                            <td>{{$place->email}}</td>
                            <td>{{$place->address}}</td>
                            <td>{{$place->latitude}}</td>
                            <td>{{$place->length}}</td>
                            <td>{{$place->schedule->day}}, {{$place->schedule->hour_start}} a
                                {{$place->schedule->hour_end}}
                            </td>
                            <td><a href="{{route('places.edit',$place->id)}}" class="btn btn-primary"
                                    id="btn-acciones">Editar</a></td>
                            <form method="post" action="{{route('places.destroy',$place->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger"
                                        id="btn-acciones">Eliminar</button></td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection