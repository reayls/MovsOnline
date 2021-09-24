@extends('layouts.base')

@section('titulo')
{{$pelicula->title}}
@endsection

@section('contentmain')
    <div class="container">
        <br>
        <br>
        <br>
        <div class="d-flex justify-content-between flex-column flex-sm-column flex-lg-row">
            
            <div class="me-lg-5 text-center text-lg-start mb-2">
                <img src="{{ asset($pelicula->poster) }}" style="height:400px;" alt="{{$pelicula->title}}">
            </div>
            <div class="d-flex flex-column d-lg-flex justify-content-between">
                <h1>{{$pelicula->title}}</h1>
                <p class="text-justify">{{$pelicula->sinopsis}}</p>
                <p><strong>Votos </strong>{{$pelicula->rating}}</p>
                <p><strong>Genero: </strong>{{$pelicula->genero}}</p>
                <p><strong>Director: </strong>{{$pelicula->director}}</p>
                <p><strong>Elenco: </strong>{{$pelicula->actores}}</p>
            </div>
        </div>
        <br>
        <div class="d-flex flex-wrap" id="opcions">
            <a href="#" data-href="{{$pelicula->video1}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion active">Opcion 1</button></a>
            <a href="#" data-href="{{$pelicula->video2}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion">Opcion 2</button></a>
            <a href="#" data-href="{{$pelicula->video3}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion">Opcion 3</button></a>
            <a href="#" data-href="{{$pelicula->video4}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion">Opcion 4</button></a>
            <a href="#" data-href="{{$pelicula->video5}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion">Opcion 5</button></a>
            <a href="#" data-href="{{$pelicula->video6}}" class="mx-2 play mb-2"><button type="button" class="btn btn-outline-dark opcion">Opcion 6</button></a>
        </div>
        <br>
        <div class="bg-dark peque" style="height:45vw; width:100%">
            <iframe src="{{$pelicula->video1}}" style="height:inherit; width:inherit" id="myframe" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
            {{-- <iframe src="https://ealmanacins.com" style="height:inherit; width:inherit" id="myframe" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> --}}
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="">
            <p>Recomendado</p>
            <div class="d-flex flex-wrap">
                @foreach($recomendados as $recomendado)
                <a href="{{url("ver/$recomendado->id")}}/{{lower($recomendado->title)}}" class="text-decoration-none text-dark">
                    <div class="d-flex flex-column align-items-start justify-content-start mb-4" style="width: 300px; height=120">
                        <img src="{{ asset($recomendado->poster) }}" class="me-2" width="80" alt="{{$recomendado->title}}">
                        <div class="d-flex flex-column  align-items-start  justify-content-start">
                            <p class="text-start align-middle">{{$recomendado->title}}</p>
                            <p>Genero: <strong>{{$recomendado->genero}}</strong></p>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </section>
    </div>
@endsection