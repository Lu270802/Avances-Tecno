@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-empresa">
        <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">

        <div class="card-header align-items-center text-center">
            <h1>Editar Lugares</h1>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('places.update',$place->id)}}">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre</label>
                    <input type="text" id="input-empresa" name="name" value="{{$place->name}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Email</label>
                    <input type="text" id="input-empresa" name="email" value="{{$place->email}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Dirección</label>
                    <input type="text" id="input-empresa" name="address"
                        value="{{$place->address}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Latitud</label>
                    <input type="text" id="input-empresa" name="latitude"
                        value="{{$place->latitude}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Longitud</label>
                    <input type="text" id="input-empresa" name="length" value="{{$place->length}}">
                </div>
                <select id="input-empresa" name="schedule_id" required placeholder="Seleccione un Horario">
                    @foreach($schedules as $schedule)
                    <option value='{{$schedule -> id}}' @if($schedule->id == $place->schedule->id) selected @endif>
                        {{$schedule->day}}, {{$schedule->hour_start}} - {{$schedule->hour_end}}
                    </option>
                    @endforeach
                </select>
                <div class="row mt-3 text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="btn">Guardar</button>
                        <a href="{{route('places.index')}}" class="btn btn-danger" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection