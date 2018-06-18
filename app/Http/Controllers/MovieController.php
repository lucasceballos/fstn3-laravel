<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {

        $this->validate($request, [
            'rating_minimo' => 'numeric|between:1,10'
        ]);

        $ratingMinimo = $request->input('rating_minimo', 0);

        $movies = Movie::where('rating', '>', $ratingMinimo)->get();

        
        return view('movie', [
            'movies' => $movies,
            'foo' => 'var'
        ]);
    }

    public function store(Request $request)
    {
        // Valido los datos recibidos
        $this->validate($request, [
            'titulo' => 'required',
            'rating' => 'required|numeric',
            'premios' => 'required|numeric',
            'duracion' => 'required'
        ]);

        // Crear la pelicula!
        $movie = Movie::create([
            'title' => $request->input('titulo'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('premios'),
            'length' => $request->input('duracion'),
            'release_date' => '2017-04-01 00:00:00' // Cabeceada
        ]);

        return "Se creo una movie con ID: " . $movie->id;
    }
}
