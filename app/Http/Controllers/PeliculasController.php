<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{

    private static $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
    ];

    public function buscarPeliculaId($id)
    {
        if (isset(self::$peliculas[$id])) {
            return view('pelicula', [
                'nombre' => self::$peliculas[$id],
                'id' => $id,
                'duracion' => 140,
                'categorias' => ['Accion','Drama','Suspenso']
            ]);
        } else {
            return "Pelicula no encontrada";
        }
    }

    public function buscarPeliculaNombre($nombre)
    {
        if (in_array($nombre, self::$peliculas)) {
            return $nombre;
        } else {
            return "Pelicula no encontrada";
        }
             
    }
}
