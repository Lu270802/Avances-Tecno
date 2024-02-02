<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Visitantes</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('user.update',$users->id)}}">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre y Apellido</span>
                    <input type="text" class="form-control" name="name" value="{{$users->name}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Documento</span>
                    <input type="text" class="form-control" name="document" value="{{$users->document}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" name="email" value="{{$users->email}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero de celular</span>
                    <input type="text" class="form-control" name="phone" value="{{$users->phone_number}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" name="address" value="{{$users->address}}" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de nacimiento</span>
                    <input type="date" class="form-control" name="birthday" value="{{$users->birthday}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Genero</span>
                    <input type="text" class="form-control" name="genere" value="{{$users->genere}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Crear Contraseña</span>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Confirmar Contraseña</span>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>
                @error('password')
                <div class="alert alert-danger" role="alert">
                    Las contraseñas no coinciden.
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>