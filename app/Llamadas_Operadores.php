<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llamadas_Operadores extends Model
{
    protected $table = "Llamadas_Operadores";
    protected $fillable = ['id', 'idLlamada', 'idOperador', 'Inicio', 'fin'];

    public function llamadas()
    {
        return $this->belongsTo('App\Llamadas', 'idLlamada', 'id');
    }

    public function operadores()
    {
        return $this->belongsTo('App\User', 'idOperador', 'id');
    }
}
