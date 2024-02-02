@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-empresa">
        <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">
        <div class="card-header align-items-center text-center">
            <h1>Editar Usuario - Empresa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('empresa.update', $empresa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre Empresa</label>
                    <input type="text" class="form-control" id="input-empresa" name="name" value="{{$empresa->name}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Correo Electronico</label>
                    <input type="email" class="form-control" id="input-empresa" name="email"
                        value="{{$empresa->email}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Documento</label>
                    <input type="text" class="form-control" id="input-empresa" name="document"
                        value="{{$empresa->document}}">
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Numero Telefonico</label>
                    <input type="text" class="form-control" id="input-empresa" name="phone_number"
                        value="{{$empresa->phone_number}}">
                </div>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="btn">Actualizar Usuario</button>
                        <a href="{{route('empresa.index')}}" class="btn btn-primary" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection