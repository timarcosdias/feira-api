<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'ofertas';

    public function feira()
    {
        return $this->belongsTo('App\Feira');
    }

    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }

    public function propriedade()
    {
        return $this->belongsTo('App\Propriedade');
    }

    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
}
