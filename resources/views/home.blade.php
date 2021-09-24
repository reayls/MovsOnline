@extends('layouts.base')

@section('titulo','Home')

@section('contentmain')
    <div class="">
        <div  class="secthero" >
            <h1>Peliculas Online</h1>
        <section>section</section>
        </div>
        <div class="container-fluid d-flex flex-row pt-4" style="max-width:1540px">
            <main class="container pe-3">
                @isset($parametro)
                        <h2>Parametro de Busqueda "{{$parametro}}"</h2>
                @endisset
                <div class="d-flex flex-wrap justify-content-between">
                    @foreach($peliculas as $pelicula)
                        <a href="ver/{{$pelicula->id}}/{{lower($pelicula->title)}}" class="text-decoration-none onepeli">
                            <div class="card mb-4 me-sm-3 forblr" style="width: 14rem; height:410px">
                                <img src="{{ asset($pelicula->poster) }}" class="card-img-top" height="330" alt="{{$pelicula->title}}">
                                <div class="pt-2 d-flex align-items-center  justify-content-center inhe">
                                <p class="card-text text-center align-middle text-dark"><b>{{$pelicula->title}}</b></p>
                                </div>
                            </div>
                            <div class="sinop card mb-4 me-sm-3" style="width: 14rem; height:410px">
                                <p class="card-text text-center align-middle text-white"><b>{{$pelicula->title}}</b></p>
                                <p>{{$pelicula->sinopsis}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $peliculas->appends(request()->input())->links()}}
                </div>
            </main>
            <aside class="d-none d-md-block mx-4" style="min-width:300px!important">
                <p class="text-center"><strong>Los Mas Populares</strong></p>
                @foreach($populares as $popular)
                        <a href="ver/{{$popular->id}}/{{lower($popular->title)}}" class="text-decoration-none text-dark">
                            <div class="d-flex flex-row align-items-start justify-content-start mb-4" style="width: 300px; height=120">
                                <img src="{{ asset($popular->poster) }}" class="me-2" width="80" alt="{{$popular->title}}">
                                <div class="d-flex flex-column  align-items-start  justify-content-start">
                                    <p class="text-start align-middle">{{$popular->title}}</p>
                                    <p>Votos: <strong>{{$popular->rating}}</strong></p>
                                </div>
                            </div>
                        </a>
                @endforeach
            </aside>
        </div>
    </div>
@endsection