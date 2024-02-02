@extends('layouts.app')

@section('content')
<div class="container-fluid" id="container-login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card-login">
            <label for="titulo" class="col-md-4 m-auto">Inicio de sesión</label>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-center text-center">
                                <img src="{{ asset('images/logo-login.png') }}" alt="Logo" height="100px">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-center text-center ">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link" >
                                    ¿Haz olvidado tu contraseña?
                                </a>
                                @endif
                            </div>
                        </div>

                        <!--<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="row mb-3 d-flex justify-content-center text-center">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary" id="btn">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0 d-flex justify-content-center text-center">
                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary" id="btn">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                        <div class="card mt-3" id="card-google">
                            <div class="row mt-2 d-flex justify-content-center text-center">
                                <div class="col-md-12" >
                                    <a id="link-google" href="{{route('login-google')}}"> 
                                        <img src="{{ asset('images/logo-google.png') }}" alt="" height="30px">
                                        <p>Ingreso con Gmail</p>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
