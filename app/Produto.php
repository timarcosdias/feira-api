<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';


    public function ofertas()
    {
        return $this->hasMany('App\Oferta');
    }

}
