<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtores';

    public function propriedades()
    {
        return $this->hasMany('App\Propriedade');
    }
}
