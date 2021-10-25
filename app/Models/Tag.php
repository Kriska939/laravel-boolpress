<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Relazione 1 tag che può avere multipli posts

    public function posts(){
        return $this->belongsToMany('App\Models\Post');
    }
}
