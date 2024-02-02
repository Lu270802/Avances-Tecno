@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-empresa">
        <img class="logo-visitados" src="{{asset('images/logoStand.png')}}" alt="">
        <div class="card-header">
            <h1>Crear Stands</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre Stand</label>
                    <input type="text" id="input-empresa" name="name" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Logo URL</label>
                    <input type="file" id="input-empresa" name="logo" accept="image/*" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Banner URL</label>
                    <input type="file" id="input-empresa" name="banner" accept="image/*" require>
                </div>

                <div class="form-floating">
                    <textarea id="input-empresa" placeholder="Descripción" name="description" style="height: 100px"
                        required></textarea>
                </div>

                <div class="input-group mb-3 mt-3">
                    <label for="floatingInput" class="label">Facebook</label>
                    <input type="text" id="input-empresa" name="facebook" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Instagram</label>
                    <input type="text" id="input-empresa" name="instagram" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">TikTok</label>
                    <input type="text" id="input-empresa" name="tiktok" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Sitio web</label>
                    <input type="text" id="input-empresa" name="web" require>
                </div>

                <select id="input-empresa" name="classifications[]">
                    @foreach($classifications as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mt-3" id="btn">Enviar</button>
                        <a href="{{route('stand.index')}}" class="btn btn-primary mt-3" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection