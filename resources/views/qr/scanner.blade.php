@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col text-center">
                <h4 class="text-center mb-4">Escanea y Comparte tu Opinión</h4>
                <img id="imagenEscaneo" src="{{asset('images/scaneo.png')}}" alt="" width="100px">
                <div id="qrVideo" class="video-container" style="display: none;">
                    <video id="preview"></video>
                </div>
                <div id="qrResult" class="mt-3"></div>
                <button id="scanQR" class="boton">Escanear Código QR</button>
            </div>
        </div>
    </div>

@endsection
