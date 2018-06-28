<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    protected $hidden = ['rating', 'last_name'];

    public function nombreCompleto()
    {
        return $this->first_name  . " " . $this->last_name;
    }

    public function favoriteMovie()
    {
        return $this->hasOne(Movie::class, 'id', 'favorite_movie_id');
    }
}
