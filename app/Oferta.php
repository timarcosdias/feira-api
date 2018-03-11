<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'ofertas';

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }

    // Produtor ou Propriedade?
    public function produtor()
    {
        return $this->belongsTo('App\Produtor');
    }

    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
}
