<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludosController extends Controller
{
    public function hola($nombre = "Anonimo")
    {
        return "Hola $nombre!";
    }

    public function chau()
    {
        return "Chau mundo!";
    }
}
