<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();

        return response()->json($actors);
        /*
        return view('actors', [
            'actors' => $actors
        ]);
        */
    }


    public function show($id)
    {
        $actor = Actor::find($id);
        
        return response()->json($actor);

        /*
        return view('actors.show', [
            'actor' => $actor,
            'favoriteMovie' => $actor->favoriteMovie
        ]);
        */
    }
}
