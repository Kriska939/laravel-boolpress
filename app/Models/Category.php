<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // definisco la relazione delle categorie con i post: (in questo caso, le categorie possono avere TANTI post)

    public function posts(){
        $this->hasMany('App\Models\Post');
    }
}
