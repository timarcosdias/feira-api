<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    public function produtor()
    {
        return $this->belongsTo('App\Produtor');
    }

    public function ofertas()
    {
        return $this->hasMany('App\Oferta');
    }
}
