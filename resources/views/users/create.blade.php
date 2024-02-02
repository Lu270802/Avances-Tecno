@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card" id="card">
                        <div class="card-header">
                            <h1>Registro</h1>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('user.store')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="label-register">{{ __('Nombre y Apellidos') }}</label>
                                <div class="col-md-12">
                                    <input type="text" class="input-register" name="name" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                            <label for="email" class="label-register">{{ __('Email') }}</label>
                                <div class="col-md-12">
                                    <input  type="email" class="input-register" name="email"  required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                            <label for="document" class="label-register">Documento: </label>
                                <div class="col-md-12">
                                    <input id="document" type="number" class="input-register" name="document" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone_number" class="label-register">Número de Celular: </label>

                                <div class="col-md-12">
                                    <input id="phone_number" type="number" class="input-register" name="phone_number" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="label-register">Dirección: </label>

                                <div class="col-md-12">
                                    <input type="text" class="input-register" name="address" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birtday" class="label-register">Fecha de Nacimiento: </label>

                                <div class="col-md-12">
                                    <input type="date" class="input-register" name="birthday" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <select class="input-register mb-2"  name="genere">
                                        <option selected>Seleccione su genero</option>
                                        <option value="F">Femenino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                            <label for="password" class="label-register">{{ __('Password') }}</label>
                                <div class="col-md-12">
                                    <input type="password" class="input-register" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                            <label for="password-confirm" class="label-register">{{ __('Confirm Password') }}</label>

                                <div class="col-md-12">
                                <input id="password-confirm" type="password" class="input-register" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="btn-register" type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>  
        </div>
    </div>
    @endsection