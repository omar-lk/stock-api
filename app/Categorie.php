<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    public function Articles()
    {
        return $this->hasMany(Article::class);
    }
}
