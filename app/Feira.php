<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feira extends Model
{
    public function ofertas()
    {
        $this->hasMany('App\Oferta');
    }
}
