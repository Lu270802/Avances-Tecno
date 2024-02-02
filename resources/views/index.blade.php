@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card mb-5" id="card-logos-index">
        <div class="card-body text-center">
            <div class="row justify-content-center">
                @foreach ($stands as $stand)
                <div class="col-6 col-md-2 mb-2">
                    <img class="logoStandIndex" src="{{ $stand->logo }}" alt="{{ $stand->name }}"
                        style="max-width: 100%;">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @foreach ($stands as $stand)
            <div class="carousel-item active">
                <img src="{{$stand->banner }}" class="d-block w-100" alt="...">
            </div>
            <!--<div class="carousel-item">
                <img src="{{ asset('carrusel/img02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/stands_de_tecnologia.jpg') }}" class="d-block w-100" alt="...">
            </div>-->
        @endforeach
        </div>
    </div>

    <h2 class="text-center mt-4 mb-4">Nuestros Aliados</h2>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-4 mb-4">
            <img src="{{asset('aliados/logo_TecnoParque.png')}}" alt="Aliado 1" class="img-fluid" width="250px">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('aliados/Logo_de_las_Unidades_Tecnológicas_de_Santander.png')}}" alt="Aliado 2"
                class="img-fluid" width="250px">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('aliados/LOGO_COLOMBIA_POTENCIA.png')}}" alt="Aliado 3" class="img-fluid" width="250px">
        </div>
        <div class="col-md-4 mb-5">
            <img src="{{asset('aliados/Logo_Ministerio_de_Comercio_Industria_y_Turismo.png')}}" alt="Aliado 4"
                class="img-fluid" width="250px">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('aliados/logo_Innpulsa.png')}}" alt="Aliado 5" class="img-fluid" width="250px">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('aliados/logo_Cemprende.png')}}" alt="Aliado 6" class="img-fluid" width="250px">
        </div>
    </div>
</div>
@endsection