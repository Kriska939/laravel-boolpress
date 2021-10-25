<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug', 'category_id'];

    // definisco la relazione dei post con la categoria: (in questo caso, il post può riferirsi SOLO a una categoria)

    public function category(){

        return $this->belongsTo('App\Models\Category');
    }

    // Relazione 1 post che può avere multipli tag

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

}

