@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Editar Stand</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('stand.update', ['stand' => $stand->id] ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text">Nombre</span>
                <input type="text" class="form-control" name="name" value="{{$stand->name}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Logo URL</span>
                <input type="text" class="form-control" name="logo" value="{{$stand->logo}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Banner URL</span>
                <input type="text" class="form-control" name="banner" value="{{$stand->banner}}">
            </div>
            <div class="form-floating">
                    <textarea class="form-control" placeholder="Feedback" name="description" style="height: 100px">{{ $stand->description }}</textarea>
                    <label for="floatingTextarea2">Feedback</label>
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Facebook</span>
                <input type="text" class="form-control" name="facebook" value="{{$stand->facebook}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Instagram</span>
                <input type="text" class="form-control" name="instagram" value="{{$stand->instagram}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">TikTok</span>
                <input type="text" class="form-control" name="tiktok" value="{{$stand->tiktok}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Sitio web</span>
                <input type="text" class="form-control" name="web" value="{{$stand->web}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Calificación</span>
                <input type="number" class="form-control" name="calification" value="{{$stand->calification}}">
            </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('stand.index')}}" class="btn btn-primary" >Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection