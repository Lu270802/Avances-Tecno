@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-empresa">
        <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">
        <div class="card-header align-items-center text-center">
            <h1>Registro de Lugares</h1>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card-body">
            <form method="post" action="{{route('places.store')}}">
                @csrf
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre</label>
                    <input type="text" id="input-empresa" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Email</label>
                    <input type="text" id="input-empresa" name="email" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Dirección</label>
                    <input type="text" id="input-empresa" name="address" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Latitud</label>
                    <input type="text" id="input-empresa" name="latitude" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Longitud</label>
                    <input type="text" id="input-empresa" name="length" required>
                </div>
                <select id="input-empresa" name="schedule_id" required placeholder="Seleccione un Horario">
                    <option value="" disabled selected>Seleccione un Horario</option>
                    @foreach($schedules as $schedule)
                    <option value='{{$schedule -> id}}'>{{$schedule->day}}, {{$schedule->hour_start}} -
                        {{$schedule->hour_end}}</option>
                    @endforeach
                </select>
                <div class="row text-center mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="btn">Registrar</button>
                        <a href="{{route('places.index')}}" class="btn btn-danger" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection