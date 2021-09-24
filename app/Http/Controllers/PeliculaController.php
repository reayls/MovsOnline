<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Http\Helpers\helps;

class PeliculaController extends Controller
{
    public function home(){
        $peliculas = Pelicula::paginate();
        $populares = Pelicula::where('rating','like',"8%")->inRandomOrder()->take(6)->get();
        return view('home', compact('peliculas','populares'));
    }
    public function ver($id,$title){
        $pelicula = Pelicula:: find($id);
        $gene = genero($pelicula->genero);
        $recomendados = Pelicula::where('genero','like',"%$gene%")->inRandomOrder()->take(6)->get();
        return view('mostrarPelicula', compact('pelicula','recomendados'));
    }
    public function buscar(Request $request){
        $parametro=$request->input('search');
        //$peliculas = Pelicula::paginate();
        //$parametro = "este es pa";
        $peliculas = Pelicula::where('title','like',"%$parametro%")->Paginate(10);
        $populares = Pelicula::where('rating','like',"8%")->inRandomOrder()->take(6)->get();
        return view('home', compact('peliculas','parametro','populares'));
    }
}
