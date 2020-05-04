<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    public function categorie()
    {
        return $this->belongsTo('App\Categorie', 'id');
    }
}
