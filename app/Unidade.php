<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';

    public function produtos()
    {
        $this->hasMany('App\Produto');
    }
}
